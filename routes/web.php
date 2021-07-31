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

    Route::get('/', ["as" => 'index','uses' => 'App\\Http\\Controllers\\HomeController@index']);
    Route::get('/create', ["as" => 'create','uses' => 'App\\Http\\Controllers\\HomeController@create']);

    Route::get('/admin', ["as" => 'admin.index','uses' => 'App\\Http\\Controllers\\Admin\\MainController@index']);

    //product routes
    Route::get('/admin/product', ["as" => 'admin.product.index','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@index']);
    Route::get('/admin/product/create', ["as" => 'admin.product.create','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@create']);
    Route::post('/admin/product/store', ["as" => 'admin.product.store','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@store']);
    Route::get('/admin/product/edit/{id}', ["as" => 'admin.product.edit','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@edit']);
    Route::put('/admin/product/update/{id}', ["as" => 'admin.product.update','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@update']);
    Route::put('/admin/product/show/{id}', ["as" => 'admin.product.show','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@show']);
    Route::put('/admin/product/destroy/{id}', ["as" => 'admin.product.destroy','uses' => 'App\\Http\\Controllers\\Admin\\ProductController@destroy']);


