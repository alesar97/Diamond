<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\FacebookController;
use Symfony\Component\HttpFoundation\Session\Session;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::resource('about','App\Http\Controllers\AboutController');
Route::resource('contact','App\Http\Controllers\ContactController');
Route::post('contact_us','App\Http\Controllers\ContactController@store');
Route::get('documentations','App\Http\Controllers\DocumentationController@index');


Auth::routes(['verify' => true]);

Route::group(['middleware'=>'guest'],function (){

    Route::get('login_form', function () {
        return view('login_form');
    })->name('login_form');

    Route::get('signup_form', function () {
        return view('signup_form');
    })->name('signup_form');

    Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
    Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');

    Route::get('auth/facebook', 'App\Http\Controllers\Auth\FacebookController@redirectToFacebook');
    Route::get('auth/facebook/callback', 'App\Http\Controllers\Auth\FacebookController@handleFacebookCallback');

    Route::post('auth/register', 'App\Http\Controllers\Auth\RegisterController@create')->name('register');
    Route::post('auth/login', 'App\Http\Controllers\UserController@login')->name('login');

    //forget password
    Route::get('/forgot_password', 'App\Http\Controllers\Auth\ForgotPasswordController@verifyEmail')->name('forgot_password');
    Route::post('/forgot_password', 'App\Http\Controllers\Auth\ForgotPasswordController@resetEmail');
    //reset password
    Route::get('/reset_password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword')->name('reset_password');
    Route::post('/reset_password', 'App\Http\Controllers\Auth\ResetPasswordController@resetPassword')->name('reset_form');

});

Route::group(['middleware'=>'auth'],function (){
    Route::resource('profile','App\Http\Controllers\ProfileController');
    Route::get('your_apps','App\Http\Controllers\ProfileController@show')->name('your_apps');
    Route::resource('questions','App\Http\Controllers\QuestionController');
    Route::get('apps/question/{id}','App\Http\Controllers\QuestionController@index');
    Route::post('/logout','App\Http\Controllers\UserController@logout')->name('logout');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// two languages
Route::get('/locale/{locale}',function ($locale){
    $session = new Session();
    $session->set('locale',$locale);
    app()->setLocale($locale);
    return redirect()->back();
});

