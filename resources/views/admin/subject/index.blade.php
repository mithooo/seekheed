@extends('layouts.admin')

@section('title')
    Subject
@endsection

@section('styles')
<link href="{{asset('public/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b  example-compact">
            <div class="card-header">
                <h3 class="card-title">Add New Subject</h3>
            </div>
            <!--begin::Form-->
            <form class="form" action="{{route('admin.subject.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-8">
                            <label>Subject Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Subject Name" required />

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label">All Subjects</h3>
                </div>

            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as$key=>$subject)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$subject->name}}</td>
                            <td><button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#edit_modal"
                                    name="{{$subject->name}}" id="{{$subject->id}}">Edit</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>



<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Subject</h5>

            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name"
                            required />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('public/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('public/assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->
<script>
    $(document).ready(function(){
                $('body').on('click', '.edit-btn', function(){
                    let name = this.name;
                    let id = $(this).attr('id');
                    $('#name').val(name);
                    $('#id').val(id);
                    $('#updateForm').attr('action','{{route('admin.subject.update','')}}' +'/'+id);
                });
        
                
            });
</script>

@endsection