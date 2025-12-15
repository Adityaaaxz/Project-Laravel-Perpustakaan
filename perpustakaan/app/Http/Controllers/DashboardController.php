<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Borrowing;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalBooks' => \App\Models\Book::count(),
            'totalMembers' => \App\Models\Member::count(),
            'borrowedBooks' => \App\Models\Borrowing::where('status', 'dipinjam')->count(),
        ]);
    }
}
