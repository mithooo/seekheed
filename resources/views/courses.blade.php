@extends('layouts.master')
@push('styles')
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.footer-margin{
    margin-top:20px;
}
.service-margin{
    margin-top:70px;
}
/* .container {
  width: 100%;
  height: 100%;
  padding: 0px 8%;
} */

.container h1 {
  text-align: center;
  padding-top: 10%;
  margin-bottom: 60px;
  font-weight: 600;
  position: relative;
}

.container h1::after {
  content: '';
  background: #303ef7;
  width: 100px;
  height: 5px;
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
}

.row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 30px;
}

.service {
  text-align: center;
  padding: 25px 10px;
  border-radius: 5px;
  font-size: 14px;
  cursor: pointer;
  background: transparent;
  transition: transform 0.5s, background 0.5s;
}

.service i {
  font-size: 40px;
  margin-bottom: 10px;
  color: #303ef7;
}

.service h3 {
  font-weight: 200;
  margin-bottom: 8px;
}

.service:hover {
  background: #303ef7;
  color: #fff;
  transform: scale(1.05);
}

.service:hover i {
  color:#fff
}

</style>
@endpush

@section('content')
<div class="container service-margin">
    <h1>Our Courses</h1>
    <div class="row">
        @foreach ($courses as $course)
        <div class="service">
            <h3>{{$course->name}}</h3>
            <p>
                {{$course->description}}
            </p>
            <a href="{{$course->alternateLink.'?cjc='.$course->enrollmentCode}}" target="_blank" class="btn btn-danger">Enroll Now</a>
    
          </div>
        @endforeach
     
      
     
    </div>
  </div>
@endsection