<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| BOOKS
|--------------------------------------------------------------------------
*/
Route::resource('books', BookController::class);

/*
|--------------------------------------------------------------------------
| MEMBERS
|--------------------------------------------------------------------------
*/
Route::resource('members', MemberController::class);

/*
|--------------------------------------------------------------------------
| BORROWINGS
|--------------------------------------------------------------------------
*/
Route::resource('borrowings', BorrowingController::class)
    ->except(['show', 'edit', 'update']); 
// karena peminjaman gak perlu edit manual

// aksi khusus pengembalian buku
Route::put('/borrowings/{borrowing}/kembali', 
    [BorrowingController::class, 'kembali']
)->name('borrowings.kembali');

/*
|--------------------------------------------------------------------------
| LAPORAN
|--------------------------------------------------------------------------
*/
Route::get('/laporan/peminjaman',
    [BorrowingController::class, 'laporan']
)->name('laporan.peminjaman');
