@extends('layouts.app')

@section('content')
<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3 shadow-sm">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-book-fill me-3" style="font-size: 2.5rem;"></i>
                <div>
                    <h5>Total Buku</h5>
                    <h2>{{ $totalBooks }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-success mb-3 shadow-sm">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-people-fill me-3" style="font-size: 2.5rem;"></i>
                <div>
                    <h5>Total Anggota</h5>
                    <h2>{{ $totalMembers }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-warning mb-3 shadow-sm">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-journal-check me-3" style="font-size: 2.5rem;"></i>
                <div>
                    <h5>Buku Dipinjam</h5>
                    <h2>{{ $borrowedBooks }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.card-body {
    transition: transform 0.3s, box-shadow 0.3s;
}
.card-body:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
</style>
@endpush
