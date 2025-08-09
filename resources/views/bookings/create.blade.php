@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4>Tambah Booking</h4>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
      </div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama Ruangan</label>
        <select name="room_id" class="form-select" required>
          <option value="">-- Pilih Ruangan --</option>
          <option value="1" {{ old('room_id') == 1 ? 'selected' : '' }}>Ruang Bayi</option>
          <option value="2" {{ old('room_id') == 2 ? 'selected' : '' }}>Ruang Meeting</option>
          <option value="3" {{ old('room_id') == 3 ? 'selected' : '' }}>Ruang Meeting 1</option>
          <option value="4" {{ old('room_id') == 4 ? 'selected' : '' }}>Ruang Seminar</option>
          <option value="5" {{ old('room_id') == 5 ? 'selected' : '' }}>Ruang Kelas</option>
          <!-- tambahkan ruangan lain sesuai kebutuhan -->
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Nama Pengguna</label>
        <input type="text" name="nama_pengguna" value="{{ old('nama_pengguna') }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Keperluan</label>
        <input type="text" name="keperluan" value="{{ old('keperluan') }}" class="form-control" required>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Mulai</label>
          <input type="datetime-local" name="mulai" value="{{ old('mulai') }}" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Selesai</label>
          <input type="datetime-local" name="selesai" value="{{ old('selesai') }}" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
          <option value="pending" {{ old('status')=='pending' ? 'selected' : '' }}>Pending</option>
          <option value="approved" {{ old('status')=='approved' ? 'selected' : '' }}>Approved</option>
          <option value="rejected" {{ old('status')=='rejected' ? 'selected' : '' }}>Rejected</option>
        </select>
      </div>

      <button class="btn btn-brand">Simpan</button>
      <a href="{{ route('bookings.index') }}" class="btn btn-outline-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
