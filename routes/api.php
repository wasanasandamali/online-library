<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']); // Ensure this is a POST route

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Book routes
    Route::get('/books', [BookController::class, 'index']); // Fetch all books
    Route::post('/books', [BookController::class, 'store']); // Create a new book
    Route::get('/books/{id}', [BookController::class, 'show']); // Get a specific book
    Route::put('/books/{id}', [BookController::class, 'update']); // Update a book
    Route::delete('/books/{id}', [BookController::class, 'destroy']); // Delete a book
    
    // Route to get the authenticated user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
