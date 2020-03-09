<?php

use Illuminate\Http;

/*
|--------------------------------------------------------------------------
| Admin Route Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Route routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your Admin Route!
|
*/
//Guest route
Route::group(['middleware' => 'guest'],function(){
    Route::get('login' , 'LoginController@showLoginForm');
    Route::post('login' , 'LoginController@login');
});
//Auth route
Route::group(['middleware' => 'auth'],function(){
    Route::get('' , 'HomeController');
    Route::post('logout', 'LoginController@logout');

    Route::group(['prefix' => 'category'] ,function(){
        Route::get('', [
            'as' => 'admin.category.index',
            'uses' => 'CategoryController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.category.create',
            'uses' => 'CategoryController@create'
        ]); //admin/category
        Route::get('{id}/edit', [
            'as' => 'admin.category.edit',
            'uses' => 'CategoryController@edit'
        ]); //admin/category
        Route::post('store', [
            'as' => 'admin.category.store',
            'uses' => 'CategoryController@store'
        ]);
        Route::put('{id}', [
            'as' => 'admin.category.update',
            'uses' => 'CategoryController@update'
        ]);
        Route::get('{id}', [
            'as' => 'admin.category.delete',
            'uses' => 'CategoryController@delete'
        ]);
    });
    Route::group(['prefix' => 'products'] ,function(){
        Route::get('', [
            'as' => 'admin.product.index',
            'uses' => 'ProductController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.product.create',
            'uses' => 'ProductController@create'
        ]); //admin/category
        Route::post('store', [
            'as' => 'admin.products.store',
            'uses' => 'ProductController@store'
        ]);
        Route::get('{id}/edit', [
            'as' => 'admin.product.edit',
            'uses' => 'ProductController@edit'
        ]); //admin/category
        Route::put('{id}', [
            'as' => 'admin.products.update',
            'uses' => 'ProductController@update'
        ]);
        Route::get('{id}', [
            'as' => 'admin.products.delete',
            'uses' => 'ProductController@delete'
        ]);
    });
    Route::group(['prefix' => 'user'] ,function(){
        Route::get('', [
            'as' => 'admin.user.index',
            'uses' => 'UserController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.user.create',
            'uses' => 'UserController@create'
        ]); //admin/category
        Route::get('{id}/edit', [
            'as' => 'admin.user.edit',
            'uses' => 'UserController@edit'
        ]); //admin/category
        Route::post('store', [
            'as' => 'admin.user.store',
            'uses' => 'UserController@store'
        ]);
        Route::put('{id}', [
            'as' => 'admin.user.update',
            'uses' => 'UserController@update'
        ]);
        Route::get('{id}', [
            'as' => 'admin.user.delete',
            'uses' => 'UserController@delete'
        ]);
    });

});


