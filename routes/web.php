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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/facilities', [PagesController::class, 'facilities'])->name('facilities');
Route::get('/admission', [PagesController::class, 'admission'])->name('admission');
// new routes
Route::get('/research', [PagesController::class, 'research'])->name('research');
Route::get('/students', [PagesController::class, 'students'])->name('students');
Route::get('/jobs', [PagesController::class, 'jobs'])->name('jobs');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/library', [PagesController::class, 'library'])->name('library');
// end new routes

Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');