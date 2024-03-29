<?php

use App\Http\Controllers\FrontAboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ExampleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\FrontProductController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\FrontContactController;
use App\Http\Controllers\LanguageController;

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

Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/about', [FrontAboutController::class,'about'])->name('about');
    Route::get('/lang/{lang}', [LanguageController::class,'change'])->name('changelang');
    Route::resource('category',FrontCategoryController::class);
    Route::get('/contact', [FrontContactController::class,'contact'])->name('contact');
    Route::resource('category.subcategory',SubCategoryController::class);
    Route::resource('subcategory.product',FrontProductController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('slider',SliderController::class);
        Route::resource('about',AboutController::class);
        Route::resource('contact',ContactController::class);
        Route::resource('client', ClientController::class);
        Route::resource('example',ExampleController::class);
        Route::resource('category',CategoryController::class);
        Route::resource('product',ProductController::class);
        Route::resource('property',PropertyController::class);
    });

    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', [AccountController::class, 'settings'])->name('settings');
        Route::get('/security', [AccountController::class, 'security'])->name('security');
        Route::post('/security/changepassword', [AccountController::class, 'changePassword'])->name('security.changepassword');
    });
});

require __DIR__ . '/auth.php';
