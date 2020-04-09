<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* CATEGORIES ROUTES */
// Categories index
Route::get('/categories', 'ControllerCategory@index')->name('categories');

// Add a new category
Route::get('/categories/new', 'ControllerCategory@create');

// Save a category to database
Route::post('/categories', 'ControllerCategory@store');

// Delete a category by id
Route::get('/categories/delete/{id}', 'ControllerCategory@destroy');

// Edit a category by id
Route::get('/categories/edit/{id}', 'ControllerCategory@edit');

// Update a category by id
Route::post('/categories/{id}', 'ControllerCategory@update');

/* PRODUCTS ROUTES */
// Products index
Route::get('/products', 'ControllerProduct@index')->name('products');

// Add a new product
Route::get('/products/new', 'ControllerProduct@create');

//Save a product to database
Route