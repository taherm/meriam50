<?php
use App\Arabicservice;
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

Route::get('/', function () {
    $slider=Slider::all();
    $ser=Arabicservice::all();
    return view('index-ar',compact('slider','ser'));
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
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


Route::get('admin','AdminController@index');
Route::post('admin/slider','AdminController@add_slider');
Route::delete('admin/del-slider','AdminController@delete_slider');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
});
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
});
Route::get('admin/create-page', function () {
    return view('admin.pages');
});
Route::delete('del','AdminController@del');
Route::post('sub-menu','AdminController@submenu');
Route::post('main-menu','AdminController@mainmenu');
Route::post('admin','AdminController@store');
Route::delete('admin/{id}','AdminController@destroy');
Route::get('admin/{id}/edit','AdminController@edit');
Route::post('admin/{id}','AdminController@update');
Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
});
Route::get('admin/main-menu', function () {
    return view('admin.main-menu');
});
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
});



Route::get('services/create','ServicesController@create');
Route::get('editmenu','MenuController@index');
Route::get('services/menu/{url}','ServicesController@show');
Route::get('services/{id}','ServicesController@find');
Route::get('menu/{url}','MenuController@show');
Route::post('editmenu','MenuController@store');
Route::get('del', function () {
    return view('menu.delete');
});
Route::delete('deletemenu','MenuController@del');
Route::get('services','ServicesController@index');
Route::post('services/{id}','ServicesController@update');
Route::get('services/{id}/edit','ServicesController@edit');
Route::post('services','ServicesController@store');
Route::delete('services/{id}','ServicesController@destroy');
