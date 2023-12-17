<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\serviceCategoryController;
use App\Http\Controllers\Backend\serviceController;
use App\Http\Controllers\Backend\aboutController;
use App\Http\Controllers\Backend\resonController;
use App\Http\Controllers\Backend\messageController;


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




Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('serviceView/{slug}', [HomeController::class, 'serviceView'])->name('serviceView');
Route::get('serviceDetails/{slug}', [HomeController::class, 'serviceDetail'])->name('serviceDetails');
Route::get('about-us', [HomeController::class, 'aboutPage'])->name('aboutPage');






Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
    Route::resource('sliders', SliderController::class);
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('service', serviceController::class);
    Route::resource('about', aboutController::class);
    Route::resource('reason', resonController::class);
    Route::resource('message', messageController::class);
});

require __DIR__.'/auth.php';
