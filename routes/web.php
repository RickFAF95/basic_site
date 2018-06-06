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

Route::name('home')->get('/', function(){
    return view('accueil');
});
Route::name('apropos')->get('/apropos', function(){
    return view('apropos');
});
Route::name('contact')->get('/contact', function(){
    return view('contact');
});
Route::name('contact_submit')->post('/contact/submit', 'MessagesController@submit');
