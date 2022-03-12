@extends('layouts.admin')

@section('title')
Event
@endsection

@section('styles')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom  example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Create Event</h3>
                    </div>
                    <!--begin::Form-->
                    <form class="form" action="{{route('admin.event.store')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">                               
                                <div class="col-lg-4">
                                    <label>Event Title:</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Enter Event Title" required />
                                </div>
                      
                                <div class="col-lg-4">
                                    <label> Start Date:</label>
                                    <input type="date" name="start_date" 
                                        class="form-control"  required />
                                </div>
                                <div class="col-lg-4">
                                    <label>End Date:</label>
                                    <input type="date" name="end_date" class="form-control" required />
                                </div>
                            </div>
                
                           

                        </div>
                        <div class="card-footer">
                            <div class="float-right pb-5">
                                <button type="submit" class="btn font-weight-bold btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn font-weight-bold btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>

        </div>

    </div>
</div>




@endsection

@section('scripts')

<script>
    var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };
</script>
<!--end::Global Config-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/forms/widgets/form-repeater.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->

@endsection