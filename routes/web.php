<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Frontcontroller;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Frontcontroller::class, 'welcome'])->name('welcome');
Route::get('/categoria/{category}', [Frontcontroller::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncements'])->middleware('auth')->name('announcements.create');
Route::get('/dettaglio/annuncio/{latestAnnouncement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcements.details');