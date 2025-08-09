<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;

class BookingController extends Controller
{
    // optional middleware auth
    // public function __construct() { $this->middleware('auth'); }

    public function index()
    {
        $bookings = Booking::with('room')->orderBy('created_at','desc')->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::orderBy('name')->get();
        return view('bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'nama_pengguna' => 'required|string|max:255',
            'keperluan' => 'required|string|max:500',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        Booking::create($validated);

        return redirect()->route('bookings.index')->with('success','Booking berhasil disimpan.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $rooms = Room::orderBy('name')->get();
        return view('bookings.edit', compact('booking','rooms'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'nama_pengguna' => 'required|string|max:255',
            'keperluan' => 'required|string|max:500',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $booking->update($validated);
        return redirect()->route('bookings.index')->with('success','Booking diperbarui.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success','Booking dihapus.');
    }
}
