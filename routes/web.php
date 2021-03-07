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

Route::get('/Dashboard', 'Admin\adminController@index')->name('admin-home');

Route::prefix('Admin')->group(function () {
    Route::get('/Dashboard', 'Admin\adminController@index')->name('admin-home');
    Route::get('/Dashboard/ContactUs', 'Admin\adminController@contact')->name('admin-contact');
});

//Route Login Register
Route::get('/Login', 'loginController@index')->name('login');
Route::get('/Register','registerController@index')->name('register');

//Route Page
Route::get('/Dashboard/Speedboat', 'speedboatController@index')->name('speedboat');
Route::get('/Dashboard/SpeedboatContact', 'speedboatController@contact')->name('speedboat-contact');

Route::get('/Dashboard/Berita', 'beritaController@index')->name('berita');

Route::get('/Dashboard/Pelabuhan', 'Crud\pelabuhanController@index')->name('pelabuhan');
Route::get('/Dashboard/PelabuhanContact', 'Crud\pelabuhanController@contact')->name('pelabuhan-contact');




//Route CRUD
	//User
		Route::get('/Dashboard/CRUD/CustomerData', 'Crud\userController@viewcustomer')->name('viewuser-customer');
		Route::get('/Dashboard/CRUD/DirekturData', 'Crud\userController@viewdirektur')->name('viewuser-direktur');
		Route::get('/Dashboard/CRUD/AdminData', 'Crud\userController@viewadmin')->name('viewuser-admin');
		Route::get('/Dashboard/CRUD/SuperAdminData', 'Crud\userController@viewsuperadmin')->name('viewuser-superadmin');
		Route::get('/Dashboard/CRUD/CreateUser', 'Crud\userController@create')->name('create-user');

	//Speedboat
		Route::get('/Dashboard/CRUD/SpeedboatData', 'Crud\speedboatController@view')->name('viewspeedboat');
		Route::get('/Dashboard/CRUD/CreateSpeedboat', 'Crud\speedboatController@create')->name('create-speedboat');


