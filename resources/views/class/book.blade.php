@extends('layouts.class')

@section('content')
<div class="container mt-5 mb-3">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" height="150px" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">

                  <div class="col-md-8">                     <h5 class="card-title ml-n5">{{$book->title}}</h5> </div>
<div class="col-md-4"><span class="badge badge-info">{{$book->subject->name}}</span></div>
                    </div>
                  <a href="{{route('get_file',$book->file)}}" target="_blank" class="btn btn-primary ml-n5">Read Book</a>
                </div>
            </div>
        </div>
        @endforeach
    
    </div>
</div>

@endsection