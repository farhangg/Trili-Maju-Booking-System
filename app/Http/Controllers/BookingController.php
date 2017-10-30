<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
namespace App\Http\Controllers\Auth;

class BookingController extends Controller
{

    public function book(Request $request){

        $username = Auth::user()->name;
        $container20 = $request->input('container20');
        $container40 = $request->input('container40'); 
        $date = $request->input('chosenDate');
        $totalcontainer = $request->input('containerTotal');
        $chosendate = date("Y/m/d");

        $data = array('username'=>$username,'container20'=>$container20,'container40'=>$container40,'totalcontainer'=>$totalcontainer,'chosendate'=> $chosendate,'status'=>'Accepted for processing');

        DB::table('booking')->insert($data);

    }
    
}
