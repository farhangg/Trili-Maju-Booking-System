@extends('layouts.app')


<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><a href="/booking/adminViewBooking">Admin View Boooking</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</div>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/booking/insert">
                        {{ csrf_field() }}

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Company Name*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="CompanyName">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Booking Reference*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="BookingReference">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label for="container20" class="col-md-4 control-label">20-ft Container</label>

                            <!--{{ Auth::user()->name }} -->

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="container20">
                            </div>
                        </div>
  
                       <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">40-ft Container</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="container40">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Total Container</label>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Commodity*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Commodity">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Liner*</label>
                            <div class="col-md-6">
                                <select class="form-control" name="Liner">
                                   <option value="test">test</option>
                                   <option value="test">test</option>
                                  <option value="test">test</option>
                                  <option value="test">test</option>
                                </select>
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Vessel Name*</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="VesselName">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Vessel ETA PEN*</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="VesselETA">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Closing Time*</label>
                            <div class="col-md-6">
                                 <input type="time" name="ClosingTime">
                            </div>
                        </div>

                         <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-6">
                                 <input type="date" name="ChosenDate">
                                <button value="checkAvailability">Check Availability </button>
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Pick-up Depot*</label>
                            <div class="col-md-6">
                                <select class="form-control" name="PickUpDepot">
                                   <option value="test">test</option>
                                   <option value="test">test</option>
                                  <option value="test">test</option>
                                  <option value="test">test</option>
                                </select>
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Container No</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ContainerNo">
                            </div>
                        </div>

                        <div style='padding-bottom: 100px;'>
                            <label class="col-md-4 control-label">Remarks</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button> 
                                <button type="Clear" class="btn btn-primary">
                                    Clear Form
                                </button> 
                                <button type="Print" class="btn btn-primary">
                                    Print
                                </button> 
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
