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

Route::get('/places', 'PlaceController@index')->name('place.index');
Route::get('/createplaces', 'PlaceController@create')->name('place.create');
Route::post('/storeplaces', 'PlaceController@store')->name('place.store');

Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/createemployees', 'EmployeeController@create')->name('employee.create');
Route::post('/storeemployees', 'EmployeeController@store')->name('employee.store');

Route::get('/companies', 'CompanyController@index')->name('company.index');
Route::get('/createcompanies', 'CompanyController@create')->name('company.create');
Route::post('/storecompanies', 'CompanyController@store')->name('company.store');