@extends('layouts.app')
@section('title', 'Data Anggota')

@section('content')

{{-- ALERT --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">👥 Data Anggota</h4>
    <a href="{{ route('members.create') }}" class="btn btn-primary">
        <i class="bi bi-person-plus"></i> Tambah Anggota
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>No HP</th>
                    <th width="140">Aksi</th>
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
                        {{-- EDIT --}}
                        <a href="{{ route('members.edit', $m->id) }}"
                           class="btn btn-warning btn-sm">
                           <i class="bi bi-pencil"></i>
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('members.destroy', $m->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin mau hapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
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
