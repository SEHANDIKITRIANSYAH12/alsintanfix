<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UsageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::resource('equipment', EquipmentController::class);




Route::resource('maintenances', MaintenanceController::class);

// routes/web.php



// Route untuk menampilkan halaman pemesanan alsintan (formulir)
Route::get('/usages/create', [UsageController::class, 'create'])->name('usages.create');

// Route untuk menyimpan pemesanan alsintan
Route::post('/usages', [UsageController::class, 'store'])->name('usages.store');

// Route untuk menampilkan daftar penggunaan alsintan
Route::get('/usages', [UsageController::class, 'index'])->name('usages.index');

// Route untuk menampilkan form konfirmasi penggunaan alsintan
Route::get('/usages/{usage}/confirm', [UsageController::class, 'confirm'])->name('usages.confirm');

// Route untuk mengonfirmasi penggunaan alsintan
Route::put('/usages/{usage}', [UsageController::class, 'update'])->name('usages.update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
