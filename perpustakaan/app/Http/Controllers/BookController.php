<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // LIST + SEARCH
    public function index(Request $request)
    {
        $search = $request->search;

        $books = Book::when($search, function ($query) use ($search) {
            $query->where('judul', 'like', "%{$search}%")
                  ->orWhere('penulis', 'like', "%{$search}%");
        })->get();

        return view('books.index', compact('books', 'search'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('books.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required',
            'penulis' => 'required',
            'stok'    => 'required|numeric'
        ]);

        Book::create($request->all());

        return redirect('/books')->with('success', 'Buku berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // UPDATE DATA
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul'   => 'required',
            'penulis' => 'required',
            'stok'    => 'required|numeric'
        ]);

        $book->update($request->all());

        return redirect('/books')->with('success', 'Buku berhasil diupdate');
    }

    // HAPUS DATA
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Buku berhasil dihapus');
    }
}
