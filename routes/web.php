<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\admin\HomeAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', HomeController::class)->name('home');

// Service routes

Route::get('/services/list', [ServiceController::class, 'index'])->name('services.list');
Route::get('/services/show/{service_id}', [ServiceController::class, 'show'])->name('services.show');


// About

Route::get('/about', AboutController::class)->name('about');

// Contact

Route::get('/contact', ContactController::class)->name('contact.page');


// Formations routes

Route::get('/formations/list', [FormationController::class, 'index'])->name('formations.list');
Route::get('/formations/show/{formation_id}', [FormationController::class, 'show'])->name('formations.show');


// Events routes

Route::get('/events/list', function () {
    return 'Events';
})->name('events.list');
Route::get('/events/show/{event_id}', function () {
    return 'Event';
})->name('events.show');


//  Blog routes

Route::get('/blog/list', function () {
    return 'Blog';
})->name('blog.list');

Route::get('/blog/show/{article_id}', function () {
    return 'Blog Article';
})->name('blog.show');


// ADMIN ROUTES

Route::any('/admin/login', LoginController::class)->name('admin.login');
Route::any('/admin/logout', LogoutController::class)->name('admin.logout');
Route::get('/admin/home', DashboardController::class)->name('admin.dashboard');
