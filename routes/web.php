<?php

use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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
Route::get('/search', [SearchController::class, 'show']);


Route::get('/products/{id}', [ProductController::class, 'myShow']);


Route::post('/order', [CartDetailController::class, 'myStore']);
Route::delete('/order', [CartDetailController::class, 'myDestroy']);

Route::post('/ordering', [OrderingController::class, 'myUpdate']);


Route::middleware(['admin'])->group(function () {

    Route::get('/admin/products', [ProductController::class, 'myIndex']); //Listado (Edit and Del)
    Route::get('/admin/products/create', [ProductController::class, 'myCreate']); //Form Create - view
    Route::post('/admin/products', [ProductController::class, 'myStore']); // Create
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'myEdit']); //Form Edit - view
    Route::post('/admin/products/{id}/edit', [ProductController::class, 'myUpdate']); // Edit
    Route::post('/admin/products/{id}/delete', [ProductController::class, 'myDestroy']); // Edit

    Route::get('/admin/products/{id}/images', [ImageController::class, 'myIndex']); // listado
	Route::post('/admin/products/{id}/images', [ImageController::class, 'myStore']); // registrar
	Route::delete('/admin/products/{id}/images', [ImageController::class, 'myDestroy']); // form eliminar
	Route::get('/admin/products/{id}/images/select/{image}/{b}', [ImageController::class, 'mySelect']); // destacar, primer id product, segundo image, tercero si habilito o inhabilito

    Route::get('/categories', [CategoryController::class, 'index']); // listado
	Route::get('/categories/create', [CategoryController::class, 'create']); // formulario
	Route::post('/categories', [CategoryController::class, 'store']); // registrar
	Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']); // formulario edición
	Route::post('/categories/{category}/edit', [CategoryController::class, 'update']); // actualizar
	Route::delete('/categories/{category}', [CategoryController::class, 'destroy']); // form eliminar

    Route::get('/cities', [CityController::class, 'index']); // listado
	Route::get('/cities/create', [CityController::class, 'create']); // formulario
	Route::post('/cities', [CityController::class, 'store']); // registrar
	Route::get('/cities/{city}/edit', [CityController::class, 'edit']); // formulario edición
	Route::post('/cities/{city}/edit', [CityController::class, 'update']); // actualizar
	Route::delete('/cities/{city}', [CityController::class, 'destroy']); // form eliminar

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
