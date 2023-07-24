<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

// Route::get('', function () {
//     return view('/');
// });
Route::get('/', [HomeController::class, 'index']);
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('viewreservation', [AdminController::class, 'viewreservation']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [AdminController::class, 'user']);
    Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
    Route::post('/uploadfood', [AdminController::class, 'uploadfood']);
    Route::get('/foodmenushow', [AdminController::class, 'foodmenushow']);
    Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);
    Route::get('/updatemenu/{id}', [AdminController::class, 'updatemenu']);
    Route::post('/update/{id}', [AdminController::class, 'update']);
    Route::get('viewchefs', [AdminController::class, 'viewchefs']);
    Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);
    Route::get('/search', [AdminController::class, 'searchfood']);
    // Route::post('/aboutfood', [AdminController::class, 'aboutfood']);

});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get("/users",)
require __DIR__ . '/auth.php';
