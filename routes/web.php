<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Lisgings
|--------------------------------------------------------------------------
|
| All of the listing's routes will be here.
|
*/

// Show all listings
Route::get('/', [ListingController::class, 'index']);

// Create listing
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store single listing
Route::post('/listings/create', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Show Listing
Route::put('/listings/{listing}/edit', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
|
| All user related routes will be here.
|
*/

// Show Register Form
Route::get('/register', [UserController::class, 'create']);

// Register A User
Route::post('/users', [UserController::class, 'store']);

// Logout A User
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// User Authentication
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
