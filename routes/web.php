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
use App\Http\Controllers\RepairController;
use App\Http\Controllers\MaterialController;







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
    Route::resource('equipment', EquipmentController::class);
    Route::resource('repairs', RepairController::class);
    Route::resource('materials', MaterialController::class);
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
    // Usage for Admin: Accessing all functions related to Usage
    Route::resource('usages', UsageController::class);
    Route::resource('repairs', RepairController::class);
    Route::resource('materials', MaterialController::class);
});

// Operator routes
Route::middleware(['auth', 'role:operator'])->group(function () {
    // Operator: Can view, create, and confirm usage
    Route::resource('usages', UsageController::class)->only(['index', 'create', 'store']);
    Route::get('/usages/{usage}/confirm', [UsageController::class, 'confirm'])->name('usages.confirm');
    Route::put('/usages/{usage}', [UsageController::class, 'update'])->name('usages.update');
    Route::resource('costs', CostController::class)->only(['create', 'store', 'index']);
});

// Petani (Farmer) routes
Route::middleware(['auth', 'role:petani'])->group(function () {
    // Petani: Only need to create and store usages
    Route::resource('usages', UsageController::class)->only(['create', 'store', 'index']);
});
