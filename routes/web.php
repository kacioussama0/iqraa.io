<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home');
Route::view('conditions-joins','conditions-join');
Route::view('contact-us','contact');
Route::view('travel-info','travel-info');
Route::view('gallery','gallery');
Route::view('faq','faq');

Route::get('school-news',[\App\Http\Controllers\BlogController::class,'categories']);
Route::get('school-news/{category}',[\App\Http\Controllers\BlogController::class,'categoryPosts']);
Route::get('school-news/{category}/{post}',[\App\Http\Controllers\BlogController::class,'categoryPost']);

Route::prefix('admin')->group(function () {
    Route::resource('categories',\App\Http\Controllers\CategoryController::class);
    Route::resource('posts',\App\Http\Controllers\PostController::class);
    Route::post('posts/uploadImage',[\App\Http\Controllers\PostController::class,'uploadImage'])->name('posts.uploadImage');

});
