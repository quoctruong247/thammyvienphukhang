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

 Auth::routes();

// Route::get('/', 'LiveSearchController@index');
// Route::get('/search', 'LiveSearchController@search');


Route::get('/','HomeController@index')->name('trang-chu');

Route::view('/lien-he','default.home.lienhe');

Route::view('/ve-phu-khang','chuyende.gioithieu');

Route::get('/tin-tuc/{slug}','HomeController@viewCategory');

Route::get('/{slug}','HomeController@viewPost')->name('view.post');

Route::get('/{slug}','HomeController@viewPostAdmin')->name('view.post.admin');

Route::group(['prefix' => 'ajax'], function () {

    // ajax/form-saved - lưu Tên, số điện thoại, nội dung trang liên hệ và bài viết
    Route::post('/form-saved','HomeController@formSaved');

    
});


//phần admin
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'admin'], function(){
	// login
	Route::get('login', 'HomeController@index')->name('login');
	Route::get('logout', 'HomeController@logout')->name('logout');
	Route::get('verify', 'HomeController@verify')->name('verify');
	Route::get('register', 'HomeController@register')->name('register');

	// user
	Route::get('/user', 'UserController@index')->name('user.index');
	Route::post('/user', 'UserController@store')->name('user.store');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::get('/user/{id}', 'UserController@show')->name('user.show');
    Route::put('/user/{id}', 'UserController@update')->name('user.update');
    Route::delete('/user/{id}', 'UserController@delete')->name('user.delete');
    Route::get('/active/{id}', 'UserController@updateActive')->name('user.active');

    // category
	Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::post('/category', 'CategoryController@store')->name('category.store');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
    Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{id}', 'CategoryController@delete')->name('category.delete');

    //Post
    Route::get('/post', 'PostController@index')->name('post.index');
    Route::get('/post/search', 'PostController@search')->name('post.search');
    Route::post('/post', 'PostController@store')->name('post.store');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::get('/post/{id}', 'PostController@show')->name('post.show');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');
    Route::delete('/post/{id}', 'PostController@delete')->name('post.delete');
    Route::get('/activePost/{id}', 'PostController@updateActive')->name('post.active');
    Route::get('/activePostSale/{id}', 'PostController@updatePostSale')->name('postsale.active');
    Route::get('/activeNewPost/{id}', 'PostController@updateNewPost')->name('newpost.active');

	// Slider
	Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::post('/slider', 'SliderController@store')->name('slider.store');
    Route::get('/slider/create', 'SliderController@create')->name('slider.create');
    Route::get('/slider/{id}', 'SliderController@show')->name('slider.show');
    Route::put('/slider/{id}', 'SliderController@update')->name('slider.update');
    Route::delete('/slider/{id}', 'SliderController@delete')->name('slider.delete');
    Route::get('/activeSlider/{id}', 'SliderController@updateActive')->name('slider.active');


	// Interface
	Route::get('/interface', 'InterfaceController@index')->name('interface.index');
    Route::post('/interface', 'InterfaceController@store')->name('interface.store');
    Route::get('/interface/create', 'InterfaceController@create')->name('interface.create');
    Route::get('/interface/{id}', 'InterfaceController@show')->name('interface.show');
    Route::put('/interface/{id}', 'InterfaceController@update')->name('interface.update');
    Route::delete('/interface/{id}', 'InterfaceController@delete')->name('interface.delete');
    Route::get('/activeInterface/{id}', 'InterfaceController@updateActive')->name('interface.active');

    // Customer
    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::post('/customer', 'CustomerController@store')->name('customer.store');
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    Route::get('/customer/{id}', 'CustomerController@show')->name('customer.show');
    Route::put('/customer/{id}', 'CustomerController@update')->name('customer.update');
    Route::delete('/customer/{id}', 'CustomerController@delete')->name('customer.delete');
    Route::get('/activeCustomer/{id}', 'CustomerController@updateActive')->name('customer.active');
});

// chuyên đề
Route::view('/chuyen-de/uu-dai-vang','chuyende.uudaivang');
Route::view('/chuyen-de/san-uu-dai-kep','chuyende.sanuudaikep');

