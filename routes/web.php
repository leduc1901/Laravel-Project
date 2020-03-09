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




Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function (){
    
    

});


Route::group([
    'namespace' => 'Client',
    'middleware' => ['productID' ]
], function(){
    Route::get('gioi-thieu', 'HomeController@about');

    Route::get('gio-hang' , 'CartController@cart');

    Route::get('gio-hang/thanh-toan' , 'CartController@checkout');

    Route::get('hoan-thanh' , 'CartController@complete');

    Route::get('lien-he' , 'HomeController@contact');

    Route::get('san-pham/{id}' , 'ProductController@detail');

    Route::get('san-pham', 'ProductController@shop');

    Route::get('', [
        'uses' => 'HomeController@index',
        
    ]);
});

Route::get('form', 'FormController@get');
Route::post('form', 'FormController@post');

