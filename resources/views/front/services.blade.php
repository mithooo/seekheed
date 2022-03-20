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
    <h1>Our Services</h1>
    <div class="row">
      <div class="service">
        <i class="fas fa-umbrella-beach fa-3x"></i>
        <h3>Travel Consultation</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Travel Consultation']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-bullhorn fa-3x"></i>
        <h3>Brand Ambassador</h3>
        <p> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Brand Ambassador']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-hammer fa-3x"></i>
        <h3>Construction Consultantion</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Construction Consultantion']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-music fa-3x"></i>
        <h3>Music Promotion</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Music Promotion']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-globe fa-3x"></i>
        <h3>Brand Identity Consultantion</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Brand Identity Consultantion']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-bezier-curve fa-3x"></i>
        <h3>Graphic Design</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Graphic Design']) }}" class="btn btn-danger">Get Started</a>

      </div>
      <div class="service">
        <i class="fas fa-laptop fa-3x"></i>
        <h3>Web Design</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          quae?
        </p>
        <a href="{{ route('service',['Web Design']) }}" class="btn btn-danger">Get Started</a>
    </div>
     
    </div>
  </div>
@endsection