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

Route::get('/{post}', [
    'uses' => 'BlogController@show',
    'as' => 'blog.show'
]);

Route::get('/about/{laman}',[
    'uses'  => 'AboutController@',
    'as'    =>'',
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

Route::get('/category/{category}',[
    'uses' => 'BlogController@category',
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

// Authentication Routes...
$this->get('backend/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('backend/login', 'Auth\LoginController@login');
$this->post('backend/logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('backend/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('backend/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('backend/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('backend/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('backend/home', 'Backend\HomeController@index');
Route::get('backend/media', 'Backend\HomeController@media');

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
    
Route::get('/backend/comments/published/{comments}',[
    'uses' => 'backend\CommentsController@published',
    'as' => 'backend.comments.published'
    ]);

Route::resource('/backend/blog', 'Backend\BlogController',['as' => 'backend']);
Route::resource('/backend/categories', 'Backend\CategoriesController',['as' => 'backend']);
Route::resource('/backend/tags', 'Backend\TagsController',['as' => 'backend']);
Route::resource('/backend/users', 'Backend\UsersController',['as' => 'backend']);
Route::resource('/backend/comments', 'Backend\CommentsController',['as' => 'backend']);
Route::resource('/backend/pages', 'Backend\PagesController',['as' => 'backend']);

// Get Data Datatables
Route::get('datatable/getdata', 'Backend\BlogController@getPosts')->name('datatable/getdata');
