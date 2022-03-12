@extends('layouts.class')

@section('content')
    <div class="container mt-5 mb-3">
        <div class="row">
            @foreach ($lectures as $lecture)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $lecture->thumbnail }}" height="150px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-8">
                                    <h5 class="card-title ml-n5">{{ $lecture->title }}</h5>
                                </div>
                                <div class="col-md-4"><span class="badge badge-info">{{ $lecture->subject->name }}</span>
                                </div>
                            </div>
                       <a href="{{route('get_file',$lecture->file)}}" target="_blank" class="btn btn-block btn-primary">Watch</a>
                           
                        </div>
                    </div>
                </div>

            
            @endforeach

        </div>
    </div>
  
@endsection
