<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactsController;

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

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/contacts', [ContactsController::class, 'contact'])->name('contact');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/contact/{id}', [ContactsController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactsController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{id}', [ContactsController::class, 'destroy'])->name('destroyContact');

Route::get('/admin/home/category', [AdminController::class, 'category']);
Route::post('/categories', [AdminController::class, 'storeCategory'])->name('storeCategory');
Route::get('/categories/{id}', [AdminController::class, 'destroy'])->name('destroyCategory');

Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/users/{id}', [AdminController::class, 'destroyUser'])->name('destroyUser');

Route::get('allcontacts', [AdminController::class,'allcontacts']);




