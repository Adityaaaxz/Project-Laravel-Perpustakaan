<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['member','book'])->get();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $members = Member::all();
        $books = Book::where('stok', '>', 0)->get();

        return view('borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        Borrowing::create([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'dipinjam'
        ]);

        // 🔥 KURANGI STOK BUKU
        $book = Book::find($request->book_id);
        $book->decrement('stok');

        return redirect('/borrowings');
    }

    public function kembali(Borrowing $borrowing)
    {
        $borrowing->update([
            'status' => 'kembali'
        ]);

        // 🔥 TAMBAH STOK BUKU
        $borrowing->book->increment('stok');

        return redirect('/borrowings');
    }

    // =========================
    // 📄 LAPORAN PEMINJAMAN
    // =========================
    public function laporan()
    {
        $borrowings = Borrowing::with(['member','book'])->get();
        return view('borrowings.laporan', compact('borrowings'));
    }
}
