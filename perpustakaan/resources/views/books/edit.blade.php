<h1>Edit Buku</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="kode_buku" value="{{ $book->kode_buku }}"><br><br>
    <input type="text" name="judul" value="{{ $book->judul }}"><br><br>
    <input type="text" name="penulis" value="{{ $book->penulis }}"><br><br>
    <input type="text" name="penerbit" value="{{ $book->penerbit }}"><br><br>
    <input type="number" name="tahun" value="{{ $book->tahun }}"><br><br>
    <input type="number" name="stok" value="{{ $book->stok }}"><br><br>

    <button type="submit">Update</button>
</form>
