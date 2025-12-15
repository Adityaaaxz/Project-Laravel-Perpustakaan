<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\DashboardController;

// DASHBOARD
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// BOOKS
Route::resource('books', BookController::class);

// MEMBERS
Route::resource('members', MemberController::class);

// BORROWINGS
Route::get('/borrowings', [BorrowingController::class, 'index']);
Route::get('/borrowings/create', [BorrowingController::class, 'create']);
Route::post('/borrowings', [BorrowingController::class, 'store']);
Route::put('/borrowings/{borrowing}/kembali', [BorrowingController::class, 'kembali']);

Route::get('/laporan/peminjaman', [BorrowingController::class, 'laporan']);
