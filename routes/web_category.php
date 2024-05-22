<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/admin/category-list', [CategoryController::class, "getAll"]);
Route::get('/admin/category-delete/{id}', [CategoryController::class, "delete"]);
Route::get('/admin/category-add', [CategoryController::class, "add"]);
Route::post('/admin/category-save', [CategoryController::class, "save"]);
Route::get('/admin/category-edit/{id}', [CategoryController::class, "edit"]);
Route::post("/admin/category-update/{id}", [CategoryController::class, "update"]);
Route::get("/admin/category-search", [CategoryController::class, "categorySearch"]);


