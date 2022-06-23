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

    Route::get('show/{username}', [
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{username}', [
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{username}', [
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);

});


Route::group(['prefix' => 'productsrepos'], function () {

    Route::get('', [
        'uses' => 'ProductsControllerWithRepos@index',
        'as' => 'product.index'
    ]);

    Route::get('show/{CID}', [
        'uses' => 'ProductsControllerWithRepos@show',
        'as' => 'product.show'
    ]);

    Route::get('create', [
        'uses' => 'ProductsControllerWithRepos@create',
        'as' => 'product.create'
    ]);

    Route::post('create', [
        'uses' => 'ProductsControllerWithRepos@store',
        'as' => 'product.store'
    ]);

    Route::get('update/{CID}', [
        'uses' => 'ProductsControllerWithRepos@edit',
        'as' => 'product.edit'
    ]);

    Route::post('update/{CID}', [
        'uses' => 'ProductsControllerWithRepos@update',
        'as' => 'product.update'
    ]);

    Route::get('delete/{CID}', [
        'uses' => 'ProductsControllerWithRepos@confirm',
        'as' => 'product.confirm'
    ]);

    Route::post('delete/{CID}', [
        'uses' => 'ProductsControllerWithRepos@destroy',
        'as' => 'product.destroy'
    ]);
});
    
Route::group(['prefix' => 'stylistrepos'], function () {
    Route::get('', [
        'uses' => 'StylistControllerWithRepos@index',
        'as' => 'stylist.index'
    ]);

    Route::get('show/{SID}',[
        'uses' => 'StylistControllerWithRepos@show',
        'as' => 'stylist.show'
    ]);

    Route::get('create',[
        'uses' => 'StylistControllerWithRepos@create',
        'as' => 'stylist.create'
    ]);

    Route::post('create',[
        'uses' => 'StylistControllerWithRepos@store',
        'as' => 'stylist.store'
    ]);

    Route::get('update/{SID}',[
        'uses' => 'StylistControllerWithRepos@edit',
        'as' => 'stylist.edit'
    ]);

    Route::post('update/{SID}',[
        'uses' => 'StylistControllerWithRepos@update',
        'as' => 'stylist.update'
    ]);

    Route::get('delete/{SID}', [
        'uses' => 'StylistControllerWithRepos@confirm',
        'as' => 'stylist.confirm'
    ]);

    Route::post('delete/{SID}',[
        'uses' => 'StylistControllerWithRepos@destroy',
        'as' => 'stylist.destroy'
    ]);
});
    
    
Route::group(['prefix' => 'CustomerRepos '], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'Admin.index_customer'
    ]);

    Route::get('show/{ID}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'Admin.show_customer'
    ]);

    Route::get('update/{ID}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'Admin.edit_customer'
    ]);

    Route::post('update/{ID}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'Admin.update_customer'
    ]);

});
    
    
    

