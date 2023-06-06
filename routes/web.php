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

Route::post('Add_Contact', [App\Http\Controllers\Frontend\FrontendController::class, 'add_contact'])->name('add_contact');
// End


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Routes
Route::middleware(['auth', 'User'])->group(function () {
    Route::get('User', [App\Http\Controllers\User\UserController::class, 'dashboard'])->name('user.Dashboard');
});


// Admin Routes
Route::group(['middleware' => ['auth','Admin']], function () {

    // Dashboard Routes
    Route::get('Dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // End

    // Contact Routes
    Route::get('Contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'contact'])->name('admin.contact');
    // End

    // User Routes
    Route::get('User', [App\Http\Controllers\Admin\User\UserController::class, 'user'])->name('admin.user');
    Route::get('user_edit/{id}', [App\Http\Controllers\Admin\User\UserController::class, 'user_edit'])->name('admin.user_edit');
    Route::post('Edit_User_Action', [App\Http\Controllers\Admin\User\UserController::class, 'edit_user_action'])->name('admin.edit_user_action');
    Route::get('Delete_User/{id}', [App\Http\Controllers\Admin\User\UserController::class, 'delete_user'])->name('admin.delete_user');    
    // End
 
 });
