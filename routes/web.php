<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/facilities', [PagesController::class, 'facilities'])->name('facilities');
Route::get('/admission', [PagesController::class, 'admission'])->name('admission');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');