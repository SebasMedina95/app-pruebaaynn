<?php

use App\Http\Controllers\ImageController;
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

// Route::get('/', 'TestController@welcome'); v5.5
// Route::get('/home', 'HomeController@index')->name('home'); v5.5
Route::get('/', [TestController::class, 'myWelcomeMethod']);
Route::get('/dashboard', [DashboardController::class, 'index']);

//Protected with my Personal Middleware ['auth', 'admin']        ->prefix('admin')->namespace('Admin')
//Con prefix eliminamos /admin de la ruta por que se sobre entiende
Route::middleware(['admin'])->prefix('admin')->group(function () {

    Route::get('/products', [ProductController::class, 'myIndex']); //Listado (Edit and Del)
    Route::get('/products/create', [ProductController::class, 'myCreate']); //Form Create - view
    Route::post('/products', [ProductController::class, 'myStore']); // Create
    Route::get('/products/{id}/edit', [ProductController::class, 'myEdit']); //Form Edit - view
    Route::post('/products/{id}/edit', [ProductController::class, 'myUpdate']); // Edit
    Route::post('/products/{id}/delete', [ProductController::class, 'myDestroy']); // Edit

    Route::get('/products/{id}/images', [ImageController::class, 'myIndex']); // listado
	Route::post('/products/{id}/images', [ImageController::class, 'myStore']); // registrar
	Route::delete('/products/{id}/images', [ImageController::class, 'myDestroy']); // form eliminar
	Route::get('/products/{id}/images/select/{image}/{b}', [ImageController::class, 'mySelect']); // destacar, primer id product, segundo image, tercero si habilito o inhabilito

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
