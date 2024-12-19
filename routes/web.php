<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', function () {
    return view('home/index');
});
Route::get('/profile', function () {
    return view('home/profile');
});
Route::get('/about', function () {
    return view('home/about');
});
Route::get('/schedule', [ScheduleController::class, 'scrapeSchedule']);

Route::get('/blog', [BlogController::class, 'showBlog'])->name('showBlog');
Route::get('/scrape', [BlogController::class, 'scrapeBlog']);
    

require __DIR__.'/auth.php';
