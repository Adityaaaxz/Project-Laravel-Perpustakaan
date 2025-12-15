<h1>Pinjam Buku</h1>

<form action="/borrowings" method="POST">
    @csrf

    <select name="member_id">
        <option value="">-- Pilih Anggota --</option>
        @foreach($members as $m)
            <option value="{{ $m->id }}">{{ $m->nama }}</option>
        @endforeach
    </select>
    <br><br>

    <select name="book_id">
        <option value="">-- Pilih Buku --</option>
        @foreach($books as $b)
            <option value="{{ $b->id }}">
                {{ $b->judul }} (stok: {{ $b->stok }})
            </option>
        @endforeach
    </select>
    <br><br>

    <input type="date" name="tanggal_kembali">
    <br><br>

    <button type="submit">Pinjam</button>
</form>
