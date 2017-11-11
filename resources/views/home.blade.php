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
                    <form id="firstform" class="form-horizontal" method="POST" action="/booking/insert">
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
                                <input class="form-control" type="hidden" name="mail" value=<?php echo Auth::user()->email; ?>>
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label for="container20" class="col-md-4 control-label">20-ft Container</label>

                            <!--{{ Auth::user()->name }} -->

                            <div class="col-md-6">
                                <input onkeyup="totalContainer()" onchange="totalContainer()" id="Container20" type="number" class="form-control" name="Container20">
                            </div>
                        </div>
  
                       <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">40-ft Container</label>
                            <div class="col-md-6">
                                <input onkeyup="totalContainer()" onchange="totalContainer()" id="Container40" type="number" class="form-control" name="Container40">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Total Container</label>
                            <div class="col-md-6">
                             <input readonly id="total" type="number" class="form-control" name="Container40">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Commodity*</label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Please Specify e.g: Pallet" class="form-control" name="Commodity">
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">Liner*</label>
                            <div class="col-md-6">
                                <select class="form-control" name="Liner">
                                   <option value="BENLINE">BENLINE</option>
                                   <option value="CMA-CGIV">CMA-CGIV</option>
                                  <option value="COSCO">COSCO</option>
                                  <option value="GPA/EMC">GPA/EMC</option>
                                   <option value="HAPAG-LL">HAPAG-LL</option>
                                   <option value="HEUNG-A">HEUNG-A</option>
                                  <option value="HMM">HMM</option>
                                  <option value="IAL">IAL</option>
                                  <option value="IRISL">IRISL</option>
                                   <option value="KLINE">KLINE</option>
                                  <option value="KMTC">KMTC</option>
                                  <option value="MAERSK">MAERSK</option>
                                   <option value="MAXICON">MAXICON</option>
                                   <option value="MITSUI">MITSUI</option>
                                  <option value="MSC">MSC</option>
                                  <option value="MTT">MTT</option>
                                  <option value="NYK">NYK</option>
                                  <option value="OOCL">OOCL</option>
                                  <option value="PIL">PIL</option>
                                  <option value="SHIN YAN">SHIN YAN</option>
                                   <option value="SINOKOR">SINOKOR</option>
                                  <option value="KMTC">KMTC</option>
                                  <option value="TSL">TSL</option>
                                   <option value="WHAI">WHAI</option>
                                   <option value="YML">YML</option>
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
                            <label class="col-md-4 control-label">Train Date</label>
                            <div class="col-md-6">
                                 <input onchange="ajaxCheckAvailability()" type="date" id="ChosenDate" name="ChosenDate">
                                <button type="button" value="checkAvailability">Check Availability</button>
                            </div>
                        </div>

                        <div style='padding-bottom: 50px;' id="dateAvailability">
                        <label class="col-md-4 control-label"></label>
                        <div id='slotAvailabilityMessage' class="col-md-6" style="visibility: hidden">
                              <p id='slotMsg' style="color:green">Train is available. Please proceed!</p>  
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
                                <button type="reset" class="btn btn-primary">
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

<script>
   function totalContainer() {
    var c20 = document.getElementById("Container20").value * 20;
    var c40 = document.getElementById("Container40").value * 40;

    console.log(c20 + '= 20-Container');
     console.log(c40 + '= 40-Container');

     document.getElementById('ChosenDate').value = '';
     var s = document.getElementById("total");
            s.value = c20 + c40;
}

function ajaxCheckAvailability(){
        var bookingDate = $('#ChosenDate').val();
        var total = $('#total').val();
         console.log($('#ChosenDate').val());
        $.ajax({
            type: "GET",
            url:'/booking/checkAvailability',
            dataType: 'json', 
            data: {date: bookingDate,slot: total},
            success: function( data ) {
                $("#ajaxResponse").append("<div>"+data+"</div>");
                console.log(data.response);
                var x = document.getElementById('slotAvailabilityMessage');

                if (data.response == 'yes'){
                    $("#slotMsg").text("Train is available, you may proceed!");
                    document.getElementById("slotMsg").style.color = "green";
                    x.style.visibility = 'visible';
                }else{
                    document.getElementById("slotMsg").style.color = "red";
                    $("#slotMsg").text("Sorry, please find another slot");
                    x.style.visibility = 'visible';
                }
                
            }
        });
    
}
</script>

@endsection