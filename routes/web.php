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

// Public site
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact/submit', 'PagesController@submit_contact');
Route::get('/blog', 'PagesController@blog');
Route::get('/post/{post_id}/{slug}', 'PagesController@view_post');
Route::get('/courses', 'PagesController@courses');


// Members site
Route::get('/members/dashboard', 'MembersController@dashboard');
Route::get('/members/tools', 'MembersController@tools');

// Newsletter functions
Route::post('/newsletter/submit', 'NewsletterController@subscribe_user');

// Admin site
Route::get('/admin', 'AdminController@index');
Route::post('/admin/login', 'AdminController@authenticate_user');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/posts/view', 'AdminController@view_blog_posts');
Route::get('/admin/posts/new', 'AdminController@new_blog_post');
Route::get('/admin/posts/edit/{post_id}', 'AdminController@edit_blog_post');

// Blog post functions
Route::post('/admin/posts/create', 'BlogPostsController@create');
Route::post('/admin/posts/update', 'BlogPostsController@update');
Route::post('/admin/posts/delete', 'BlogPostsController@delete');	

// Premium Content functions
Route::get('/members/premium/{content_id}', 'PremiumContentController@read');
Route::get('/admin/premium/view', 'PremiumContentController@view_premium_content');
Route::get('/admin/premium/edit/{post_id}', 'PremiumContentController@edit_premium_content');
Route::get('/admin/premium/new', 'PremiumContentController@new_premium_content');
Route::post('/admin/premium/create', 'PremiumContentController@create');
Route::post('/admin/premium/update', 'PremiumContentController@update');
Route::post('/admin/premium/delete', 'PremiumContentController@delete');

// Downloadable functions
Route::get('/members/downloads', 'DownloadablesController@index');
Route::get('/admin/downloads/view', 'DownloadablesController@view_all');
Route::get('/admin/downloads/new', 'DownloadablesController@new');
Route::post('/admin/downloads/create', 'DownloadablesController@create');
Route::get('/admin/downloads/edit/{download_id}', 'DownloadablesController@edit');
Route::post('/admin/downloads/update', 'DownloadablesController@update');
Route::post('/admin/downloads/delete', 'DownloadablesController@delete');

// Developer self awareness tool functions
Route::get('/members/dev-sa/start', 'DevSelfAwarenessController@index');
Route::get('/members/dev-sa/results', 'DevSelfAwarenessController@results');
Route::get('/members/dev-sa/past-results', 'DevSelfAwarenessController@get_past_results');

Auth::routes();