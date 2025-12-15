<h1>Edit Anggota</h1>

<form action="/members/{{ $member->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $member->nama }}"><br><br>
    <input type="text" name="kelas" value="{{ $member->kelas }}"><br><br>
    <textarea name="alamat">{{ $member->alamat }}</textarea><br><br>
    <input type="text" name="no_hp" value="{{ $member->no_hp }}"><br><br>

    <button type="submit">Update</button>
</form>
