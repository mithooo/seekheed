@extends('layouts.class')
@section('styles')
<link rel="stylesheet" href="{{ asset('public/chart/reports.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-2">
        <!--begin: Stats Widget 19-->
       
        <!--end: Stats:Widget 19-->
    </div>
    <div class="col-md-8">
        {!! $chart !!}
    </div>
    <div class="col-md-2">
        <!--begin::Stats Widget 21-->
       
        <!--end::Stats Widget 21-->
    </div>
    
</div>
@endsection