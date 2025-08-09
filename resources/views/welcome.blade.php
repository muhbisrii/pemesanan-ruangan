@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1 class="mb-4">Selamat Datang di Aplikasi Pemesanan Ruangan</h1>
    <p class="lead">Kelola pemesanan ruangan dengan mudah, cepat, dan tampilan merah elegan.</p>
    <a href="{{ route('bookings.index') }}" class="btn btn-primary btn-lg mt-3">Lihat Daftar Pemesanan</a>
</div>
@endsection
