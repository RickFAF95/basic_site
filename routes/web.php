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

Route::name('home')->get('/', 'PagesController@getHome');
Route::name('about')->get('/about', 'PagesController@getAbout');
Route::name('contact')->get('/contact', 'PagesController@getContact');
Route::name('contact_submit')->post('/contact/submit', 'MessagesController@submit');
Route::name('messages')->get('/messages', 'MessagesController@getMessages');
