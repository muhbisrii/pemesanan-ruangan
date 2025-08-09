@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nama_pengguna">Nama Pengguna</label>
            <input type="text" name="nama_pengguna" class="form-control" 
                   value="{{ old('nama_pengguna', $booking->nama_pengguna) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="tanggal_booking">Tanggal Booking</label>
            <input type="date" name="tanggal_booking" class="form-control" 
                   value="{{ old('tanggal_booking', $booking->tanggal_booking) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $booking->deskripsi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
