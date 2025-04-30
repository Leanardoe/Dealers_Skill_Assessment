<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// View all customers
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Show create form
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

// Handle form submission
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

// Show one customer
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');

// Show edit form
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

// Handle update submission
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

// 👉Delete a customer
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');