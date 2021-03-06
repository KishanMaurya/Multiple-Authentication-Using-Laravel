<?php

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

Route::view('/', 'welcome');
Route::get('/','HomeController@Show')->name('welcome');
Route::get('view_more/{id}','HomeController@Store')->name('view');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/writer', 'writer')->middleware('auth:writer');

Route::get('/home','PostController@UserDash')->name('home');
Route::get('create_post','PostController@index')->name('user.user_post');
Route::get('post_view','PostController@show')->name('user.post_view');
Route::post('/create','PostController@store');

// Route::get('/writer','WriterController@WriterDash')->name('writer');

//Writer middleware
Route::group(['middleware' => ['auth:writer']], function () {

Route::get('/writer','WriterController@WriterDash')->name('writer');
Route::get('createpost','WriterController@index')->name('writer.create');
Route::post('/success','WriterController@store');
Route::get('allview','WriterController@show')->name('writer.view');
Route::get('/','HomeController@Show')->name('welcome');
Route::get('view_more/{id}','HomeController@Store')->name('view');
Route::get('/writerview','WriterController@AjaxView');
Route::get('/WriterEdit','WriterController@AjaxEdit');

});

//admin middeleware
Route::group(['middleware' => ['auth:admin']], function () {

Route::get('allpost','AdminController@index')->name('admin.AllPost');
Route::get('allWriter','AdminController@allWriter')->name('admin.allWriter');
Route::get('allUser','AdminController@allUser')->name('admin.allUser');
Route::get('allAdmin','AdminController@allAdmin')->name('admin.allAdmin');

});



