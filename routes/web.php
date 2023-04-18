<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Frontend\FrontendBlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\FrontendContactController;
use App\Http\Controllers\CmsController;
use Illuminate\Support\Facades\Auth;

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

// Frontend Routes
Route::get('/', [FrontendBlogController::class, 'index'])->name('frontend.home');
Route::get('frontend/blog/{id}/blog-details', [FrontendBlogController::class, 'show'])->name('frontend.blog.blog-details');


Route::controller(FrontendBlogController::class)->group(function(){
    Route::get('/', 'home')->name('frontend.home');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/contact', 'contact')->name('frontend.contact');
});


Route::post('/contact', [ContactController::class, 'contactFormStore'])->name('frontend.contact.contactFormStore');


// Admin Panel Route List Start

// Route::get('admin/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');
// Route::get('admin/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });


Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::get('admin/blog/', [BlogController::class, 'index'])->name('admin.blog.index');

    Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('admin/blog/{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::get('admin/blog/{id}/show', [BlogController::class, 'show'])->name('admin.blog.show');

    // Page Settings Route List Start
    Route::controller(CmsController::class)->group(function(){
        Route::get('/admin/home', 'home')->name('admin.home');
        Route::put('/admin/home', 'homeUpdate')->name('admin.home');
        Route::get('/admin/about', 'about')->name('admin.about');
        Route::put('/admin/about', 'aboutUpdate')->name('admin.about');
        Route::get('/admin/contact', 'contact')->name('admin.contact');
        Route::put('/admin/contact', 'contactUpdate')->name('admin.contact');
    });

    // Route::get('/admin/contact/list', [ContactController::class, 'contactList'])->name('admin.contact.contactList');
    Route::delete('admin/contact/{id}/delete', [ContactController::class, 'destroy'])->name('admin.contact.destroy');

    Route::get('admin/general-settings', function () {
        return view('admin.general-settings');
    });

    // Auth::routes();

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

});

