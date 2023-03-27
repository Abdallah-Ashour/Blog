<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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



Route::resource('blog', BlogController::class);
Route::get('category/{category}', [BlogController::class, 'category'])->name('category');

// Route::get('/', function () {
//     return view('blog.index');
// });

// Route::get('/blog/show/{blog??}', function ($blog = null) {
//     return view('blog.show');
// });
