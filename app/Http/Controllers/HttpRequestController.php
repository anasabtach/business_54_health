<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    protected $__request;

    public function __construct(Request $request)
    {
        $this->__request = $request;
    }

    public function HttpRequest()
    {
        $action = $this->__request['action'];
        switch($action){
            case 'registration':
                $function = $this->_registration();
                break;
            case 'login':
                $function = $this->_login();
                break;
            case 'forgot-password':
                $function = $this->_forgotPassword();
                break;
            case 'update-profile':
                $function = $this->_updateProfile();
                break;
            case 'change-password':
                $function = $this->_changePassword();
                break;
            case 'create-deal':
                $function = $this->_createDeal();
                break;
            case 'get-deals':
                $function = $this->_getDeals();
                break;
            case 'related-deals':
                $function = $this->_getRelatedDeals();
                break;
            case 'update-deal':
                $function = $this->_updateDeal();
                break;
            case 'update_deal_status':
                $function = $this->_updateDealStatus();
                break;
            case 'community':
                $function = $this->_community();
                break;
            case 'vendor-deals':
                $function = $this->_vendorDeals();
                break;
            case 'vendor-review':
                $function = $this->_vendorReviews();
                break;
            case 'notification-setting':
                $function = $this->_notificationSetting();
                break;
            case 'get-quote':
                $function = $this->_getQuote();
                break;
            case 'delete_deal':
                $function = $this->_deleteDeal();
                break;
            case 'vendors-map':
                $function = $this->_vendorsMap();
                break;
            case 'content':
                $function = $this->_getContent();
                break;
            case 'vendor-rating':
                $function = $this->_getVendorRating();
                break;
            case 'statistics':
                $function = $this->_getStatistics();
                break;
            case 'deal_redeem':
                $function = $this->_dealRedeem();
                break;

        }
        return $function;
    }

    private function _registration()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $params['user_group_id'] = 4;
        $params['name'] = $params['business_name'];
        if( !empty($params['open_time']) && !empty($params['close_time']) ){
            $params['open_time']  = date('H:i:s',strtotime($params['open_time']));
            $params['close_time'] = date('H:i:s',strtotime($params['close_time']));
        }
        $attachments = [];
        if( !empty($request['image_url']) ){
     //       dd($request['image_url']->getPathName());
            $image_url      = fopen($request['image_url']->getPathName(), 'r');
            $image_name     = $request['image_url']->getClientOriginalName();
            $attachments[]  = [ 'key' => 'image_url' ,'file' => $image_url, 'name' => $image_name ];
        }
        $response       = $this->__httpApiPostRequest('user',$params,$attachments);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        return redirect()->back()->with('success',$response->message);
    }

    private function _login()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $params['user_group_id'] = 4;
        $response       = $this->__httpApiPostRequest('user/login',$params);
        if( $response->code == 400 ){
            return redirect()->route('login')->with('api_error',$response->data)->withInput();
        }
        session(['user' => $response->data]);
        Auth::loginUsingId($response->data->id);
        return redirect('/');
    }

    private function _forgotPassword()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $params['user_group_id'] = 4;
        $response       = $this->__httpApiPostRequest('user/forgot-password',$params);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        return redirect()->back()->with('success',$response->message);
    }

    public function _updateProfile()
    {
        $user           = session('user');
        $request        = $this->__request;
        $params         = $request->all();
        $params['_method'] = 'PUT';
        if( !empty($params['open_time']) && !empty($params['close_time']) ){
            $params['open_time']  = date('H:i:s',strtotime($params['open_time']));
            $params['close_time'] = date('H:i:s',strtotime($params['close_time']));
        }
        $attachments = [];
        if( !empty($request['image_url']) ){
            $image_url      = fopen($request['image_url']->getPathName(), 'r');
            $image_name     = $request['image_url']->getClientOriginalName();
            $attachments[]  = [ 'key' => 'image_url' ,'file' => $image_url, 'name' => $image_name ];
        }
        if( !empty($request['banner_image_url']) ){
            $image_url      = fopen($request['banner_image_url']->getPathName(), 'r');
            $image_name     = $request['banner_image_url']->getClientOriginalName();
            $attachments[]  = [ 'key' => 'banner_image_url' ,'file' => $image_url, 'name' => $image_name ];
        }
        $response       = $this->__httpApiPostRequest('user/' . $user->slug ,$params,$attachments);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        session(['user' => $response->data ]);
        return redirect()->back()->with('success',$response->message);
    }

    private function _changePassword()
    {
        session()->flash('tab','#v-pills-changepassword-tab');
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiPostRequest('user/change-password' ,$params);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        return redirect()->back()->with('success',$response->message);
    }

    private function _createDeal()
    {
        $attachments    = [];
        $request        = $this->__request;
        $params         = $request->all();

        if( !empty($params['start_date']) ){
            $params['start_date'] = date('Y-m-d',strtotime($params['start_date']));
        }
        if( !empty( $params['end_date']) ){
            $params['end_date'] = date('Y-m-d',strtotime($params['end_date']));
        }
        if( !empty($request['image_url']) ){
            $image_url      = fopen($request['image_url']->getPathName(), 'r');
            $image_name     = $request['image_url']->getClientOriginalName();
            $attachments[]  = [ 'key' => 'image_url' ,'file' => $image_url, 'name' => $image_name ];
        }
        $response       = $this->__httpApiPostRequest('deal',$params,$attachments);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        if( empty($request['card_token']) )
            return redirect()->route('deal-management')->with('success',$response->message);
        else
            return redirect()->route('marketing-management')->with('success',$response->message);
    }

    private function _getDeals()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('deal',$params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        $html = view('ajax-component.deal',['data' => $response->data])->render();
        return response()->json(['html' => $html , 'pagination' => $response->pagination ]);
    }

    private function _getRelatedDeals()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('vendor/related-deals',$params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        $html = view('ajax-component.related-deal',['data' => $response->data])->render();
        return response()->json(['html' => $html , 'pagination' => $response->pagination ]);
    }

    private function _updateDeal()
    {
        $attachments       = [];
        $request           = $this->__request;
        $params            = $request->all();
        $params['_method'] = 'PUT';
        if( !empty($params['start_date']) ){
            $params['start_date'] = date('Y-m-d',strtotime($params['start_date']));
        }
        if( !empty( $params['end_date']) ){
            $params['end_date'] = date('Y-m-d',strtotime($params['end_date']));
        }
        if( !empty($request['image_url']) ){
            $image_url      = fopen($request['image_url']->getPathName(), 'r');
            $image_name     = $request['image_url']->getClientOriginalName();
            $attachments[]  = [ 'key' => 'image_url' ,'file' => $image_url, 'name' => $image_name ];
        }
        $response       = $this->__httpApiPostRequest('deal/'.$params['slug'],$params,$attachments);
        if( $response->code == 400 ){
            return redirect()->back()->with('api_error',$response->data)->withInput();
        }
        return redirect()->back()->with('success',$response->message);
    }

    private function _updateDealStatus()
    {
        $request           = $this->__request;
        $params            = $request->all();
        $update_params['_method'] = 'PUT';
        $update_params['status']  = $params['status'];
        $response       = $this->__httpApiPostRequest('deal/'.$params['slug'],$update_params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        return response()->json($response);
    }

    private function _community()
    {
        $request        = $this->__request;
        $response       = $this->__httpApiGetRequest('vendors',$request->all());
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        $html = view('ajax-component.community',['data' => $response->data])->render();
        return response()->json(['html' => $html , 'pagination' => $response->pagination ]);
    }

    private function _vendorDeals()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('vendor/deals',$params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        $html = view('ajax-component.vendor-deal',['data' => $response->data])->render();
        return response()->json(['html' => $html , 'pagination' => $response->pagination ]);
    }

    private function _vendorReviews()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('vendor/rating',$params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        $html = view('ajax-component.review',['data' => $response->data])->render();
        return response()->json(['html' => $html , 'pagination' => $response->pagination ]);
    }

    private function _notificationSetting()
    {
        $request           = $this->__request;
        $params            = $request->all();
        $update_params['_method'] = 'PUT';
        $update_params['notification_setting'] = $params['notification_setting'];
        $response = $this->__httpApiPostRequest('user/'.session('user')->slug,$update_params);
        if( $response->code != 200 ){
            return response()->json(['code' => $response->code, 'message' => $response->data ]);
        }
        session(['user' => $response->data ]);
        return response()->json(['message' => 'record has been updated successfully']);
    }

    private function _getQuote()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('quote',$params);
        return response()->json($response);
    }

    private function _deleteDeal()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiDeleteRequest('deal/'.$request['slug']);
        return response()->json($response);
    }

    private function _vendorsMap()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('vendors',$params);
        return response()->json($response);
    }

    private function _getContent()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('content',$params);
        return response()->json($response);
    }

    private function _getVendorRating()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('vendor/rating',$params);
        return response()->json($response);
    }

    private function _getStatistics()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response       = $this->__httpApiGetRequest('statistics',$params);
        return response()->json($response);
    }
  
    private function _dealRedeem()
    {
        $request        = $this->__request;
        $params         = $request->all();
        $response = $this->__httpApiPostRequest('deal/redeem',$params);
        return response()->json($response);
    }
}
