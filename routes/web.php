<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/booking/insert','BookingController@book');

Route::get('/booking/adminViewBooking','adminController@index');

//Route::post('/sendmail',function (\Illuminate\Http\Request $request,
//\Illuminate\Mail\Mailer $mailer){
//   $mailer
//        ->to($request->input('mail'))
//        ->send(new \App\Mail\MyMail($request->input('title')));
//   return redirect()->back();
//})->name('sendmail');