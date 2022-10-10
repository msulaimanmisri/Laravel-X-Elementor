<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Page\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::name('page.')->group(fn() =>
    Route::get('/', [PageController::class, 'index'])->name('index')
);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

require __DIR__ . '/auth.php';