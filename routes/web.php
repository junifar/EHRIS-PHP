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

//Company Action
Route::get('/companies', 'CompanyController@index')->name('companies');
Route::get('/companies/data', 'CompanyController@index_data')->name('companies.data');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/companies/store', 'CompanyController@store');

//Bank Action
Route::get('/banks', 'BankController@index')->name('banks');
Route::get('/banks/data', 'BankController@index_data')->name('banks.data');
Route::get('/banks/create', 'BankController@create')->name('banks.create');
Route::post('/banks/store', 'BankController@store');

//Department Action
Route::get('/departments', 'DepartmentController@index')->name('departments');
Route::get('/departments/data', 'DepartmentController@index_data')->name('departments.data');
Route::get('/departments/create', 'DepartmentController@create')->name('departments.create');
Route::post('/departments/store', 'DepartmentController@store');

//Religion Action
Route::get('/religions', 'ReligionController@index')->name('religions');
Route::get('/religions/data', 'ReligionController@index_data')->name('religions.data');
Route::get('/religions/create', 'ReligionController@create')->name('religions.create');
Route::post('/religions/store', 'ReligionController@store');

//JobTitles Action
Route::get('/job_titles', 'JobTitleController@index')->name('job_titles');
Route::get('/job_titles/data', 'JobTitleController@index_data')->name('job_titles.data');
Route::get('/job_titles/create', 'JobTitleController@create')->name('job_titles.create');
Route::post('/job_titles/store', 'JobTitleController@store');