<h1>Tambah Anggota</h1>

<form action="/members" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="kelas" placeholder="Kelas"><br><br>
    <textarea name="alamat" placeholder="Alamat"></textarea><br><br>
    <input type="text" name="no_hp" placeholder="No HP"><br><br>

    <button type="submit">Simpan</button>
</form>
