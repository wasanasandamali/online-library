<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

// Registration and Login routes
Route::post('/register', [AuthController::class, 'register']); // User registration
Route::post('/login', [AuthController::class, 'login'])->name('login'); // User login (named route for redirects)
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum'); // Logout (requires authentication)

// Home route
Route::get('/welcome', function () {
    return view('welcome'); // Welcome page or home page
});

// Books route
Route::get('/books', [BookController::class, 'index'])->name('books.index'); // List all books
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show'); // Show details of a specific book
