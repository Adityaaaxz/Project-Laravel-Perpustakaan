<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Borrowing;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku = Book::count();
        $totalAnggota = Member::count();
        $dipinjam = Borrowing::where('status', 'dipinjam')->count();
        $terlambat = Borrowing::where('status', 'dipinjam')
            ->whereDate('tanggal_kembali', '<', now())
            ->count();

        // DATA GRAFIK
        $grafik = Borrowing::select(
            DB::raw('COUNT(*) as total'),
            DB::raw('DATE(tanggal_pinjam) as tanggal')
        )
        ->groupBy('tanggal')
        ->orderBy('tanggal')
        ->get();

        return view('dashboard', compact(
            'totalBuku',
            'totalAnggota',
            'dipinjam',
            'terlambat',
            'grafik'
        ));
    }
}
