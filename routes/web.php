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
    return view('welcome');
});

Route::get('/test', function(){
    return "Test";
});

Route::get('/{id}/from-controller', 'PageController@testFunction');

Route::resource('/res-test', 'RController');

Route::get('/form', 'FormController@index');

Route::post('/form', 'FormController@store');

Route::get('/submit-form', 'FormController@store');

Route::get('/data', function () {
    $data = "123";
    return view('data', compact('data'));
});

Route::get('/data-2', function () {
    $data = "Test";
    return view('data', ['data' => $data]);
});

Route::get('/my-page-1', function() {    
    return "Test";
});

Route::get('/my-test-route/{id}', 'SiteController@index');

Route::resource('/resource', 'Site\SiteController');

Route::get('/req-data', 'Site\SiteController@testRequestData');

Route::get('/blade-child', function() {
    return view('extension.child');
});

Route::get('/add-user', 'DatabaseController@addUser');

Route::get('/users', 'DatabaseController@showData');