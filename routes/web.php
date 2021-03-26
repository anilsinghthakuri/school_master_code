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



Route::middleware(['auth'])->group(function () {

    //for dashboard
    Route::view('/dashboard', 'dashboard');

    //for gallery
    Route::view('/gallery-album', 'gallery.index')->name('gallery.album');
    Route::view('/gallery-image', 'gallery.galleryimage')->name('gallery.image');

    //for staff
    Route::view('/staff-category', 'staff.staff_category');
    Route::view('/staff', 'staff.staff');

    //for notice
    Route::view('/notice-category', 'notice.noticecategory');
    Route::view('/notice', 'notice.notice');

    //for setup
    Route::view('/setup', 'setup.setup');

});


require __DIR__.'/auth.php';
