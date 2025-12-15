<h1>Tambah Anggota</h1>

<form action="/members" method="POST" class="member-form">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="kelas" placeholder="Kelas">
    <textarea name="alamat" placeholder="Alamat"></textarea>
    <input type="text" name="no_hp" placeholder="No HP">

    <button type="submit">Simpan</button>
</form>

<style>
.member-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 25px;
    background-color: #fefefe;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
    font-family: Arial, sans-serif;
}

.member-form input,
.member-form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border 0.3s, box-shadow 0.3s;
}

.member-form input:focus,
.member-form textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
    outline: none;
}

.member-form textarea {
    resize: vertical;
    min-height: 80px;
}

.member-form button {
    padding: 12px;
    background-color: #28a745;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.member-form button:hover {
    background-color: #218838;
}
</style>
