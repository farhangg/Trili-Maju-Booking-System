<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use DB;
    use Auth;

class BookingController extends Controller
{

    public function book(Request $request){

        $Username = Auth::user()->name;
        $Email = Auth::user()->email;
        $CompanyName = $request->input('CompanyName');
        $Container20 = $request->input('Container20');
        $Container40 = $request->input('Container40');
        $BookingReference = $request->input('BookingReference');
        $Commodity = $request->input('Commodity');
        $Liner = $request->input('Liner');
        $VesselName = $request->input('VesselName');   
        $VesselETA = $request->input('VesselETA'); 
        $date = $request->input('chosenDate');
        $PickUpDepot = $request->input('PickUpDepot');
        $ContainerNo = $request->input('ContainerNo');
        $Remarks = $request->input('Remarks');
        $totalcontainer = $request->input('containerTotal');
        $chosendate = date("Y/m/d");

        $created_at = date("Y-m-d H:i:s");

        $data = array('Username'=>$Username, 'Email'=>$Email, 'CompanyName'=>$CompanyName,'Container20'=>$Container20,'Container40'=>$Container40, 'BookingReference'=>$BookingReference, 
        'Commodity'=>$Commodity, 'Liner'=>$Liner, 'VesselName'=>$VesselName, 'VesselETA'=>$VesselETA,'TotalContainer'=>'Total','chosendate'=> $chosendate,
        'ClosingTime'=>$ClosingTime, 'PickUpDepot'=>$PickUpDepot, 'ContainerNo'=>$ContainerNo, 'Remarks'=>$Remarks, 'created_at'=>$created_at, 'status'=>'Accepted for processing');

        DB::table('booking')->insert($data);
    }
    
}