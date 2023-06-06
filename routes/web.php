<?php

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

// Auth Routes
Auth::routes();
// End

// Frontend Routes
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('index');

Route::get('Pricing', [App\Http\Controllers\Frontend\FrontendController::class, 'pricing'])->name('pricing');

Route::get('Blog', [App\Http\Controllers\Frontend\FrontendController::class, 'blog'])->name('blog');

Route::get('Enterprice', [App\Http\Controllers\Frontend\FrontendController::class, 'enterprice'])->name('enterprice');

Route::get('Contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('contact');
// End


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Routes
Route::middleware(['auth', 'User'])->group(function () {
    Route::get('User', [App\Http\Controllers\User\UserController::class, 'dashboard'])->name('user.Dashboard');
});


// Admin Routes
Route::group(['middleware' => ['auth','Admin']], function () {

    Route::get('Dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
 
 });
