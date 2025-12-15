<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    // =========================
    // 📄 DATA PEMINJAMAN
    // =========================
    public function index()
    {
        $borrowings = Borrowing::with(['member', 'book'])->get();
        return view('borrowings.index', compact('borrowings'));
    }

    // =========================
    // ➕ FORM PINJAM
    // =========================
    public function create()
    {
        $members = Member::all();
        $books   = Book::where('stok', '>', 0)->get();

        return view('borrowings.create', compact('members', 'books'));
    }

    // =========================
    // 💾 SIMPAN PEMINJAMAN
    // =========================
    public function store(Request $request)
    {
        Borrowing::create([
            'member_id'       => $request->member_id,
            'book_id'         => $request->book_id,
            'tanggal_pinjam'  => now(),
            'tanggal_kembali' => $request->tanggal_kembali,
            'status'          => 'dipinjam'
        ]);

        // 🔥 KURANGI STOK BUKU
        Book::where('id', $request->book_id)->decrement('stok');

        return redirect('/borrowings')
            ->with('success', 'Buku berhasil dipinjam');
    }

    // =========================
    // 🔄 KEMBALIKAN BUKU
    // =========================
    public function kembali(Borrowing $borrowing)
    {
        $borrowing->update([
            'status' => 'kembali'
        ]);

        // 🔥 TAMBAH STOK BUKU
        $borrowing->book->increment('stok');

        return redirect('/borrowings')
            ->with('success', 'Buku berhasil dikembalikan');
    }

    // =========================
    // 🗑️ HAPUS PEMINJAMAN
    // =========================
    public function destroy(Borrowing $borrowing)
    {
        // kalau masih dipinjam → balikin stok dulu
        if ($borrowing->status === 'dipinjam') {
            $borrowing->book->increment('stok');
        }

        $borrowing->delete();

        return redirect('/borrowings')
            ->with('success', 'Data peminjaman berhasil dihapus');
    }

    // =========================
    // 📄 LAPORAN
    // =========================
    public function laporan()
    {
        $borrowings = Borrowing::with(['member', 'book'])->get();
        return view('borrowings.laporan', compact('borrowings'));
    }
}
