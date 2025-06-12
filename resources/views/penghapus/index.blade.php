@extends('layout')

@section('content')
<h2>Data Penghapus</h2>
<a href="{{ route('penghapus.create') }}" class="btn btn-primary mb-2">+ Tambah Penghapus Baru</a>

<form method="GET" action="{{ route('penghapus.index') }}" class="mb-3">
    <input type="text" name="cari" placeholder="Cari Penghapus..." value="{{ request('cari') }}">
    <button type="submit" class="btn btn-secondary">Cari</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->merkpenghapus }}</td>
            <td>{{ $item->hargapenghapus }}</td>
            <td>{{ $item->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $item->berat }} gr</td>
            <td>
                <a href="{{ route('penghapus.edit', $item->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('penghapus.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection
