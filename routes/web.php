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

Route::get('/', [
    'uses' => 'BlogController@index',
    'as' => 'blog'
]);

Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as' => 'blog.show'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

Route::get('/category/{category}',[
    'uses' => 'CommentsController@category',
    'as' => 'category'
]);

Route::get('/author/{author}',[
    'uses' => 'BlogController@author',
    'as' => 'author'
]);

Route::get('/tag/{tag}',[
    'uses' => 'BlogController@tag',
    'as' => 'tag'
]);

Auth::routes();

Route::get('/home', 'Backend\HomeController@index');

Route::put('/backend/blog/restore/{blog}',[
    'uses' => 'Backend\BlogController@restore',
    'as' => 'backend.blog.restore'
]);
Route::delete('/backend/blog/force-destroy/{blog}',[
    'uses' => 'backend\BlogController@forceDestroy',
    'as' => 'backend.blog.force-destroy'
    ]);

Route::get('/backend/users/confirm/{users}',[
    'uses' => 'backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
    ]);

Route::resource('/backend/blog', 'Backend\BlogController',['as' => 'backend']);
Route::resource('/backend/categories', 'Backend\CategoriesController',['as' => 'backend']);
Route::resource('/backend/users', 'Backend\UsersController',['as' => 'backend']);

// Get Data Datatables
Route::get('datatable/getdata', 'Backend\BlogController@getPosts')->name('datatable/getdata');
