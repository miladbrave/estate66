<?php

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

//Route::get('/', 'frontend\HomeController@fa');

Auth::routes();


Route::prefix('fa')->group(function () {
    Route::get('/', 'frontend\HomeController@index')->name('home');
    Route::get('/service', 'frontend\HomeController@service')->name('service');
    Route::get('/info', 'frontend\HomeController@info')->name('info');
    Route::get('/about-us', 'frontend\HomeController@about')->name('about');
    Route::get('/contact', 'frontend\HomeController@contact')->name('contact');
    Route::get('/projects', 'frontend\HomeController@proj')->name('proj');
    Route::get('project/{slug}', 'frontend\HomeController@getProduct')->name('product.single');
    Route::post('/search', 'frontend\HomeController@search')->name('search');
});

Route::get('/', function (){
    return redirect(route('home'));
});


//Route::get('/', 'frontend\HomeController@index')->name('home');
//Route::get('/service', 'frontend\HomeController@service')->name('service');
//Route::get('/info', 'frontend\HomeController@info')->name('info');
//Route::get('/about-us', 'frontend\HomeController@about')->name('about');
//Route::get('/contact', 'frontend\HomeController@contact')->name('contact');
//Route::get('/projects', 'frontend\HomeController@proj')->name('proj');
//Route::get('project/{slug}', 'frontend\HomeController@getProduct')->name('product.single');
//Route::post('search', 'frontend\HomeController@search')->name('search');


Route::prefix('en')->group(function () {
    Route::get('/', 'frontend\EnHomeController@index')->name('en.home');
    Route::get('/service', 'frontend\EnHomeController@service')->name('en.service');
    Route::get('/info', 'frontend\EnHomeController@info')->name('en.info');
    Route::get('/about-us', 'frontend\EnHomeController@about')->name('en.about');
    Route::get('/contact', 'frontend\EnHomeController@contact')->name('en.contact');
    Route::get('/projects', 'frontend\EnHomeController@proj')->name('en.proj');
    Route::get('project/{slug}', 'frontend\EnHomeController@getProduct')->name('enproduct.single');
    Route::post('/search', 'frontend\EnHomeController@search')->name('en.search');

});

Route::prefix('fra')->group(function () {
    Route::get('/', 'frontend\fraHomeController@index')->name('fra.home');
    Route::get('/service', 'frontend\fraHomeController@service')->name('fra.service');
    Route::get('/info', 'frontend\fraHomeController@info')->name('fra.info');
    Route::get('/about-us', 'frontend\fraHomeController@about')->name('fra.about');
    Route::get('/contact', 'frontend\fraHomeController@contact')->name('fra.contact');
    Route::get('/projects', 'frontend\fraHomeController@proj')->name('fra.proj');
    Route::get('project/{slug}', 'frontend\fraHomeController@getProduct')->name('fraproduct.single');
    Route::post('/search', 'frontend\fraHomeController@search')->name('fra.search');

});

Route::prefix('ara')->group(function () {
    Route::get('/', 'frontend\araHomeController@index')->name('ara.home');
    Route::get('/service', 'frontend\araHomeController@service')->name('ara.service');
    Route::get('/info', 'frontend\araHomeController@info')->name('ara.info');
    Route::get('/about-us', 'frontend\araHomeController@about')->name('ara.about');
    Route::get('/contact', 'frontend\araHomeController@contact')->name('ara.contact');
    Route::get('/projects', 'frontend\araHomeController@proj')->name('ara.proj');
    Route::get('project/{slug}', 'frontend\araHomeController@getProduct')->name('araproduct.single');
    Route::post('/search', 'frontend\araHomeController@search')->name('ara.search');

});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'backend\DashBoardController@admin')->name('admin');

Route::group(['middleware' => 'admin'], function () {
    Route::prefix('administrator')->group(function () {
        Route::resource('category', 'backend\categoryController');
        Route::get('/', 'backend\DashBoardController@index')->name('dashboard');
        Route::get('/category/{id}/setting', 'backend\categoryController@indexSetting')->name('indexSetting');
        Route::post('/category/{id}/setting', 'backend\categoryController@saveSetting')->name('saveSetting');
        Route::resource('attribute', 'backend\attributeGroupController');
        Route::resource('attributevalue', 'backend\attributevalueController');
        Route::resource('photos', 'backend\photosController');
        Route::resource('product', 'backend\productController');
    });
});

Route::prefix('api')->group(function () {
    Route::get('/categories', 'backend\categoryController@apiIndex');
    Route::post('/categories/attribute', 'backend\categoryController@apiAttribute');
    Route::get('/cities/{provinceId}', 'frontend\HomeController@getAllCities');

});
