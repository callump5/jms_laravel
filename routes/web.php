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

// Page Routes
Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/commercial-cleaning', 'PageController@commercial')->name('commercial');
Route::get('/end-of-tenancy-cleaning', 'PageController@tenancy')->name('tenancy');
Route::get('/contact', 'PageController@contact')->name('contact');

if (App::environment('remote')) {
    URL::forceSchema('https');
}

Route::get('sitemap.xml', 'PageController@sitemap')->name('sitemap');


Route::get('/403', 'PageController@forbid')->name('forbid');


//Blog Routes
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{post}', 'BlogController@show')->name('blog-post');

// Contact form submission
Route::post('/contact-request', 'AdminController@contactRequest')->name('contact-request');

// Admin Panel
Route::get('/admin-panel', 'AdminController@adminPanel')->name('admin-panel')->middleware('auth');;
Route::get('/admin-panel/blog-posts', 'AdminController@postIndex')->name('admin-post-index')->middleware('auth');;
Route::get('/admin-panel/contact-request', 'AdminController@contactIndex')->name('admin-contact-index')->middleware('auth');;

Route::get('/admin-panel/blog-post/create', 'BlogController@create')->name('create-post')->middleware('auth');;
Route::post('/admin-panel/edit-post', 'BlogController@update')->name('update-post')->middleware('auth');;
Route::post('/admin-panel/create-post', 'BlogController@store')->name('store-post')->middleware('auth');;

Route::delete('/admin-panel/blog-post/delete-api', 'BlogController@deleteAPI')->name('delete-post')->middleware('auth');;
Route::get('/admin-panel/blog-post/{post}/edit', 'BlogController@edit')->name('edit-post')->middleware('auth');;
Route::delete('/admin-panel/blog-post/{post}/delete', 'BlogController@delete')->name('delete-post')->middleware('auth');;

Route::get('/admin-panel/contact-request/{contact}/view', 'AdminController@contactShow')->name('view-contact')->middleware('auth');;
Route::delete('/admin-panel/contact-request/delete', 'AdminController@contactDelete')->name('delete-contact')->middleware('auth');;
Auth::routes();


Route::any('/{page?}',function(){
    return View::make('errors.404');
  })->where('page','.*');