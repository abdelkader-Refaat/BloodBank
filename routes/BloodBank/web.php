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
  Route::view('/home', 'main')->name('main');  // go to view directly without controller 

|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  // route Resources 
 Route::Resource('governorate','Api\GovernorateController');
 Route::Resource('city','Api\CityController');
 Route::Resource('category','Api\CategoryController');



