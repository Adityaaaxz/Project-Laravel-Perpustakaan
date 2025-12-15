@extends('layouts.app')
@section('title', 'Data Anggota')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">👥 Data Anggota</h4>
    <a href="/members/create" class="btn btn-primary">
        <i class="bi bi-person-plus"></i> Tambah Anggota
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>No HP</th>
                    <th width="120">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($members as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>
                        <span class="badge bg-info text-dark">
                            {{ $m->kelas }}
                        </span>
                    </td>
                    <td>{{ $m->no_hp }}</td>
                    <td>
                        <a href="/members/{{ $m->id }}/edit"
                           class="btn btn-warning btn-sm">
                           <i class="bi bi-pencil"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-3">
                        📭 Data anggota belum ada
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
