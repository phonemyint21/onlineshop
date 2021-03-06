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

//Front End
Route::get('/','ShopController@showIndex')->name('index');

Route::get('/promotion','ShopController@showPromotion')->name('promotion');

Route::get('/loginform','ShopController@showLogin')->name('loginpage');

Route::get('/register','ShopController@showRegister')->name('register');

Route::get('filteritems/{id}','ShopController@filteritems')->name('filteritemspage');

Route::get('/shoppingcart','ShopController@showShoppingcart')->name('shoppingcart');

Route::get('/subcategory','ShopController@showSubcategory')->name('subcategory');

Route::get('/brand/{id}','ShopController@showBrand')->name('brand');

Route::get('category/{id}','ShopController@showCategory')->name('category');

Route::get('/itemdetail/{id}','ShopController@showItemdetail')->name('itemdetail');

//Backend
Route::middleware('role:Admin')->group(function(){
    Route::get('admin','BackendController@showDashboard')->name('dashboard');

	Route::resource('items', 'ItemController');
	
});
Route::resource('orders','OrderController');

	

Route::get('table','BackendController@table')->name('table');

Route::resource('brands', 'BrandController');

Route::resource('categories', 'CategoryController');

Route::resource('subcategories', 'SubcategoryController');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
