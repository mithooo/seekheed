<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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
    return view('comingsoon');
});

Route::get('ads', function() {
    return view('ads');
})->name('ads');

Route::view('/cont','front.buyservice');

// sign in
Route::get('sign_in', function() {
    return view('front.sign_in');
})->name('front.sign_in');


// sign up
Route::get('sign_up', function() {
    return view('front.sign_up');
})->name('front.sign_up');

Route::get('services', function() {
    return view('front.services');
})->name('front.services');


// profile
Route::get('profile', function() {
    return view('front.profile');
})->name('front.profile');


// profile confidential
Route::get('profile_confidential', function() {
    return view('front.confidential_profile');
})->name('front.profile_confidential');


// sign in Invalid search
Route::get('invalid_search', function() {
    return view('front.sign_in_invalid');
})->name('front.invalid_search');


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('fb_login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle')->name('g_login');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/logout', 'Auth\LoginController@logout')->name('user.logout')->middleware('auth:web');

Route::get('coming-soon', function(){return view('comingsoon');})->name('soon');
Route::post('coming-soon', 'ComingSoonController@saveUser');
Route::get('chart',  'ChartController@viewform');
Route::post('chart/submit',  'ChartController@submitform')->name('chart');

Route::get('storage/app/{filename}', function ($filename)
{
    $path = storage_path($filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('get_video')->middleware('auth:admin');
Route::get('storage/app/{filename}', function ($filename)
{
    $path = storage_path($filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('get_file')->middleware('auth:admin');
    //// Admin Routes ///
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.',], function () {
        Route::view('login', 'admin.auth.login')->name('login');
        Route::post('login', 'AuthController@login')->name('adminlogin');
        Route::get('logout', 'AuthController@logout')->name('logout')->middleware('auth:admin');
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::view('dashboard', 'admin.dashboard.index')->name('dashboard');        
            Route::resource('subject', 'SubjectController');
            Route::resource('book', 'BookController');
            Route::resource('lecture', 'LectureController');
            Route::resource('event', 'EventController');
            Route::resource('service', 'ServiceController');
        });
    });
    //// Admin Routes ///
    Route::get('service/{service}', 'Service\ServiceController@viewdetail')->name('service');
    Route::post('service/store', 'Service\ServiceController@buyservice')->name('buyservice');
    Route::group(['prefix' => 'class', 'namespace' => 'Learn', 'as' => 'class.',], function () {
      
        Route::group(['middleware' => 'auth:web'], function () {
            Route::view('dashboard', 'class.dashboard')->name('dashboard');        
            Route::resource('subject', 'SubjectController');
            Route::resource('book', 'BookController');
            Route::resource('lecture', 'LectureController');
            Route::resource('event', 'EventController');
        });
    });




