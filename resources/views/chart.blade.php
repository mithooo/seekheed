@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('public/chart/reports.css') }}">
@endpush
@section('content')
    <!-- login form -->
    <header class="masthead" style="height: auto; min-height: auto;">
        <div class="row justify-content-center w-100 mx-0 h-100">
            <div class="col-lg-6 col-sm-12 align-self-start bg-dark h-100 px-4 op-9">
                <h1 class=" text-white font-weight-bold pt-3" style="font-size: 2rem;">See If You Are Eligible Today</h1>
                <!-- <hr class="divider " /> -->
                <p class="text-white-75 font-weight-light  text-justify" style="font-size: 1rem;">
                    Enter you email and see if anyone you know is already connected.
                </p>
                <div class="d-flex">
                    <form action="{{ route('front.profile') }}" method="get" class="m-auto d-flex">
                        <div class="input-group mr-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control" required autofocus placeholder="Email"
                                value="">
                        </div>
                        <button onclick="document.getElementById('msg-users').classList.remove('d-none');"
                            class="btn btn-primary px-4">
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

                    <form action="{{ route('front.profile') }}" method="get">
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name1" type="checkbox" id="name1"
                                    style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name1" style="vertical-align: middle;">
                                    <strong>Aramis Hall </strong> | Marketing & Sales Rep for Seek &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name2" type="checkbox" id="name2"
                                    style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name2" style="vertical-align: middle;">
                                    <strong>Stevin Woods </strong> | CEO of Seek &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input " name="name3" type="checkbox" id="name3"
                                    style="vertical-align: middle;" />
                                <label class="form-check-label text-white" for="name3" style="vertical-align: middle;">
                                    <strong>PJ Bell </strong> | VP & Head Art Director &copy;
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <button type="submit" class="btn btn-primary px-4">
                                Send Request
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card m-3 p-2 mt-5">
                    <video src="{{asset('public/coming')}}/mp4/bg1.mp4" controls="true"
                        autoplay="true"></video>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card-group mt-4">
                    <div class="card">
                        <div class="card-body p-4">
                            {!! $result !!}
                        </div>
                        <div class="card-footer p-4">
                            <a href="{{ route('home') }}" class="btn btn-info">Go to Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End login form -->
@endsection

@push('scripts')
@endpush
