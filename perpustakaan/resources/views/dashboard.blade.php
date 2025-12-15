@extends('layouts.app')

@section('content')
<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5>Total Buku</h5>
                <h2>{{ $totalBooks }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5>Total Anggota</h5>
                <h2>{{ $totalMembers }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h5>Buku Dipinjam</h5>
                <h2>{{ $borrowedBooks }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
