<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AddFormationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditFormationController;
use App\Http\Controllers\Admin\FormationsController;
use App\Http\Controllers\Admin\ShowFormationController;
use App\Http\Controllers\Admin\UpdateFormationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevenirMembreController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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


//  MEMBERS routes

Route::get('/members/register', [DevenirMembreController::class, 'index'])
    ->name('members.devenir');

// ADMIN ROUTES



Route::any('/admin/login', LoginController::class)
    ->name('admin.login');
Route::any('/admin/logout', LogoutController::class)
    ->name('admin.logout');
Route::get('/admin/home', DashboardController::class)
    ->name('admin.dashboard');
Route::get('/admin/formations', FormationsController::class)
    ->name('admin.formations');
Route::get('/admin/formations/add', AddFormationController::class)
    ->name('admin.formations.add');
Route::get('/admin/formations/show/{formation_id}', ShowFormationController::class)
    ->name('admin.formations.show');
Route::get('/admin/formations/edit/{formation_id}', EditFormationController::class)
    ->name('admin.formations.edit');
Route::put('/admin/formations/update/{formation_id}', UpdateFormationController::class)
    ->name('admin.formations.update');
