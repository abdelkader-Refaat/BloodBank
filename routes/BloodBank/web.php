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
/*
Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  // route Resources 
 Route::Resource('governorate','Api\GovernorateController');
 Route::Resource('city','Api\CityController');
 Route::Resource('category','Api\CategoryController');
 */
Auth::routes();

Route::get('/', function () {
    return view('main');
});

Route::group([
//'middleware' => 'auth',	
'namespace' => 'Front',
'prefix'    => 'visit'
]  , function(){	

	Route::get('/home', 'MainController@index')->name('visit.home');
	Route::get('/about', 'MainController@about')->name('visit.about');
});

  // route Resources 

Route::group(
   [
	'namespace'  => 'Api',
	'middleware' => 'auth'
	], function(){

 Route::Resource('governorate','GovernorateController');
 Route::Resource('city','CityController');
 Route::Resource('category','CategoryController');
 Route::get('post/create','PostController@create')->name('post.create')->middleware('role:writer|admin');
 Route::get('post/edit','PostController@edit')->name('post.edit')->middleware('role:editor|admin');
 Route::Resource('post','PostController')->except(['create','edit']);
 Route::Resource('settings','SettingsController');

});



