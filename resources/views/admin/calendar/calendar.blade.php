@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<style>
    .panel-body{
        background-color: darkgoldenrod !important;
    }
</style>
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">All Books
            </h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <div class="panel panel-default">

            <div class="panel-body">
                {!! $calendar->calendar() !!}
            </div>
        </div>

        <!--end: Datatable-->
    </div>
</div>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection