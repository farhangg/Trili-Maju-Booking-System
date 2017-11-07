<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
    use DB;
    use Auth;

class BookingController extends Controller
{

    public function book(Request $request){

        $booking = new Booking; 
        $booking->CompanyName =$request->input('CompanyName');
        $booking->Container20 =  $request->input("Container20");
        $booking->Container40 =$request->input("Container40");
        $booking->TotalContainer = "40";
        $booking->BookingReference = $request->input("BookingReference");
        $booking->Commodity = $request->input("Commodity");
        $booking->Liner =$request->input("Liner");
        $booking->VesselName = $request->input("VesselName");
        $booking->ChosenDate = $request->input("ChosenDate");
        $booking->VesselETA = $request->input("VesselETA");
        $booking->ClosingTime = $request->input("ClosingTime");
        $booking->PickUpDepot = $request->input("PickUpDepot");
        $booking->ContainerNo = $request->input("ContainerNo");
        $booking->Remarks = $request->input("Remarks");
        $booking->Status = "Booking in process";

        $booking->save();

        return ("Booking save into database");
    }
    
}
