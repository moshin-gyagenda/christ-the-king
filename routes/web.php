<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MissionVissionController;
use App\Http\Controllers\FacilitiesInfrastructureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\ResultController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/upcoming-events', [EventController::class, 'index'])->name('upcoming-events');
Route::get('/admission', [AdmissionController::class, 'index'])->name('admission');
Route::get('/curriculum', [CurriculumController::class, 'index'])->name('curriculum');
Route::get('/results', [ResultController::class, 'index'])->name('results');
// Redirect
Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Dashboard
    Route::prefix('admin-dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::get('/aboutus', [AboutController::class, 'create'])->name('aboutus');
        Route::post('/store-about', [AboutController::class, 'store'])->name('store-about');
        Route::get('/mission-vission', [MissionVissionController::class, 'create'])->name('mission-vission');
        Route::post('/mission-vision-store', [MissionVissionController::class, 'store'])->name('mission-vision-store');
        Route::get('/facilities-infrastructure', [FacilitiesInfrastructureController::class, 'create'])->name('facilities-infrastructure');
        Route::post('/facilities-infrastructure-store', [FacilitiesInfrastructureController::class, 'store'])->name('facilities-infrastructure-store');
    });
});
