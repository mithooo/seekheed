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
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('ads')}}">Info/Ads</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('class.dashboard')}}" >Library</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('courses')}}" >Courses</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="http://store.seekheed.com/en/store" >Store</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="http://test.seekheed.com" >Music</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="" data-toggle="modal" data-target="#exampleModal">Donate</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="{{route('front.services')}}" >Our Services</a></li>
                {{-- <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="#about">About</a></li> --}}
                <!-- <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="#services">Services</a></li>
                <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="#portfolio">Portfolio</a></li> -->
                {{-- <li class="nav-item d-flex"><a class="nav-link my-auto js-scroll-trigger" href="#contact">Contact</a></li> --}}
                @guest
                <li class="nav-item d-flex">
                    @if (request()->is('sign_in'))
                    <a class="btn btn-primary btn-sm js-scroll-trigger my-auto" href="{{route('front.sign_up')}}">Register</a>
                    @else
                        <a class="btn btn-primary btn-sm js-scroll-trigger my-auto" href="{{route('front.sign_in')}}">Sign In</a>
                    @endif

                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('front.profile') }}">
                            {{ __('Profile') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



{{-- donation box --}}
@include('layouts.partials.donate_box')
