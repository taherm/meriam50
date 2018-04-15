<?php
use App\Arabicservice;
use App\Arabicmenu;
use App\Slider;


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

/*Route::get('/', function () {
    $slider=Slider::all();
    $ser=Service::all();

    return view('index',compact('slider','ser'));
});
*/
Auth::routes();
Route::get('/', function () {
    $slider=Slider::all();
    $ser=Arabicservice::all();
    return view('index-ar',compact('slider','ser'));
});


Route::get('/about-ar', function () {
    return view('about-ar');
});


Route::get('/contact-ar', function () {
    return view('contact-ar');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services/cfo', function () {
    return view('services.cfo');
});

Route::get('/services/bookkeeping', function () {
    return view('services.bookkeeping');
});

Route::get('/services/financial-analysis', function () {
    return view('services.financial-analysis');
});


Route::get('admin','AdminController@index')->middleware('auth');
Route::post('admin/slider','AdminController@add_slider')->middleware('auth');
Route::delete('admin/del-slider','AdminController@delete_slider')->middleware('auth');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
})->middleware('auth');
Route::get('admin/page','AdminController@show')->middleware('auth');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
})->middleware('auth');

Route::post('sub-menu','AdminController@submenu')->middleware('auth');
Route::post('main-menu','AdminController@mainmenu')->middleware('auth');
Route::post('admin','AdminController@store')->middleware('auth');
Route::delete('admin/{id}','AdminController@destroy')->middleware('auth');
Route::get('admin/{id}/edit','AdminController@edit')->middleware('auth');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu')->middleware('auth');

Route::post('admin/{id}','AdminController@update')->middleware('auth');
Route::post('admin_edit/{id}','AdminController@updatemenu')->middleware('auth');

Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $cat = \App\Arabicmenu::with('children')->where('parent_id','=',0)->get();
    return view('admin.menu',compact('cat'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}','AdminController@del')->middleware('auth');

Route::delete('admin/submenu_edit','AdminController@editsub')->middleware('auth');



Route::get('services/create','ServicesController@create');
Route::get('editmenu','MenuController@index');
Route::get('services/menu/{url}','ServicesController@show');
Route::get('services/{id}','ServicesController@find');
Route::get('menu/{url}','MenuController@show');
Route::post('editmenu','MenuController@store');
Route::get('del', function () {
    return view('menu.delete');
});
Route::get('services','ServicesController@index');
Route::post('services/{id}','ServicesController@update');
Route::get('services/{id}/edit','ServicesController@edit');
Route::post('services','ServicesController@store');
Route::delete('services/{id}','ServicesController@destroy');



Route::get('/home', 'HomeController@index')->name('home');
