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

Route::get('Pricing_show', [App\Http\Controllers\Frontend\FrontendController::class, 'pricing_show'])->name('pricing_show');

Route::get('Blog', [App\Http\Controllers\Frontend\FrontendController::class, 'blog'])->name('blog');

Route::get('Enterprice', [App\Http\Controllers\Frontend\FrontendController::class, 'enterprice'])->name('enterprice');

Route::get('contact_us', [App\Http\Controllers\Frontend\FrontendController::class, 'contact_us'])->name('contact_us');

Route::post('Add_Contact', [App\Http\Controllers\Frontend\FrontendController::class, 'add_contact'])->name('add_contact');
// End


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// User Routes
Route::middleware(['auth', 'User'])->group(function () {
    // User Dashboard Routes
    Route::get('User_Dashboard', [App\Http\Controllers\User\UserController::class, 'dashboard'])->name('user.Dashboard');
    // End
    // User Profile Routes
    Route::get('User_Profile', [App\Http\Controllers\User\UserController::class, 'user_profile'])->name('user.user_profile');
    // End
    
});
// End

// Admin Routes
Route::group(['middleware' => ['auth','Admin']], function () {

    // Dashboard Routes
    Route::get('Dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // End

    // profile Routes
    Route::get('Admin-Profile', [App\Http\Controllers\Admin\DashboardController::class, 'admin_profile'])->name('admin.admin_profile');

    Route::post('Edit_Admin_Profile', [App\Http\Controllers\Admin\DashboardController::class, 'edit_admin_profile'])->name('admin.edit_admin_profile');
    
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

    // Pricing Routes
    Route::get('Pricing', [App\Http\Controllers\Admin\Pricing\PricingController::class, 'pricing'])->name('admin.pricing');
    Route::get('Add_Pricing', [App\Http\Controllers\Admin\Pricing\PricingController::class, 'add_pricing'])->name('admin.add_pricing');
    Route::post('Add_Pricing_Action', [App\Http\Controllers\Admin\Pricing\PricingController::class, 'add_pricing_action'])->name('admin.add_pricing_action');

    Route::get('Delete_Price/{id}', [App\Http\Controllers\Admin\Pricing\PricingController::class, 'delete_price'])->name('admin.delete_price');

    Route::post('Price_Edit', [App\Http\Controllers\Admin\Pricing\PricingController::class, 'price_edit'])->name('admin.price_edit');   
    // End
 
 });
