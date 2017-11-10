<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Booking;

class adminController extends Controller
{
      public function index(Request $request)
    {


            $booking = new Booking; 
            $bookings = $booking::all(); 
         
            return view('adminPage.adminview', compact('bookings'));
         
            //kena guna salah satu yg bawah      
            //return view('adminPage.adminview', $bookings);
            //return view('adminPage.adminview', compact('bookings'));
    }


}
