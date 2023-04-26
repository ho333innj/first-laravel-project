<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;


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

Route::get('/', [HomeController::class, 'view'])->name('home');
Route::get('/login', [LoginController::class, 'view'])->name('login.user');
Route::get('/register', [RegisterController::class, 'view'])->name('register.user');

Route::get('/db', [DbController::class, 'showusers'] );
Route::get('/dbinsertuser', [DbController::class, 'insertuser'] );
Route::get('/dbinsertadvert', [DbController::class, 'insertadvert'] );

Route::get('/advert.create.show', [AdvertController::class, 'shownewadvert'])->name('newadvertshow');
Route::post('/advert.create', [AdvertController::class, 'create'])->name('newadvert');



Route::get('/advert.show', [AdvertController::class, 'show'])->name('advertslist');
// Route::get('/usersadverts.show', [AdvertController::class, 'showUA'])->name('usersadvertslist');
Route::get('/user.show', [UserController::class, 'show'])->name('userslist');
Route::get('/advert.edit', [AdvertController::class, 'edit'])->name('editadvert');
Route::get('/advert.edit.show', [AdvertController::class, 'showedit'])->name('editadvertshow');





