@extends('layouts.admin')

@section('styles')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('title')
All Books
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
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>File</th>
                    <th>Action</th>   
                    <th>Action</th>
                    <th class="d-none">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $key => $book)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="{{$book->image}}" height="80px" width="80px" alt=""></td>
                    <td>{{$book->subject->name}}</td>
                    <td>{{$book->title}}</td>
                   
                    <td><a href="{{route('get_file',$book->file)}}" target="_blank" class="btn btn-info">Book</a></td>

                    <td><button class="btn btn-success edit-btn" data-toggle="modal" data-target="#edit_modal"
                            subject_id="{{$book->subject_id}}" title="{{$book->title}}"
                            image="{{$book->image}}" $file="{{$book->file}}"  id="{{$book->id}}">Edit</button></td>
                    <td>
                        <button class="delete-btn btn btn-danger" data-toggle="modal" data-target="#delete_modal"
                            id="{{$book->id}}">Delete</button>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--end: Datatable-->
    </div>
</div>
{{-- COMMENT AREA --}}
<div id="edit_modal" class="modal fade">

    <div class="modal-dialog">
        <form method="POST" id="form_id" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0 txt4" id="myModalLabel">Update Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Book Subject:</label>
                            <select name="subject_id" id="" class="form-control" required>
                                @foreach (App\Subject::all() as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Book Title:</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Enter Book Title" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Book Image:</label>
                            <input type="file" id="image" name="image" accept="image/jpeg,image/gif,image/png,"
                                class="form-control" placeholder="" />
                        </div>
                        <div class="col-lg-6">
                            <label>Book File:</label>
                            <input type="file" id="file" name="file" accept="application/pdf" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Book</h5>
            </div>
            <div class="modal-body">
                <form id="deleteForm" method="POST" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf
                    <label for="" class="text-danger"> Are you sure you want to delete ? </label>
                    <input type="hidden" name="id" id="del_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->
<script>
    $(document).ready(function() {
        $('body').on('click', '.edit-btn', function() {
            let id = this.id;
            $('#form_id').attr('action','{{route('admin.book.update','')}}' +'/'+id);
            let cat_id = $(this).attr('subject_id');
            let title = $(this).attr('title');
            let image = $(this).attr('image');
            let file = $(this).attr('file');
            $('#cat_id').val(cat_id).change();
            $('#title').val(title);
            $('#image').val(image);
            $('#file').val(file);
        });
    });
    $('body').on('click', '.delete-btn', function(){
                        let id = $(this).attr('id');
                        $('#del_id').val(id);
                        $('#deleteForm').attr('action','{{route('admin.book.destroy','')}}' +'/'+id);
        });
</script>
@endsection