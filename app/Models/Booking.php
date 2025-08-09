<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'nama_pengguna',
        'keperluan',
        'mulai',
        'selesai',
        'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
