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


Route::get('/login', 'AuthController@login');
Route::get('/', 'AuthController@login');
Route::get('/products', 'AuthController@products');
Route::post('loginstore','AuthController@loginstore');
Route::group(['middleware'=>'checkloggedin'],function(){
   
    Route::get('dashboard','AuthController@dashboard');
    Route::get('logout','AuthController@logout');
    Route::group(['middleware'=>'isTeacher'],function(){
        Route::get('teacher1','AuthController@teacher1');
        Route::get('teacher2','AuthController@teacher2');
        Route::get('teacher3','AuthController@teacher3');
        
    });
    Route::group(['middleware'=>'isStudent'],function(){
        Route::get('student1','AuthController@student1');
        Route::get('student2','AuthController@student2');
        Route::get('student3','AuthController@student3');
        
    });
    Route::group(['middleware'=>'isAdmin'],function(){
        Route::get('admin1','AuthController@admin1');
        Route::get('admin2','AuthController@admin2');
        Route::get('admin3','AuthController@admin3');
        
    });

});

