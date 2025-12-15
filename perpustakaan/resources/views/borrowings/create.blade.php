<h1>Pinjam Buku</h1>

<form action="/borrowings" method="POST" class="borrow-form">
    @csrf

    <label for="member_id">Anggota:</label>
    <select name="member_id" id="member_id">
        <option value="">-- Pilih Anggota --</option>
        @foreach($members as $m)
            <option value="{{ $m->id }}">{{ $m->nama }}</option>
        @endforeach
    </select>

    <label for="book_id">Buku:</label>
    <select name="book_id" id="book_id">
        <option value="">-- Pilih Buku --</option>
        @foreach($books as $b)
            <option value="{{ $b->id }}">
                {{ $b->judul }} (stok: {{ $b->stok }})
            </option>
        @endforeach
    </select>

    <label for="tanggal_kembali">Tanggal Kembali:</label>
    <input type="date" name="tanggal_kembali" id="tanggal_kembali">

    <button type="submit">Pinjam</button>
</form>

<style>
.borrow-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.borrow-form label {
    font-weight: bold;
    margin-bottom: 5px;
}

.borrow-form select,
.borrow-form input[type="date"] {
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.borrow-form button {
    padding: 10px;
    background-color: #007bff;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.borrow-form button:hover {
    background-color: #0056b3;
}
</style>
