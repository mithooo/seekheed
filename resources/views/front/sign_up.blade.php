@extends('layouts.master')
@section('content')
    <!-- Sign up form -->
    <header class="masthead" style="height: auto; min-height: auto;">
        <div class="row justify-content-center w-100 mx-0 h-100">
            <div class="col-lg-6 col-sm-12 align-self-start bg-dark h-100 px-4 op-9">
                <h1 class=" text-white font-weight-bold pt-3" style="font-size: 2rem;">How can i get involved?</h1>
                <!-- <hr class="divider " /> -->
                <p class="text-white-75 font-weight-light  text-justify" style="font-size: 1rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque excepturi earum ab possimus libero quibusdam sit illum architecto, debitis natus atque id, laboriosam omnis necessitatibus velit deleniti laborum molestiae nostrum!
                </p>

                <hr class="divider" />


                <div class="card m-3 p-2 mt-5">
                    <video src="{{asset('public/coming')}}/mp4/bg1.mp4" controls="true" autoplay="true"></video>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card-group mt-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <h2>SEEKHEED</h2>
                                <p class="text-muted">Register</p>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
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

    <!-- End sign up form -->
@endsection
