<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ClientController@index');
Route::get('/sign_in','ClientController@sign_in')->name('sign_in');
Route::get('/sign_up','ClientController@sign_up')->name('sign_up');









// PROCESS
Route::post('/transaction/manage_cart','TransactionController@manage_cart')->name('manage_cart');
Route::get('/transaction/cart','TransactionController@cart')->name('cart');
Route::get('/transaction/checkout','TransactionController@checkout')->name('checkout');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'],
function(){
    // Route::get('dashboard', 'DashboardController@index');     
    Route::get('master-data/category','CategoryController@index')->name('category');
    Route::get('master-data/category/displayData','CategoryController@display')->name('category.displayData');
    Route::get('master-data/category/{id}','CategoryController@edit')->name('category.edit');
    Route::post('master-data/category','CategoryController@store')->name('category.save');
    Route::delete('master-data/category/{id}','CategoryController@destroy')->name('category.delete');
    Route::patch('master-data/category/{id}','CategoryController@update')->name('category.update'); 


    Route::get('master-data/subcategory','SubcategoryController@index')->name('subcategory');
    Route::get('master-data/subcategory/displayData','SubcategoryController@display')->name('subcategory.displayData');
    Route::get('master-data/subcategory/{id}','SubcategoryController@edit')->name('subcategory.edit');
    Route::post('master-data/subcategory','SubcategoryController@store')->name('subcategory.save');
    Route::delete('master-data/subcategory/{id}','SubcategoryController@destroy')->name('subcategory.delete');
    Route::patch('master-data/subcategory/{id}','SubcategoryController@update')->name('subcategory.update'); 

    Route::get('master-data/product','ProductController@index')->name('product');
    Route::get('master-data/product/displayData','ProductController@display')->name('product.displayData');
    Route::get('master-data/product/getSubcategory/{id}','ProductController@getSubcategory')->name('product.getSubcategory');
    // Route::get('master-data/product/{id}','ProductController@edit')->name('product.edit');
    Route::get('master-data/product/create','ProductController@create')->name('product.create');
    Route::post('master-data/product','ProductController@store')->name('product.save');
    Route::delete('master-data/product/{id}','ProductController@destroy')->name('product.delete');
    Route::patch('master-data/product/{id}','ProductController@update')->name('product.update'); 
    
});





