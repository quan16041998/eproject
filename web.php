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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'managerrepos'], function (){
    Route::get('',[
        'uses'=>'ManagerControllerWithRepos@classindex',
        'as' => 'manager.classindex'
    ]);
    ;
    Route::get('createclass',[
        'uses'=>'ManagerControllerWithRepos@createclass',
        'as' => 'manager.createclass'
    ]);
    Route::post('createclass',[
        'uses'=>'ManagerControllerWithRepos@storeclass',
        'as' => 'manager.storeclass'
    ]);
    Route::get('updateclass/{id}',[
        'uses'=>'ManagerControllerWithRepos@editclass',
        'as' => 'manager.editclass'
    ]);
    Route::post('updateclass/{id}',[
        'uses'=>'ManagerControllerWithRepos@updateclass',
        'as' => 'manager.updateclass'
    ]);
    Route::get('deleteclass/{id}',[
        'uses'=>'ManagerControllerWithRepos@comfirmclass',
        'as' => 'manager.confirmclass'
    ]);
    Route::post('deleteclass/{id}',[
        'uses'=>'ManagerControllerWithRepos@deleteclass',
        'as' => 'manager.deleteclass'
    ]);

    Route::get('teacher',[
        'uses'=>'ManagerControllerWithRepos@teacherindex',
        'as' => 'manager.teacherindex'
    ]);

    Route::get('createteacher',[
        'uses'=>'ManagerControllerWithRepos@createteacher',
        'as' => 'manager.createteacher'
    ]);
    Route::post('createteacher',[
        'uses'=>'ManagerControllerWithRepos@storeteacher',
        'as' => 'manager.storeteacher'
    ]);
    Route::get('updateteacher/{id}',[
        'uses'=>'ManagerControllerWithRepos@editteacher',
        'as' => 'manager.editteacher'
    ]);
    Route::post('updateteacher/{id}',[
        'uses'=>'ManagerControllerWithRepos@updateteacher',
        'as' => 'manager.updateteacher'
    ]);
    Route::get('deleteteacher/{id}',[
        'uses'=>'ManagerControllerWithRepos@comfirmteacher',
        'as' => 'manager.comfirmteacher'
    ]);
    Route::post('deleteteacher/{id}',[
        'uses'=>'ManagerControllerWithRepos@deleteteacher',
        'as' => 'manager.deleteteacher'
    ]);

    Route::get('student',[
        'uses'=>'ManagerControllerWithRepos@studentindex',
        'as' => 'manager.studentindex'
    ]);
    Route::get('showstudent/{id}',[
        'uses'=>'ManagerControllerWithRepos@showstudent',
        'as' => 'manager.showstudent'
    ]);
    Route::get('createstudent',[
        'uses'=>'ManagerControllerWithRepos@createstudent',
        'as' => 'manager.createstudent'
    ]);
    Route::post('createstudent',[
        'uses'=>'ManagerControllerWithRepos@storestudent',
        'as' => 'manager.storestudent'
    ]);
    Route::get('updatestudent/{id}',[
        'uses'=>'ManagerControllerWithRepos@editstudent',
        'as' => 'manager.editstudent'
    ]);
    Route::post('updatestudent/{id}',[
        'uses'=>'ManagerControllerWithRepos@updatestudent',
        'as' => 'manager.updatestudent'
    ]);
    Route::get('deletestudent/{id}',[
        'uses'=>'ManagerControllerWithRepos@comfirmstudent',
        'as' => 'manager.comfirmstudent'
    ]);
    Route::post('deletestudent/{id}',[
        'uses'=>'ManagerControllerWithRepos@deletestudent',
        'as' => 'manager.deletestudent'
    ]);
});


Route::group(['prefix'=>'admin'], function (){
    Route::get('',[
        'uses'=>'AdminControllerWithRepos@adminindex',
        'as' => 'admin.adminindex'
    ]);
    Route::get('collection',[
        'uses' => 'AdminControllerWithRepos@collectionindex',
        'as' => 'admin.collectionindex'
    ]);
});






