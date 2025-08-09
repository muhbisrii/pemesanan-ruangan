@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="mb-0">Daftar Booking Ruangan</h3>
      <a href="{{ route('bookings.create') }}" class="btn btn-brand">+ Tambah Booking</a>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Ruangan</th>
          <th>Nama Pengguna</th>
          <th>Keperluan</th>
          <th>Mulai</th>
          <th>Selesai</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($bookings as $b)
        <tr>
          <td>{{ $b->id }}</td>
          <td>{{ $b->room->name ?? '-' }}</td>
          <td>{{ $b->nama_pengguna }}</td>
          <td>{{ $b->keperluan }}</td>
          <td>{{ \Carbon\Carbon::parse($b->mulai)->format('Y-m-d H:i') }}</td>
          <td>{{ \Carbon\Carbon::parse($b->selesai)->format('Y-m-d H:i') }}</td>
          <td><span class="badge bg-secondary text-white">{{ ucfirst($b->status) }}</span></td>
          <td>
            <a href="{{ route('bookings.edit',$b) }}" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="{{ route('bookings.destroy',$b) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Hapus</button>
            </form>
          </td>
        </tr>
        @empty
        <tr><td colspan="8" class="text-center">Belum ada booking.</td></tr>
        @endforelse
      </tbody>
    </table>

    {{ $bookings->links() }}
  </div>
</div>
@endsection
