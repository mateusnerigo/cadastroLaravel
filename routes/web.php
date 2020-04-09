<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* CATEGORIES ROUTES */
// Categories index
Route::get('/categories', 'ControllerCategory@index')->name('categories');

// Add new category
Route::get('/categories/new', 'ControllerCategory@create');

// Save category to database
Route::post('/categories', 'ControllerCategory@store');

// Edit a category by id
Route::get('/categories/edit/{id}', 'ControllerCategory@edit');

// Update a category by id after editing
Route::post('/categories/{id}', 'ControllerCategory@update');

// Delete a category by id
Route::get('/categories/delete/{id}', 'ControllerCategory@destroy');

/* PRODUCTS ROUTES */
// Products index
Route::get('/products', 'ControllerProduct@index')->name('products');

// Add new product
Route::get('/products/new', 'ControllerProduct@create');

// Save product to database
Route::post('/products', 'ControllerProduct@store');

// Edit a product by id
Route::get('/products/edit/{id}', 'ControllerProduct@edit');

// Update a product by id after editing
Route::post('/products/{id}', 'ControllerProduct@update');

// Delete a product by id
Route::get('/products/delete/{id}', 'ControllerProduct@destroy');