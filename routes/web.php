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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('index', 'MyFirstController@home');
Route::get('about', 'MyFirstController@about');
Route::get('contact', 'MyFirstController@contact');
Route::get('fruit', 'MyFirstController@fruit');
Route::get('testimonial', 'MyFirstController@testimonial');
Route::get('showToPublic', 'FruitController@showToPublic');


Route::get('login', 'MyFirstController@login');
Route::get('showFruit', 'FruitController@show')->middleware('auth');
Route::get('insertFruitView', 'FruitController@insertView')->middleware('auth');
Route::post('insertFruit', 'FruitController@insert')->middleware('auth');
Route::get('editFruit/{id}', 'FruitController@edit')->middleware('auth');
Route::post('updateFruit/{id}', 'FruitController@update')->middleware('auth');
Route::get('deleteFruit/{id}', 'FruitController@delete')->middleware('auth');


Route::get('showUsers', 'ContactController@showUsers')->middleware('auth');
Route::get('insertUserView', 'ContactController@insertView')->middleware('auth');
Route::post('addUser', 'ContactController@add')->middleware('auth');
Route::post('newUser', 'ContactController@add');
Route::get('editUser/{id}', 'ContactController@edit')->middleware('auth');
Route::post('updateUser/{id}', 'ContactController@update')->middleware('auth');
Route::get('deleteUser/{id}', 'ContactController@delete')->middleware('auth');

Route::get('showCustomersToPublic', 'TestimonialController@showToPublic');
Route::get('showCustomers', 'TestimonialController@show')->middleware('auth');
Route::get('insertCustomerView', 'TestimonialController@insertView')->middleware('auth');
Route::post('insertCustomer', 'TestimonialController@add')->middleware('auth');
Route::get('editCustomer/{id}', 'TestimonialController@edit')->middleware('auth');
Route::post('updateCustomer/{id}', 'TestimonialController@update')->middleware('auth');
Route::get('deleteCustomer/{id}', 'TestimonialController@delete')->middleware('auth');

Route::post('search', 'FruitController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

