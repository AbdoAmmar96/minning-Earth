<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\GalleryEnabled;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/partnerships', [PageController::class, 'partnerships'])->name('partnerships');
Route::get('/research', [PageController::class, 'research'])->name('research');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// المعرض - محمي بـ middleware للتحقق من حالة التفعيل
Route::get('/gallery', [PageController::class, 'gallery'])
    ->name('gallery')
    ->middleware(GalleryEnabled::class);
