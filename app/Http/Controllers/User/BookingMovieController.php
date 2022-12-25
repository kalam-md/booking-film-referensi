<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\ScheduleMovie;
use App\Models\Seat;
use Illuminate\Support\Facades\DB;

class BookingMovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function booking($id)
    {
        // $selected = DB::table('bookings')->select('seat_name')->get();
        $string = Booking::pluck('seat_name')->toArray();
        $array = reset($string);
        $selected = explode(',', $array);
        // dd($selected);

        return view('dashboard-user.booking.booking', [
            'booking' => ScheduleMovie::find($id),
            'seats' => Seat::all(),
            'selected' => $selected
        ]);
    }

    public function bookingStore(Request $request)
    {
        $validatedData = $request->validate([
            'schedule_id' => 'required',
            'seat_name' => 'required',
            'total_price' => 'required',
        ]);

        // dd($validatedData);

        Booking::create($validatedData);

        return redirect('/dashboard-user/movies')->with('success', 'Successfully Booking!');
    }
}
