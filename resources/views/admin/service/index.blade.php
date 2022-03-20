@extends('layouts.admin')

@section('styles')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('title')
All Services Request 
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">All Services Request
            </h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Email</th>
                    <th>Message</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach (App\Service::all() as $key => $service)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$service->service_name}}</td>
                    <td><a href="mailto:{{$service->email}}">{{$service->email}}</a></td>
                    <td>{{$service->message}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--end: Datatable-->
    </div>
</div>
{{-- COMMENT AREA --}}

@endsection
@section('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->

@endsection