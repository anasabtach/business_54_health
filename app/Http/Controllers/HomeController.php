<?php
namespace App\Http\Controllers;

use App\Models\ContentManagement;
use App\Models\ResetPassword;
use App\Models\User;
use App\Models\UserApiToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->__viewData['header_class']   = '';
        $this->__viewData['body_class']     = '';
        $this->__viewData['is_show_footer'] = true;
        $this->__viewData['footer_class']   = 'mt';

    }

    public function index()
    {
        return $this->__renderView('index');
    }

    public function dealManagement()
    {   
        $this->__viewData['deal_type'] = 'default';
        return $this->__renderView('deal-management');
    }

    public function dealCreate()
    {
        $this->__viewData['deal_type'] = 'default';
        return $this->__renderView('deal-create');
    }

    public function dealDetail($slug)
    {
        $response = $this->__httpApiGetRequest('vendor/deal/'.$slug);
        if( empty($response->data) )
            return redirect()->route('deal-management');

        $this->__viewData['record'] = $response->data;
        return $this->__renderView('deal-detail');
    }

    public function dealEdit($slug)
    {
        $response = $this->__httpApiGetRequest('deal/'.$slug);
        if( empty($response->data) )
            return redirect()->route('deal-management');

        $this->__viewData['record'] = $response->data;
        return $this->__renderView('deal-edit');
    }

    public function marketingManagement()
    {
        $this->__viewData['deal_type'] = 'marketing';
        return $this->__renderView('deal-management');
    }

    public function marketingDealAdd()
    {
        $this->__viewData['deal_type'] = 'marketing';
        return $this->__renderView('deal-create');
    }

    public function community()
    {
        $response = $this->__httpApiGetRequest('category',['type' => 'promote']);
        $this->__viewData['businessCategories'] = $response->data;
        return $this->__renderView('community');
    }

    public function vendorMap()
    {
        $response = $this->__httpApiGetRequest('category',['type' => 'promote']);
        $this->__viewData['is_show_footer'] = false;
        $this->__viewData['businessCategories'] = $response->data;
        return $this->__renderView('vendor-map');
    }

    public function vendorDetail($slug)
    {
        $response = $this->__httpApiGetRequest('vendor/'.$slug);
        if( empty($response->data) )
            return redirect()->route('community');

        $this->__viewData['record'] = $response->data;
        return $this->__renderView('vendor-detail');
    }

    public function vendorDeal()
    {
        return $this->__renderView('vendor-deal');
    }

    public function login()
    {
        $this->__viewData['main_section_class'] = 'login-sec';
        $this->__viewData['box_class'] = 'login-box';
        return $this->__renderView('auth.login');
    }

    public function forgotPassword()
    {
        $this->__viewData['main_section_class'] = 'forgert-sec';
        $this->__viewData['box_class'] = 'forget-box';
        return $this->__renderView('auth.forgot-password');
    }

    public function resetPassword(Request $request,$token)
    {
        $checkRequest = ResetPassword::getUserRequest($token);
        if( !isset($checkRequest->id) )
            return redirect('login')->with('error',__('app.invalid_new_password_link'));

        if( strtotime(Carbon::now()) > strtotime(Carbon::make($checkRequest->created_at)->addHour()) )
            return redirect('login')->with('error',__('app.invalid_new_password_link'));

        if( $request->isMethod('post') )
            return $this->_submitResetPassword($request,$checkRequest);

        $this->__viewData['main_section_class'] = 'forgert-sec';
        $this->__viewData['box_class'] = 'forget-box';
        return $this->__renderView('auth.reset-password');
    }

    private function _submitResetPassword($request,$reset_pass_record)
    {
        $custom_messages = [
            'new_password.regex' => __('app.password_regex')
        ];
        $validator = Validator::make($request->all(), [
            'new_password'     => [
                'required',
                'regex:/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,150}$/'
            ],
            'confirm_password' => 'required|same:new_password',
        ],$custom_messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator) ->withInput();
        }
        //update new password
        User::updateUserByEmail($reset_pass_record->email,['password' => Hash::make($request['new_password'])]);
        //delete reset password request
        $reset_pass_record->forceDelete();
        //delete all api token
        UserApiToken::where('user_id',$reset_pass_record->user_id)->forceDelete();

        return redirect('login')->with('success',__('app.password_success_msg'));
    }

    public function signup()
    {
        $this->__viewData['main_section_class'] = 'login-sec';
        $this->__viewData['box_class'] = 'login-box';
        $this->__viewData['business_categories'] = $this->getCategory('business');
        $this->__viewData['promote_categories']  = $this->getCategory('promote');
        return $this->__renderView('auth.sign-up');
    }

    public function myAccount()
    {
        $this->__viewData['is_show_footer'] = false;
        $this->__viewData['business_categories'] = $this->getCategory('business');
        $this->__viewData['promote_categories']  = $this->getCategory('promote');
        return $this->__renderView('my-account');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }

    public function getCategory($type)
    {
        $response = $this->__httpApiGetRequest('category',['type' => $type]);
        return $response;
    }

    public function welcome()
    {
        $this->__viewData['main_section_class'] = 'login-sec';
        $this->__viewData['box_class']          = 'login-box';
        return $this->__renderView('auth.welcome');
    }
}
