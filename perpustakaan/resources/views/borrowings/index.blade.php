@extends('layouts.app')
@section('title', 'Data Peminjaman')

@section('content')

{{-- ALERT --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">📄 Data Peminjaman</h4>
    <a href="{{ route('borrowings.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Pinjam Buku
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Anggota</th>
                    <th>Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th width="170">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($borrowings as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->member->nama }}</td>
                    <td>{{ $b->book->judul }}</td>
                    <td>{{ \Carbon\Carbon::parse($b->tanggal_pinjam)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($b->tanggal_kembali)->format('d-m-Y') }}</td>
                    <td>
                        @php
                            $terlambat = $b->status === 'dipinjam' && now()->gt($b->tanggal_kembali);
                        @endphp

                        @if($b->status === 'kembali')
                            <span class="badge bg-success">Dikembalikan</span>
                        @elseif($terlambat)
                            <span class="badge bg-danger">Terlambat</span>
                        @else
                            <span class="badge bg-warning text-dark">Dipinjam</span>
                        @endif
                    </td>

                    <td>
                        {{-- KEMBALIKAN --}}
                        @if($b->status === 'dipinjam')
                        <form action="{{ route('borrowings.kembali', $b->id) }}"
                              method="POST"
                              class="mb-1">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success btn-sm w-100">
                                <i class="bi bi-check-circle"></i> Kembalikan
                            </button>
                        </form>
                        @endif

                        {{-- DELETE --}}
                        <form action="{{ route('borrowings.destroy', $b->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin mau hapus data peminjaman ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm w-100">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-3">
                        📭 Data peminjaman belum ada
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
