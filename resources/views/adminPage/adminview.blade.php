@extends('layouts.app')


<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><a href="/booking/view">Admin View Boooking</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</div>

@section('content')
<div class="container">

@foreach ($bookings as $booking)<br>
<br>
<br>
<br>

    <p>booking id {{ $booking->id }}</p>

    <p>Status {{ $booking->Status }}</p>

    <p>Booking Reference {{ $booking->BookingReference}}</p> 

    
@endforeach

</div>
@endsection

<script>

</script>
