<h1>Tambah Buku</h1>

<form action="/books" method="POST">
    @csrf

    <input type="text" name="kode_buku" placeholder="Kode Buku"><br><br>
    <input type="text" name="judul" placeholder="Judul"><br><br>
    <input type="text" name="penulis" placeholder="Penulis"><br><br>
    <input type="text" name="penerbit" placeholder="Penerbit"><br><br>
    <input type="number" name="tahun" placeholder="Tahun"><br><br>
    <input type="number" name="stok" placeholder="Stok"><br><br>

    <button type="submit">Simpan</button>
</form>
