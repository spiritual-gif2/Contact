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

/* contacts management */

// list all the contacts
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
// get the form to create a new contact
Route::get('/new', [ContactsController::class, 'new'])->name('new');
// store the newly created contact data into the database
Route::post('/store', [ContactsController::class, 'store'])->name('store');
// delete a given contact and send it to trash
Route::delete('/contact/delete/{id}', [ContactsController::class, 'delete'])->name('delete.contact');

// get the form to edit a given contact
Route::get('/edit/contact/{id}', [ContactsController::class, 'edit'])->name('edit');
// store the edited contact data into the database
Route::put('/update/contact/{id}', [ContactsController::class, 'update'])->name('update');

// deleted contact
Route::get('/trash', [ContactsController::class, 'trash'])->name('trash');

// favotite's contact
Route::get('/favorite', [ContactsController::class, 'favorite'])->name('favorite');

