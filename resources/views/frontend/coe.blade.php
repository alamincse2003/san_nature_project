@extends('frontend.layouts.master')
@section('title','COE Page')
@section('coe','active')
@section('content')
    <section class="container mt-5">
        @php
            $coe = App\Models\coe::get()->first();
        @endphp
        <div>
            <p>{!! $coe->content !!}</p>
        </div>
    </section>
@endsection
