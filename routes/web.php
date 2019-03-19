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

Route::get('', 'WebsiteController@get_home')->name('home');
Route::group(['prefix'=>'menu'],function(){
	Route::group(['prefix'=>'horizontal'],function(){
		Route::get('', 'WebsiteController@get_menu_horizontal')->name('menu_horizontal');
		Route::get('create', 'WebsiteController@get_menu_horizontal_create')->name('menu_horizontal_create');
		Route::post('create', 'WebsiteController@post_menu_horizontal_create');
		Route::get('update', 'WebsiteController@get_menu_horizontal_update')->name('menu_horizontal_update');
		Route::post('update', 'WebsiteController@post_menu_horizontal_update');
		Route::get('delete', 'WebsiteController@get_menu_horizontal_delete');
	});

	Route::group(['prefix'=>'vertical'],function(){
		Route::get('', 'WebsiteController@get_menu_vertical')->name('menu_vertical');
		Route::get('create', 'WebsiteController@get_menu_vertical_create')->name('menu_vertical_create');
		Route::post('create', 'WebsiteController@post_menu_vertical_create');
		Route::get('update', 'WebsiteController@get_menu_vertical_update')->name('menu_vertical_update');
		Route::post('update', 'WebsiteController@post_menu_vertical_update');
		Route::get('delete', 'WebsiteController@get_menu_vertical_delete');
	});
});

Route::group(['prefix'=>'ajax'],function(){
	Route::post('by_display', 'AjaxController@post_by_display');
});
