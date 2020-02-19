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

Route::resource('/admin','AdminController');

Route::resource('/company','CompanyController');

Route::resource('/challenges','ChallengesController');

Route::resource('/qualities','QualitiesController');

route::get('/selectProfessional','CompanyController@selectProfessional')->name('selectProf');
Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);

Route::get('company_area', ['middleware' => 'company', function () {
    //
}]);

