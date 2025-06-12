@extends('layout')

@section('content')
<h2>Tambah Data Penghapus</h2>
<form action="{{ route('penghapus.store') }}" method="POST">
    @csrf
    <div>
        <label>Merk:</label>
        <input type="text" name="merkpenghapus" required>
    </div>
    <div>
        <label>Harga:</label>
        <input type="number" name="hargapenghapus" required>
    </div>
    <div>
        <label>Tersedia:</label>
        <select name="tersedia">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
    <div>
        <label>Berat (gram):</label>
        <input type="text" name="berat" required>
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
