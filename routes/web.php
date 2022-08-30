<?php

use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('master');
});

Route::get('/admin/create', [UserController::class, 'createUser'])->name('crear.usuario');
Auth::routes();



Route::middleware([])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\Admin\UserController::class, 'dashboardAdmin'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\Admin\UserController::class, 'profileAdmin'])->name('profile');
    Route::post('/profile/update', [App\Http\Controllers\Admin\UserController::class, 'profileAdminUpdate'])->name('profile.update');
    Route::get('/users/list', [App\Http\Controllers\Admin\UserController::class, 'listUsers'])->name('users.list');
    Route::get('/users/banner', [App\Http\Controllers\Admin\UserController::class, 'bannersUsers'])->name('banners.list');
    Route::get('/users/download/banner/{banner}', [App\Http\Controllers\Admin\UserController::class, 'downloadBanner'])->name('download.banner');
});
