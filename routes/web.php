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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kecamatan', 'KecamatanController@index');


Route::get('/companies', 'CompanyController@index')->name('companies');
Route::get('/companies/data', 'CompanyController@index_data')->name('companies.data');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/companies/store', 'CompanyController@store');

