<?php

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

// Route::get('/{any}', function () {
//     return file_get_contents(public_path('index.html'));
// });
Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'ShowLoginView'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::post('/service/store', [\App\Http\Controllers\ServiceController::class, 'store'])->middleware(['admin', 'auth'])->name('service.store');
Route::get('/service/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->middleware(['admin', 'auth'])->name('services.edit');
Route::put('/service/update/{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->middleware(['auth', 'admin'])->name('service.update');
Route::delete('/service/delete/{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->middleware(['admin', 'auth'])->name('services.destroy');

Route::get('/settings', [\App\Http\Controllers\AdminController::class, 'setting'])->middleware(['auth', 'admin'])->name('settings');
Route::get('/changeemail', [\App\Http\Controllers\AdminController::class, 'ChangeEmailView'])->name('admin.change.email');
Route::get('/changepassword', [\App\Http\Controllers\AdminController::class, 'ChangePasswordView'])->name('admin.change.password');
Route::put('/new/password', [\App\Http\Controllers\UserController::class, 'ChangePassword'])->middleware(['auth', 'admin'])->name('password.save');
Route::put('/new/email', [\App\Http\Controllers\UserController::class, 'ChangeEmail'])->middleware(['auth', 'admin'])->name('email.save');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');
