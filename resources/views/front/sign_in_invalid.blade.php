@extends('layouts.master')
@section('content')
    <!-- invalid search form -->
    <header class="masthead" style="height: auto; min-height: auto;">
        <div class="row justify-content-center w-100 mx-0 h-100">
            <div class="col-lg-6 col-sm-12 align-self-start bg-dark h-100 px-4 op-9">
                <h1 class=" text-white font-weight-bold pt-3" style="font-size: 2rem;">See If You Are Eligible Today</h1>
                <!-- <hr class="divider " /> -->
                <p class="text-white-75 font-weight-light  text-justify" style="font-size: 1rem;">
                    Enter you email and see if anyone you know is already connected.
                </p>
                <div class="d-flex">
                    <form action="#" method="post" class="m-auto d-flex">
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
                        At this time, <strong>Kelli Kaneshiro,</strong> no one meets your request. <br>
                        But don't worry there is still a way <br> to get connected.
                    </p>
                    <p class="text-white-75 font-weight-light  text-justify" style="font-size: 0.9rem;">
                        Would you like to receive update on how you can become <br>
                        connected with the Seek Network?
                    </p>

                    <form action="#" method="POST">
                        <div class="input-group mb-4">
                            <button type="submit"  class="btn btn-success px-3 mr-2">
                                Yes
                            </button>
                            <button type="submit"  class="btn btn-danger px-3">
                                No
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
                            <form method="get" action="{{route('front.profile')}}">
                                <h1>SEEKHEED</h1>
                                <p class="text-muted">Login</p>

                                <div class="input-group mb-3">
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
                                </div>
                            </form>
                        </div>
                        <div class="card-footer p-4">
                            <div class="row">
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-info">
                                    <span><i class="fab fa-facebook"></i> </span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-danger">
                                    <span><i class="fab fa-google"></i> </span>
                                </a>

                            </div>
                            <div class="col-4">
                                <button class="btn btn-block btn-info" type="button"><span><i class="fab fa-twitter"></i> </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End invalid search form -->
@endsection
