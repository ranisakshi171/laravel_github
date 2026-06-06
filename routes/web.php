<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\CatalogVideoController;
use App\Http\Controllers\WhatsAppController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product-category/{slug}', [ProductController::class, 'category'])->name('product.category');
Route::get('/product-details/{slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details/{slug}', [BlogController::class, 'show'])->name('blog.detail');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page');
Route::get('/brochure', [BrochureController::class, 'index'])->name('brochure');
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications');
Route::get('/catalog-videos', [CatalogVideoController::class, 'index'])->name('catalog.videos');
Route::post('/whatsapp', [WhatsAppController::class, 'send'])->name('whatsapp');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);

    Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::delete('contacts/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::patch('contacts/{contact}/read', [App\Http\Controllers\Admin\ContactController::class, 'markAsRead'])->name('contacts.mark-read');

    Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

    Route::get('about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about.index');
    Route::post('about', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');

    Route::get('counters', [App\Http\Controllers\Admin\CounterController::class, 'index'])->name('counters.index');
    Route::post('counters', [App\Http\Controllers\Admin\CounterController::class, 'store'])->name('counters.store');
    Route::put('counters/{counter}', [App\Http\Controllers\Admin\CounterController::class, 'update'])->name('counters.update');
    Route::delete('counters/{counter}', [App\Http\Controllers\Admin\CounterController::class, 'destroy'])->name('counters.destroy');

    Route::get('testimonials', [App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('testimonials.index');
    Route::post('testimonials', [App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('testimonials.store');
    Route::put('testimonials/{testimonial}', [App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('testimonials/{testimonial}', [App\Http\Controllers\Admin\TestimonialController::class, 'destroy'])->name('testimonials.destroy');
});

// Authentication Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
