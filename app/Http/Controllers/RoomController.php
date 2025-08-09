<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // pastikan model Room ada

class RoomController extends Controller
{
    public function store(Request $request)
    {
        // validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            // tambahkan field sesuai kebutuhan
        ]);

        // simpan ke database
        $room = Room::create($validated);

        return response()->json(['success' => true, 'room' => $room], 201);
    }
}
