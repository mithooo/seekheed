@extends('layouts.master')
@section('content')
    <!-- login form -->
    <header class="masthead" style="height: auto; min-height: auto;">
        <div class="row justify-content-center w-100 mx-0 h-100">
            <div class="col-lg-6 col-sm-12 align-self-start bg-dark h-100 px-4 op-9">
                <h1 class=" text-white font-weight-bold pt-3" style="font-size: 2rem;">How can i get involved?</h1>
                <!-- <hr class="divider " /> -->
                <p class="text-white-75 font-weight-light  text-justify" style="font-size: 1rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque excepturi earum ab possimus libero quibusdam sit illum architecto, debitis natus atque id, laboriosam omnis necessitatibus velit deleniti laborum molestiae nostrum!
                </p>
                <div class="d-flex">
                    <form action="{{route('front.profile')}}" method="get" class="m-auto d-flex">
                        <div class="input-group mr-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control" required autofocus placeholder="Email" value="">
                        </div>
                        <button onclick="document.getElementById('msg-users').classList.remove('d-none');" class="btn btn-primary px-4">
                            Submit
                        </button>
                    </form>
                </div>
                <hr class="divider" />

                <div id="msg-users" class="d-none">
                    <p class="text-white font-weight-light  text-justify" style="font-size: 1.2rem;">
                        Congratulations, <strong>PJ Bell</strong>
                    </p>
                    <p class="text-white-75 font-weight-light  text-justify" style="font-size: 0.9rem;">
                        You have [<strong>3</strong>] contacts that are connected through Seek. <br>
                        Send them a request for a referal into Seek
                    </p>

                    <form action="{{route('front.profile')}}" method="get">
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name1" type="checkbox" id="name1"  style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name1"  style="vertical-align: middle;">
                                    <strong>Aramis Hall </strong> | Marketing & Sales Rep for Seek &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name2" type="checkbox" id="name2"  style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name2"  style="vertical-align: middle;">
                                    <strong>Stevin Woods </strong> | CEO of Seek &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name3" type="checkbox" id="name3"  style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name3"  style="vertical-align: middle;">
                                    <strong>PJ Bell </strong> | VP & Head Art Director &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <button type="submit"  class="btn btn-primary px-4">
                                Send Request
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card m-3 p-2 mt-5">
                    <video src="{{asset('public/resource')}}/assets/img/videos/video.mp4" controls="true" autoplay="true"></video>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card-group mt-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <h2>SEEKHEED</h2>
                                <p class="text-muted">BirthChart</p>

                                {{-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input name="email" type="text" class="form-control" required autofocus placeholder="Email" value="">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    </div>
                                    <input name="password" type="password" class="form-control" required placeholder="Password">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                        <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">
                                            Login
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0" href="#">
                                            Forgot your password?
                                        </a>

                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer p-4">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('fb_login')}}" class="btn btn-block btn-info">
                                        <span><i class="fab fa-facebook"></i> </span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{route('g_login')}}" class="btn btn-block btn-danger">
                                        <span><i class="fab fa-google"></i> </span>
                                    </a>
                                </div>
                            {{-- <div class="col-4">
                                <button class="btn btn-block btn-info" type="button"><span><i class="fab fa-twitter"></i> </span></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End login form -->
@endsection
