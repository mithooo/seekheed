@extends('layouts.master')
@push('styles')
    <script>
        const CLIENT_ID = '8a571244-2489-4819-970c-7329ca455b0e'
    </script>
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
                    <video src="{{asset('public/coming')}}/mp4/bg1.mp4" controls="true" autoplay="true"></video>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card-group mt-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <form method="post" action="{{route('chart')}}">
                                @csrf
                                <h2>SEEKHEED</h2>
                                <p class="text-muted">BirthChart</p>

                                
                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                    <div class="col-md-6">
                                        <input type='datetime-local' name="datetime" class="form-control form-control-lg rounded-1" required="required" value="{{$datetime->format('Y-m-d\TH:i')}}"/>

                                       
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pob" class="col-md-4 col-form-label text-md-right">{{ __('Place of birth:') }}</label>

                                    <div class="col-md-6">
                                        <input type='text' id="fin-location" name="location" autocomplete="off" class="form-control form-control-lg rounded-1 prokerala-location-input" placeholder="Place of birth" value="" required>
                                    </div>
                                </div>

                                <div id="form-hidden-fields">

                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Generate Chart') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End login form -->
@endsection

@push('scripts')
<script>
    (function () {
        function loadScript(cb) {
            var script = document.createElement('script');
            script.src = 'https://client-api.prokerala.com/static/js/location.min.js';
            script.onload = cb;
            script.async = 1;
            document.head.appendChild(script);
        }
    
        function createInput(name, value) {
            const input = document.createElement('input');
            input.name = name;
            input.type = 'hidden';
    
            return input;
        }
        function initWidget(input) {
            const form = input.form;
            const inputPrefix = input.dataset.location_input_prefix ? input.dataset.location_input_prefix : '';
            const coordinates = createInput(inputPrefix +'coordinates');
            const timezone = createInput(inputPrefix +'timezone');
            form.appendChild(coordinates);
            form.appendChild(timezone);
            new LocationSearch(input, function (data) {
                coordinates.value = `${data.latitude},${data.longitude}`;
                timezone.value = data.timezone;
                input.setCustomValidity('');
            }, {clientId: CLIENT_ID, persistKey: `${inputPrefix}loc`});
    
            input.addEventListener('change', function (e) {
                input.setCustomValidity('Please select a location from the suggestions list');
            });
        }
        loadScript(function() {
            let location = document.querySelectorAll('.prokerala-location-input');
            Array.from(location).map(initWidget);
        });
    })();
    </script>
@endpush
