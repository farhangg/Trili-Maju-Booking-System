<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Mail\Mailer;

use App\Booking;
    use DB;
    use Auth;

use App\Mail\MyMail;

class BookingController extends Controller
{

    public function book(Request $request, Mailer $mailer){

        $booking = new Booking;
        $booking->Username = Auth::user()->name;
        $booking->Email = Auth::user()->email;
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

        $mailer
        ->to($request->input('mail'))
        ->send(new \App\Mail\MyMail($request->input('BookingReference')));

        return ("Booking save into database and email has been sent to you");
    }
    
}
