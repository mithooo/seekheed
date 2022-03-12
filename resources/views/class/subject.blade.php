@extends('layouts.class')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script>
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });
</script>
<style>


.c-details span {
    font-weight: 300;
    font-size: 13px
}

.icon {
    width: 50px;
    height: 50px;
    background-color: #eee;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 39px
}

.badge span {
    background-color: #fffbec;
    width: 60px;
    height: 25px;
    padding-bottom: 3px;
    border-radius: 5px;
    display: flex;
    color: #fed85d;
    justify-content: center;
    align-items: center
}

.progress {
    height: 10px;
    border-radius: 10px
}

.progress div {
    background-color: red
}

.text1 {
    font-size: 14px;
    font-weight: 600
}

.text2 {
    color: #a5aec0
}
</style>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1556817331/lightgallery-all.min.js"></script>
@endsection

@section('content')
<div class="container mt-5 mb-3">
    <div class="row">
        @foreach (App\Subject::all() as $subject)
        <div class="col-md-4">
            <div class="card p-3 mb-2">
              
                <div class="mt-5">
                    <h3 class="heading">{{$subject->name}}</h3>
                    <div class="mt-5">
                     <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('class.subject.edit',$subject->id)}}" class="btn btn-primary"> <b>Read Books</b> </a>
                        </div>
                        <a href="{{route('class.subject.show',$subject->id)}}" class="btn btn-success"><b>Watch Lectures</b> </a>
                     </div>
                    
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    
    </div>
</div>


@endsection