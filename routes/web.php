<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HttpRequestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest:web'])->group(function () {
    Route::get('login',[HomeController::class,'login'])->name('login');
    Route::get('signup',[HomeController::class,'signup'])->name('signup');
    Route::get('forgot-password',[HomeController::class,'forgotPassword'])->name('forgot-password');
    Route::match(['GET','POST'],'reset-password/{any}',[HomeController::class,'resetPassword'])->name('reset-password');
});

Route::middleware(['custom_auth:web'])->group(function () {
    Route::get('user/welcome',[HomeController::class,'welcome'])->name('welcome');
    Route::get('my-account',[HomeController::class,'myAccount'])->name('my-account');
    Route::get('deal-management',[HomeController::class,'dealManagement'])->name('deal-management');
    Route::get('deal/create',[HomeController::class,'dealCreate'])->name('create-deal');
    Route::get('deal/edit/{name}',[HomeController::class,'dealEdit'])->name('deal-edit');
    Route::get('marketing-management',[HomeController::class,'marketingManagement'])->name('marketing-management');
    Route::get('marketing/deal/add',[HomeController::class,'marketingDealAdd'])->name('marketing-deal-add');
});

Route::match(['GET','POST'],'action',[HttpRequestController::class,'HttpRequest'])->name('http-request');
Route::get('check-request',[HomeController::class,'checkRequest']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('deal/detail/{name}',[HomeController::class,'dealDetail'])->name('deal-detail');
Route::get('community',[HomeController::class,'community'])->name('community');
Route::get('vendor/map',[HomeController::class,'vendorMap'])->name('vendor-map');
Route::get('vendor/{name}',[HomeController::class,'vendorDetail'])->name('vendor-detail');
Route::get('vendor/deal/{name}',[HomeController::class,'vendorDeal'])->name('vendor-deal');
Route::get('user/verify/{name}',[UserController::class,'verifyEmail'])->name('verifyEmail');
Route::match(['get','post'],'user/reset-password/{any}',[UserController::class,'resetPassword'])->name('reset-password');
Route::get('logout',[HomeController::class,'logout'])->name('logout');
Route::get( 'encrypt-data', function(){
    return view('encrypt-data');
});
