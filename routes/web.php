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

Route::get('/','IndexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin','AdminController');

Route::resource('/company','CompanyController');

Route::resource('/challenges','ChallengesController');

Route::resource('/qualities','QualitiesController');

Route::get('/detachQualityUser/{id}','UserController@retirarQualidade')->name('detachQualityUser');

Route::post('/attachQualityUser', 'UserController@adicionarQualidade')->name('attachQualityUser');

route::get('/selectProfessional','CompanyController@selectProfessional')->name('selectProf');

route::get('/MyHabilities','UserController@habilities')->name('myHabilities');

route::get('/SelectPage','UserController@selectUserPerQuality')->name('selectUserPerQuality');

Route::post('/selectQualityCompany', 'UserController@selectQualityCompany')->name('selectQualityCompany');

Route::post('/sendCode/{id}','ChallengesController@send')->name('challenge.send');

Route::get('/challengesusers','ChallengesController@challengesUsers')->name('challenges.users');

Route::get('/getUsersPerMonth','AdminController@getUsersPerMonth')->name('getUsersPerMonth');

Route::get('/getChallengesPerMonth','AdminController@getChallengesPerMonth')->name('getChallengesPerMonth');

Route::get('/getChallengesUsersPerMonth','AdminController@getChallengesUsersPerMonth')->name('getChallengesUsersPerMonth');

Route::get('/downloadCode/{id}','ChallengesController@downloadCode')->name('downloadCode');

Route::get('/validateQuality/{id}/{quality}','UserController@validateQuality')->name('user.validateQuality');

Route::get('/validateQ/{id}','UserController@validateQ')->name('user.validateQ');

Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);

Route::get('company_area', ['middleware' => 'company', function () {
    //
}]);

