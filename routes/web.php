<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//frontend routes
Route::get('/', 'FrontController@index')->name('frontend.home');
Route::get('contact', 'FrontController@contact')->name('frontend.contact');
Route::get('caption/generator', 'FrontController@caption')->name('frontend.caption');
Route::post('send/email', 'FrontController@sendEmail')->name('frontend.sendEmail');


//backend routes
Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
Route::get('dashboard/contents', 'HomeController@content')->name('admin.content');
Route::get('dashboard/caption', 'HomeController@caption')->name('admin.caption');
Route::get('dashboard/seo', 'HomeController@seo')->name('admin.seo');
Route::get('dashboard/setting', 'HomeController@setting')->name('admin.setting');
//Route::post('dashboard/profile/password', 'HomeController@changePass')->name('admin.profile.password');

Route::resource('user', 'UserController');
Route::resource('content', 'ContentController');
Route::resource('caption', 'CaptionController');
Route::resource('setting', 'SettingController');
Route::resource('seo', 'SeoController');
Route::post('caption/multiDelete', 'CaptionController@multiDelete')->name('caption.multiDelete');

Route::get('dashboard/profile', 'HomeController@profile')->name('admin.profile');
Route::get('dashboard/optimize', 'HomeController@optimize')->name('admin.optimize');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
