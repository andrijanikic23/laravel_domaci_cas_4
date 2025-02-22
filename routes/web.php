<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::view("/about", "about");




Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, 'get_all_contacts']);

Route::get("/admin/all-products", [\App\Http\Controllers\ShopController::class, 'get_all_products']);

