@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Booking</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama Pengguna:</strong> {{ $booking->nama_pengguna }}</p>
            <p><strong>Tanggal Booking:</strong> {{ $booking->tanggal_booking }}</p>
            <p><strong>Deskripsi:</strong> {{ $booking->deskripsi }}</p>
        </div>
    </div>

    <a href="{{ route('bookings.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
