@extends('frontend.layouts.master')
@section('title','Carrer Page')
@section('carrer','active')
@section('content')
    <section class="container">
        <div class="container">
            <h2 class="text-center carrer_heading">Why Work With Us?</h2>
            <p>We are a global leader in [Industry], committed to innovation and excellence. Our employees are our greatest
                asset, and we strive to provide a supportive and inclusive environment where everyone can thrive.</p>
        </div>
        <h2 class="text-center carrer_heading">Current Openings</h2>
        <div>
            <h3 class="carrer_title"><a href="{{ route('carrier-details') }}">Software Engineer</a></h3>
        </div>
    </section>
@endsection
