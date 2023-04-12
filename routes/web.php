<?php

use App\Http\Controllers\ContactsController;
use App\Models\Contacts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// contacts management
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/new', [ContactsController::class, 'new'])->name('new');
Route::post('/store', [ContactsController::class, 'store'])->name('store');
Route::delete('/contact/delete/{id}', [ContactsController::class, 'delete'])->name('delete.contact');

// deleted contact
Route::get('/trash', [ContactsController::class, 'trash'])->name('trash');

// favotite's contact
Route::get('/favorite', [ContactsController::class, 'favorite'])->name('favorite');

