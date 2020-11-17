<?php
namespace routes\BloodBank;
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

Route::group([
//'middleware' => 'auth',	
'namespace' => 'Front',
'prefix'    => 'visit'
]  , function(){

	Route::get('/home', 'MainController@index')->name('home');
});

// Route::get('/home', 'HomeController@index')->name('home');
  // route Resources 

 Route::Resource('governorate','Api\GovernorateController');
 Route::Resource('city','Api\CityController');
 Route::Resource('category','Api\CategoryController');
 Route::get('post/create','Api\PostController@create')->name('post.create')->middleware('role:writer|admin');
   Route::get('post/edit','Api\PostController@edit')->name('post.edit')->middleware('role:editor|admin');
 Route::Resource('post','Api\PostController')->except(['create','edit']);
 Route::Resource('settings','Api\SettingsController');
