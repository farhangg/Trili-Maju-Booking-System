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
                    <div>
                            <label for="container20" class="col-md-4 control-label">20-ft Container</label>

                            <!--{{ Auth::user()->name }} -->

                            <div class="col-md-6">
                                <input id="email" class="form-control" name="container20">
                            </div>
                            </div>
  
                       <div style='padding-bottom: 50px;'>
                            <label class="col-md-4 control-label">40-ft Container</label>
                            <div class="col-md-6">
                                <input type="container20" class="form-control" name="container40">
                            </div>
                        </div>

                         <div>
                            <label class="col-md-4 control-label">Total</label>
                            <div class="col-md-6">
                                <input class="form-control" name="containerTotal">
                            </div>
                        </div>

                         <div>
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-6">
                                 <input type="date" name="chosenDate">
                                <button value="checkAvailability">Check Availability </button>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Book
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
