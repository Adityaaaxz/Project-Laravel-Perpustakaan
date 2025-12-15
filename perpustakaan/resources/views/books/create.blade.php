<h1>Tambah Buku</h1>

<form action="/books" method="POST" class="add-book-form">
    @csrf

    <input type="text" name="kode_buku" placeholder="Kode Buku">
    <input type="text" name="judul" placeholder="Judul">
    <input type="text" name="penulis" placeholder="Penulis">
    <input type="text" name="penerbit" placeholder="Penerbit">
    <input type="number" name="tahun" placeholder="Tahun">
    <input type="number" name="stok" placeholder="Stok">

    <button type="submit">Simpan</button>
</form>

<style>
.add-book-form {
    max-width: 450px;
    margin: 30px auto;
    padding: 25px;
    background-color: #f8f9fa;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
    font-family: Arial, sans-serif;
}

.add-book-form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.add-book-form input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
    outline: none;
}

.add-book-form button {
    padding: 12px;
    background-color: #007bff;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.add-book-form button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}
</style>
