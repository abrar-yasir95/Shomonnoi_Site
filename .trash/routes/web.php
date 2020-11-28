<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/policy', function () {
//    return view('policy');
//});

Route::get('/', 'DivisionController@index');
Route::get('/about', 'AboutController@index');
Route::get('/policy', 'PolicyController@index');

Route::get('/organizations/{organization}', 'OrganizationController@show');
Route::get('/emergencies/{emergency}', 'OrganizationController@emergency');
Route::get('/organizations', 'OrganizationController@index');
Route::get('/emergency', 'OrganizationController@emergencyAll');
Route::get('/news', 'BlogController@index');
Route::get('/news/{single_news}', 'BlogController@show');
Route::get('/research/{single_research}', 'BlogController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'BlogController@index');
Route::get('/research', 'BlogController@recentResearch');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::patch('/role-register-update/{id}', 'Admin\DashboardController@update');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@delete');

    Route::get('/admin/organization-edit', 'Admin\OrganizationController@index');
    Route::post('/admin/organization-edit', 'Admin\OrganizationController@store');
    Route::get('/admin/organization-edit/{id}', 'Admin\OrganizationController@edit');
    Route::patch('/admin/organization-edit/{id}', 'Admin\OrganizationController@update');
    Route::delete('/admin/organization-delete/{id}', 'Admin\OrganizationController@delete');

    Route::get('/admin/blog-edit', 'Admin\BlogController@index');
    Route::post('/admin/blog-edit', 'Admin\BlogController@store');
    Route::get('/admin/blog-edit/{id}', 'Admin\BlogController@edit');
    Route::patch('/admin/blog-edit/{id}', 'Admin\BlogController@update');
    Route::delete('/admin/blog-delete/{id}', 'Admin\BlogController@delete');


});

//Route::get('/home', 'HomeController@index')->name('home');
