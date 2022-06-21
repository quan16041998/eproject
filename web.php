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

Route::group(['prefix' => 'adminrepos'], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('create', [
        'uses' => 'AdminControllerWithRepos@create_product',
        'as' => 'admin.create_products'
    ]);

    Route::get('create', [
        'uses' => 'AdminControllerWithRepos@create_collection',
        'as' => 'admin.create_collection'
    ]);

    Route::get('create', [
        'uses' => 'AdminControllerWithRepos@create_customers',
        'as' => 'admin.create_customers'
    ]);

    Route::get('create', [
        'uses' => 'AdminControllerWithRepos@create_stylist',
        'as' => 'admin.create_stylist'
    ]);

    Route::get('create', [
        'uses' => 'AdminControllerWithRepos@store',
        'as' => 'admin.store'
    ]);

    Route::get('update/{ID}', [
        'uses' => 'AdminControllerWithRepos@update_products',
        'as' => 'admin.update_products'
    ]);

    Route::get('update/{ID}', [
        'uses' => 'AdminControllerWithRepos@update_collection',
        'as' => 'admin.update_collection'
    ]);

    Route::get('update/{ID}', [
        'uses' => 'AdminControllerWithRepos@update_customers',
        'as' => 'admin.update_customers'
    ]);

    Route::get('update/{ID}', [
        'uses' => 'AdminControllerWithRepos@update_stylist',
        'as' => 'admin.update_stylist'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show_products',
        'as' => 'admin.show_products'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show_collection',
        'as' => 'admin.show_collection'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show_customers',
        'as' => 'admin.show_customers'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show_stylist',
        'as' => 'admin.show_stylist'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show_admin',
        'as' => 'admin.show_admin'
    ]);

});

