<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

// Authentication routes
Auth::routes();

// Common authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('usages', UsageController::class);
    Route::resource('equipment', EquipmentController::class);
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('maintenances', MaintenanceController::class);
    Route::put('/maintenances/{maintenance}/fixed', [MaintenanceController::class, 'fixed'])->name('maintenances.fixed');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/export', [ReportController::class, 'export'])->name('reports.export');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);

});

// Operator routes
Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::resource('usages', UsageController::class)->only(['create', 'store', 'index']);
    Route::get('/usages/{usage}/confirm', [UsageController::class, 'confirm'])->name('usages.confirm');
    Route::put('/usages/{usage}', [UsageController::class, 'update'])->name('usages.update');
    Route::resource('costs', CostController::class)->only(['create', 'store', 'index']);
});

// Petani (Farmer) routes
Route::middleware(['auth', 'role:petani'])->group(function () {
    Route::get('/usages/create', [UsageController::class, 'create'])->name('usages.create');
    Route::post('/usages', [UsageController::class, 'store'])->name('usages.store');
    Route::get('/usages', [UsageController::class, 'index'])->name('usages.index');
});