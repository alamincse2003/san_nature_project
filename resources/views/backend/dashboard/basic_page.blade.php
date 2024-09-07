@extends('backend.layouts.master')
@section('title','Dashboard')
@section('basicPage','active')
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('') }}/app-assets/css/pages/page-knowledge-base.css">
@endsection
@section('mainContent')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Home</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><i class="bx bx-home-alt"></i>
                        </li>
                        <li class="breadcrumb-item">Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <section class="kb-search">
        <div class="alert alert-info alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center">
                <i class="bx bx-like"></i>
                <span>
                 Hello {{ auth()->user()->name }}, Welcome to {{ $settings->app_name }}
            </span>
            </div>
        </div>

    </section>
</div>
@endsection
@section('pageJS')
<script src="{{ asset('') }}/app-assets/js/scripts/pages/page-knowledge-base.js"></script>
@endsection
