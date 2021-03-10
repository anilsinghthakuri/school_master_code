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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::view('/master', 'layouts.backend.master');

//for gallery
Route::view('/gallery-album', 'gallery.index')->name('gallery.album');
Route::view('/gallery-image', 'gallery.galleryimage')->name('gallery.image');

//for staff
Route::view('/staff-category', 'staff.staff_category');
Route::view('/staff', 'staff.staff');

require __DIR__.'/auth.php';
