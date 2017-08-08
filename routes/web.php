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
Route::get('/adm/companies', 'CompanyController@index')->name('companies');
Route::get('/adm/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/adm/companies/store', 'CompanyController@store');

//Bank Action
Route::get('adm/banks', 'BankController@index')->name('banks');
Route::get('adm/banks/data', 'BankController@index_data')->name('banks.data');
Route::get('adm/banks/create', 'BankController@create')->name('banks.create');
Route::post('adm/banks/store', 'BankController@store');

//Department Action
Route::get('adm/departments', 'DepartmentController@index')->name('departments');
Route::get('adm/departments/data', 'DepartmentController@index_data')->name('departments.data');
Route::get('adm/departments/create', 'DepartmentController@create')->name('departments.create');
Route::post('adm/departments/store', 'DepartmentController@store');

//Religion Action
Route::get('adm/religions', 'ReligionController@index')->name('religions');
Route::get('adm/religions/data', 'ReligionController@index_data')->name('religions.data');
Route::get('adm/religions/create', 'ReligionController@create')->name('religions.create');
Route::post('adm/religions/store', 'ReligionController@store');

//JobTitles Action
Route::get('adm/job_titles', 'JobTitleController@index')->name('job_titles');
Route::get('adm/job_titles/data', 'JobTitleController@index_data')->name('job_titles.data');
Route::get('adm/job_titles/create', 'JobTitleController@create')->name('job_titles.create');
Route::post('adm/job_titles/store', 'JobTitleController@store');

//Employees Action
Route::get('adm/employees', 'EmployeeController@index')->name('employees');
Route::get('adm/employees/create', 'EmployeeController@create')->name('employees.create');
Route::post('adm/employees/store', 'EmployeeController@store');
Route::get('adm/employees/show/{id}', 'EmployeeController@show')->name('employees.show');

//Attendance Action
Route::get('adm/attendances', 'AttendanceController@index')->name('attendances');
//Route::get('adm/employees/create', 'EmployeeController@create')->name('employees.create');
//Route::post('adm/employees/store', 'EmployeeController@store');
//Route::get('adm/employees/show/{id}', 'EmployeeController@show')->name('employees.show');