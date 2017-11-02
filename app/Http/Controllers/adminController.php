<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
      public function index(Request $request)
    {


       $users = DB::table('booking')->select('*')->get();

       // return view('adminPage.adminview', [$users]);

        return view('adminPage.adminview', $users);

        //return $users;
    }


}
