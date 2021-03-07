<?php

use App\Http\Controllers\ContactController;
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








//Users [CRUD]
//Route::get('contact-submit','CrudController@create');
//Route::post('contact-submit','CrudController@store');

//Route::post('contact-submit','ContactController@store');

Route::post('contact-submit', 'ContactController@mailsending');
Route::get('contact-submit', 'ContactController@create');
