<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-1 navbar-scrolled-default" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">
            <img height="80px" src="{{asset('public/resource')}}/assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <!-- Button trigger modal -->
                <form action="#"  class="m-auto d-flex">

                <div class="input-group mr-3">
                  
                    <input name="email" type="text" class="form-control" required autofocus placeholder="Who are you looking for?" value="">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
                </form>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('front.profile_conf')}}">Account</a></li> 
               <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="#team">Team</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('front.profile')}}">Profile</a></li> 
                
              
            </ul>
        </div>
    </div>
</nav>



{{-- donation box --}}
@include('layouts.partials.donate_box')
