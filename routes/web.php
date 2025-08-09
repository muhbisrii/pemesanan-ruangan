<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

require __DIR__.'/api.php';  // tambah ini supaya routes/api.php terbaca

Route::resource('bookings', BookingController::class);

Route::get('/', function(){ 
    return redirect()->route('bookings.index'); 
});


