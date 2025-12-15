<h1>Edit Anggota</h1>

<form action="/members/{{ $member->id }}" method="POST" class="edit-member-form">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $member->nama }}">
    <input type="text" name="kelas" value="{{ $member->kelas }}">
    <textarea name="alamat">{{ $member->alamat }}</textarea>
    <input type="text" name="no_hp" value="{{ $member->no_hp }}">

    <button type="submit">Update</button>
</form>

<style>
.edit-member-form {
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

.edit-member-form input,
.edit-member-form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border 0.3s, box-shadow 0.3s;
}

.edit-member-form input:focus,
.edit-member-form textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
    outline: none;
}

.edit-member-form textarea {
    resize: vertical;
    min-height: 80px;
}

.edit-member-form button {
    padding: 12px;
    background-color: #ffc107; /* warna kuning untuk edit */
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.edit-member-form button:hover {
    background-color: #e0a800;
}
</style>
