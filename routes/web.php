<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'TestController@welcome');
Route::get('/', [TestController::class, 'myWelcomeMethod']);

Route::get('/admin/products', [ProductController::class, 'myIndex']); //Listado (Edit and Del)
Route::get('/admin/products/create', [ProductController::class, 'myCreate']); //Form Create - view
Route::post('/admin/products', [ProductController::class, 'myStore']); // Create

Route::get('/admin/products/{id}/edit', [ProductController::class, 'myEdit']); //Form Edit - view
Route::post('/admin/products/{id}/edit', [ProductController::class, 'myUpdate']); // Edit





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
