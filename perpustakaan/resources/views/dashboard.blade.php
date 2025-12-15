@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<style>
    .stat-card {
        transition: all 0.3s ease;
        border-radius: 15px;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }

    .stat-icon {
        font-size: 40px;
        opacity: 0.8;
    }
</style>

<div class="row g-4">

    <div class="col-md-3">
        <div class="card stat-card shadow-sm border-0 bg-primary text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Buku</h6>
                    <h2 class="fw-bold">{{ $totalBuku }}</h2>
                </div>
                <i class="bi bi-book stat-icon"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm border-0 bg-success text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Anggota</h6>
                    <h2 class="fw-bold">{{ $totalAnggota }}</h2>
                </div>
                <i class="bi bi-people stat-icon"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm border-0 bg-warning text-dark">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Buku Dipinjam</h6>
                    <h2 class="fw-bold">{{ $dipinjam }}</h2>
                </div>
                <i class="bi bi-journal-arrow-up stat-icon"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm border-0 bg-danger text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Terlambat</h6>
                    <h2 class="fw-bold">{{ $terlambat }}</h2>
                </div>
                <i class="bi bi-exclamation-triangle stat-icon"></i>
            </div>
        </div>
    </div>

</div>

@endsection
