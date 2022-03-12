@extends('layouts.class')

@section('content')
<div class="row">
    <div class="col-md-3">
        <!--begin: Stats Widget 19-->
        <div class="card card-custom bg-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body my-3">
                <a href="{{route('class.subject.index')}}" class="card-title font-weight-bolder text-light text-hover-state-dark font-size-h6 mb-4 d-block">Total Subjects</a>
                <div class="font-weight-bold text-muted font-size-sm">
                <span class="text-light font-size-h2 font-weight-bolder mr-2">{{ App\Subject::all()->count() }}</span></div>
            </div>
            <!--end:: Body-->
        </div>
        <!--end: Stats:Widget 19-->
    </div>
    <div class="col-md-3">
        <!--begin::Stats Widget 20-->
        <div class="card card-custom bg-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body my-4">
                <a href="{{route('class.lecture.index')}}" class="card-title font-weight-bolder text-light text-hover-state-dark font-size-h6 mb-4 d-block">Total Lectures</a>
                <div class="font-weight-bold text-muted font-size-sm">
                <span class="text-light font-size-h2 font-weight-bolder mr-2">{{ App\Lecture::all()->count() }}</span></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 20-->
    </div>
    <div class="col-md-3">
        <!--begin::Stats Widget 21-->
        <div class="card card-custom bg-info card-stretch gutter-b">
            <!--begin::ody-->
            <div class="card-body my-4">
                <a href="{{route('class.book.index')}}" class="card-title font-weight-bolder text-light text-hover-state-dark font-size-h6 mb-4 d-block">Total Books</a>
                <div class="font-weight-bold text-muted font-size-sm">
                <span class="text-light font-size-h2 font-weight-bolder mr-2">{{ App\Book::all()->count() }}</span></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 21-->
    </div>
    <div class="col-md-3">
        <!--begin::Stats Widget 21-->
        <div class="card card-custom bg-info card-stretch gutter-b">
            <!--begin::ody-->
            <div class="card-body my-4">
                <a href="{{route('class.event.index')}}" class="card-title font-weight-bolder text-light text-hover-state-dark font-size-h6 mb-4 d-block">Total Events</a>
                <div class="font-weight-bold text-muted font-size-sm">
                <span class="text-light font-size-h2 font-weight-bolder mr-2">{{ App\Event::all()->count() }}</span></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 21-->
    </div>
    
   
</div>
@endsection