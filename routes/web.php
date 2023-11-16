<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/posts', [PostController::class, 'index'])->name('overzicht-berichten');
//Route::get('/posts/details', [PostController::class, 'details'])->name('bekijk-bericht');
Route::get('/posts/detail/{post}', [PostController::class, "show"])->name('posts.show');

Route::get('/users/create', [UserController::class, 'create'])->name('maak-gebruiker');
Route::post('/users/create', [UserController::class, 'store'])->name('sla-gebruiker-op');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/users', [UserController::class, 'index'])->name('overzicht-gebruikers');




    Route::get('/posts/create', [PostController::class, 'create'])->name('maak-bericht');
    Route::post('/posts/create', [PostController::class, 'store'])->name('sla-bericht-op');
    Route::get('/posts/edit/{post}', [PostController::class, "edit"])->name('posts.edit');
    Route::post('/posts/update/{post}', [PostController::class, "update"])->name('posts.update');
    //Route::get('/posts/update/{post}', [PostController::class, "update"])->name('posts.update');
});


require __DIR__ . '/auth.php';
