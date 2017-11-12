@extends('layouts.app')

<link href="{{ asset('demo/default/base/style.bundle.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #262734;color:white;">Online Booking Form</div>
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
                        
                        <div class="row">
                        	<div class="col-md-6">
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">Company Name : <span style="color:red;">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control m-input m-input--solid" name="CompanyName">
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">Booking Reference : <span style="color:red;">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control m-input m-input--solid" name="BookingReference">                      
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label for="container20" class="col-md-5 control-label">20-ft Container</label>  
                                <div class="col-md-7">
                                    <input onkeyup="totalContainer()" onchange="totalContainer()" id="Container20" type="number" class="form-control m-input m-input--solid" name="Container20">
                                </div>
                            </div>
      
                           <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">40-ft Container</label>
                                <div class="col-md-7">
                                    <input onkeyup="totalContainer()" onchange="totalContainer()" id="Container40" type="number" class="form-control m-input m-input--solid" name="Container40">
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">Total Container</label>
                                <div class="col-md-7">
                                 <input readonly id="total" type="number" class="form-control m-input m-input--solid" name="Container40">
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">Commodity : <span style="color:red;">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control m-input m-input--solid" name="Commodity">
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-5 control-label">Liner : <span style="color:red;">*</span></label>
                                <div class="col-md-7">
                                    <select class="form-control m-input m-input--solid" name="Liner">
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
                                <label class="col-md-5 control-label">Vessel Name : <span style="color:red;">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control m-input m-input--solid" name="VesselName">
                                </div>
                            </div>
                            </div>
    						<div class="col-md-6">
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-4 control-label">Vessel ETA PEN : <span style="color:red;">*</span></label>
                                <div class="col-md-8">
                                    <div class='input-group date' id='m_datepicker_3'>
									<input type='text' name="VesselETA" class="form-control m-input m-input--solid" readonly />
										<span class="input-group-addon">
											<i class="la la-calendar"></i>
										</span>
									</div>
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-4 control-label">Closing Time : <span style="color:red;">*</span></label>
                                <div class="col-md-8">
									<div class='input-group timepicker' id='m_timepicker_2'>
										<input type='text' name="ClosingTime" class="form-control m-input m-input--solid" readonly placeholder="Select time"/>
										<span class="input-group-addon">
											<i class="la la-clock-o"></i>
										</span>
									</div>
                                </div>
                            </div>
    
                             <div style='padding-bottom: 50px;'>
                                <label class="col-md-4 control-label">Date</label>                              
                                <div class="col-md-4">
                                    <div class='input-group date' id='m_datepicker_3'>
									<input type='text' name="ChosenDate" onchange="ajaxCheckAvailability()" id="ChosenDate" class="form-control m-input m-input--solid" readonly />
										<span class="input-group-addon">
											<i class="la la-calendar"></i>
										</span>
									</div>
                                </div>
                                <div class="col-md-4">
                                 <button value="checkAvailability">Check Availability </button>
                                </div>
                            </div>

                            <div style='padding-bottom: 50px;' id="dateAvailability">
                                <label class="col-md-4 control-label"></label>
                                <div id='slotAvailabilityMessage' class="col-md-6" style="visibility: hidden">
                                    <p id='slotMsg' style="color:green">Train is available. Please proceed!</p>
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-4 control-label">Pick-up Depot : <span style="color:red;">*</span></label>
                                <div class="col-md-8">
                                    <select class="form-control m-input m-input--solid" name="PickUpDepot">
                                       <option value="test">test</option>
                                       <option value="test">test</option>
                                      <option value="test">test</option>
                                      <option value="test">test</option>
                                    </select>
                                </div>
                            </div>
    
                            <div style='padding-bottom: 50px;'>
                                <label class="col-md-4 control-label">Container No</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control m-input m-input--solid" name="ContainerNo">
                                </div>
                            </div>
    
                            <div style='padding-bottom: 100px;'>
                                <label class="col-md-4 control-label">Remarks</label>
                                <div class="col-md-8">
                                    <textarea class="form-control m-input m-input--solid" name="Remarks"></textarea>
                                </div>
                            </div>
                            </div>
    						</div>
                            <div class="form-group" style='margin-top: 10px;'>                      	
                                <div class="col-md-12 text-center">                                  
                                    <button type="submit" class="btn m-btn--pill btn-info">
                                        Submit
                                    </button> 
                                 	<button type="reset" class="btn m-btn--pill btn-danger">
                                        Clear Form
                                    </button>    
                                    <button type="print" class="btn m-btn--pill pull-right">
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

    function ajaxCheckAvailability() {
        var bookingDate = $('#ChosenDate').val();
        var total = $('#total').val();
        console.log($('#ChosenDate').val());
        $.ajax({
            type: "GET",
            url: '/booking/checkAvailability',
            dataType: 'json',
            data: { date: bookingDate, slot: total },
            success: function (data) {
                $("#ajaxResponse").append("<div>" + data + "</div>");
                console.log(data.response);
                var x = document.getElementById('slotAvailabilityMessage');

                if (data.response == 'yes') {
                    $("#slotMsg").text("Train is available, you may proceed!");
                    document.getElementById("slotMsg").style.color = "green";
                    x.style.visibility = 'visible';
                } else {
                    document.getElementById("slotMsg").style.color = "red";
                    $("#slotMsg").text("Sorry, please find another slot");
                    x.style.visibility = 'visible';
                }

            }
        });
    }
</script>
<script src="vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="demo/demo2/base/scripts.bundle.js" type="text/javascript"></script>
<script src="{{ asset('demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('demo/default/custom/components/forms/widgets/bootstrap-timepicker.js') }}" type="text/javascript"></script>
@endsection
