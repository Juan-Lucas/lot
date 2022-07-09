<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AddEventController;
use App\Http\Controllers\Admin\AddFormationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditFormationController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\FormationsController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\ShowFormationController;
use App\Http\Controllers\Admin\UpdateFormationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevenirMembreController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginMemberController;
use App\Http\Controllers\LogoutMemberController;
use App\Http\Controllers\MemberSubscriptionController;
use App\Http\Controllers\ProfileMemberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\UpdateMemberController;
use App\Http\Controllers\UpdatePasswordMemberController;
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

Route::get('/', HomeController::class)
    ->name('home');

// Service routes

Route::get('/services/list', [ServiceController::class, 'index'])
    ->name('services.list');
Route::get('/services/show/{service_id}', [ServiceController::class, 'show'])
    ->name('services.show');


// About

Route::get('/about', AboutController::class)
    ->name('about');

// Contact

Route::get('/contact', ContactController::class)
    ->name('contact.page');
Route::post('/contact/email', SendMailController::class)
    ->name('contact.email');


// Formations routes

Route::prefix('/formations/')->group(function (){
    Route::get('list', [FormationController::class, 'index'])
        ->name('formations.list');
    Route::get('show/{formation_id}', [FormationController::class, 'show'])
        ->name('formations.show');
});


// Events routes

Route::prefix('/events/')->group(function (){
    Route::get('list', [EventController::class, 'index'])
        ->name('events.list');
    Route::get('show/{event_id}', function () {
        return 'Event';
    })->name('events.show');
});


//  MEMBERS routes

Route::prefix('/members/')->group(function (){
    Route::get('form', [DevenirMembreController::class, 'index'])
        ->name('members.form');

    Route::post('register',[DevenirMembreController::class, 'register'])
        ->name('members.register');

    Route::get('login/form',[LoginMemberController::class, 'index'])
        ->name('members.login.form');

    Route::post('login',[LoginMemberController::class, 'login'])
        ->name('members.login');

    Route::get('logout', LogoutMemberController::class)
    ->name('members.logout');

    Route::get('profile', ProfileMemberController::class)
    ->name('members.profile');

    Route::put('profile/update', UpdateMemberController::class)
        ->name('members.profile.update');

    Route::put('profile/update/password', UpdatePasswordMemberController::class)
        ->name('members.profile.update.password');

    Route::get('subscription/{formation_id}', [MemberSubscriptionController::class, 'index'])
        ->name('members.subscription');
});


// ADMIN ROUTES

Route::prefix('/admin/')->group(function (){

    Route::any('login', LoginController::class)
        ->name('admin.login');
    Route::any('logout', LogoutController::class)
        ->name('admin.logout');
    Route::get('home', DashboardController::class)
        ->name('admin.dashboard');
    Route::get('formations', FormationsController::class)
        ->name('admin.formations');
    Route::any('formations/add', AddFormationController::class)
        ->name('admin.formations.add');
    Route::get('formations/show/{formation_id}', ShowFormationController::class)
        ->name('admin.formations.show');
    Route::get('formations/edit/{formation_id}', EditFormationController::class)
        ->name('admin.formations.edit');
    Route::put('formations/update/{formation_id}', UpdateFormationController::class)
        ->name('admin.formations.update');
    Route::get('members', MembersController::class)
        ->name('admin.members');
    Route::get('events', EventsController::class)
        ->name('admin.events');
    Route::any('events/add', AddEventController::class)
        ->name('admin.events.add');

});


