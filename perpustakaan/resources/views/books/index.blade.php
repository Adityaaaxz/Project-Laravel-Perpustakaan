@extends('layouts.app')
@section('title', 'Data Buku')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">📘 Data Buku</h4>
    <a href="/books/create" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Buku
    </a>
</div>

<!-- SEARCH -->
<form method="GET" action="/books" class="mb-3">
    <div class="input-group">
        <input type="text" name="search"
            class="form-control"
            placeholder="🔍 Cari judul atau penulis..."
            value="{{ $search ?? '' }}">
        <button class="btn btn-outline-primary">Cari</button>
    </div>
</form>

<!-- TABLE -->
<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th width="120">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td>
                        <span class="badge bg-{{ $b->stok > 0 ? 'success' : 'danger' }}">
                            {{ $b->stok }}
                        </span>
                    </td>
                    <td>
                        <a href="/books/{{ $b->id }}/edit"
                           class="btn btn-warning btn-sm">
                           <i class="bi bi-pencil"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-3">
                        📭 Data buku belum ada
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
