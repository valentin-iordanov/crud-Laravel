<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Base routes
Route::get('/', [BaseController::class, 'homeView']);
Route::get('/books', [BaseController::class, 'booksView']);
Route::get('/mybooks', [BaseController::class, 'myBooksView']);
Route::get('/about', [BaseController::class, 'aboutView']);
Route::get('/contact', [BaseController::class, 'contactView']);
Route::get('/login', [BaseController::class,'viewLogin']);
Route::get('/register', [BaseController::class,'viewRegister']);
Route::get('/dashboard', [BaseController::class, 'viewDashboaed'])->middleware('admin');
Route::get('/edit-book/{book}', [BaseController::class, 'showEditScreen'])->middleware('admin');
Route::get('/add-book', [BaseController::class, 'viewCreateBook'])->middleware('admin');
//DONE

//User routes
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
//DONE

//Book routes
Route::post('/buy-book/{book}', [BookController::class, 'buyBook']);
Route::post('/create-book', [BookController::class, 'createBook'])->middleware('admin');
Route::put('/edit-book/{book}', [BookController::class, 'updateInfo'])->middleware('admin');
Route::delete('/delete-book/{book}', [BookController::class, 'deleteBook'])->middleware('admin');
