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

Route::get('/interior',[
    'uses' => 'ChannelController@index',
    'as' => 'interior'
]);

Route::get('/riders',[
    'uses' => 'ChannelController@index',
    'as' => 'riders'
]);

Route::get('/automotive',[
    'uses' => 'ChannelController@index',
    'as' => 'automotive'
]);

Route::get('/video',[
    'uses' => 'ChannelController@index',
    'as' => 'automotive'
]);

Route::get('/about',[
    'uses'  => 'BlogController@about',
    'as'    =>'blog.about',
]);

Route::get('/contact',[
    'uses'  => 'BlogController@contact',
    'as'    =>'blog.contact',
]);

Route::get('/{post}', [
    'uses' => 'BlogController@show',
    'as' => 'blog.show'
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

// S:BACKEND ROUTE //

// Authentication Routes...
$this->get('backend/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('backend/login', 'Auth\LoginController@login');
$this->post('backend/logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('backend/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('backend/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('backend/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('backend/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('backend/home', 'Backend\HomeController@index')->name('backend.home');
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

//Get Data LoadMore
Route::post('blog/loadmore','BlogController@loadMore' );

// E:BACKEND ROUTE //

// S:MEMBER ROUTE //

// Authentication Routes...
Route::prefix('member')->group(function(){
    $this->get('/home', 'Member\MemberController@index')->name('member.home');
    $this->get('/login', 'Auth\MemberLoginController@showLoginForm')->name('member.login');
    $this->post('/login', 'Auth\MemberLoginController@login')->name('member.login.submit');
});

// E:MEMBER ROUTE //