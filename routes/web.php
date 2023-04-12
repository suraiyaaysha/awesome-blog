<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Frontend\FrontendBlogController;

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

// Frontend Route List Start
// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Route List
// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [FrontendBlogController::class, 'index'])->name('frontend.home');
Route::get('frontend/blog/{id}/blog-details', [FrontendBlogController::class, 'show'])->name('frontend.blog.blog-details');

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});


// Admin Panel Route List Start

// Route::get('admin/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');
// Route::get('admin/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/blog/', [BlogController::class, 'index'])->name('admin.blog.index');

Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::put('admin/blog/{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
Route::get('admin/blog/{id}/show', [BlogController::class, 'show'])->name('admin.blog.show');

// Page Settings Route List Start
Route::get('/admin/home', function () {
    return view('admin.home');
});

Route::get('/admin/about', function () {
    return view('admin.about');
});

Route::get('/admin/contact', function () {
    return view('admin.contact');
});

Route::get('/admin/general-settings', function () {
    return view('admin.general-settings');
});
