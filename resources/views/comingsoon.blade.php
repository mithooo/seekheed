<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- meta --}}
        @include('layouts.partials.meta')

        {{-- styles --}}
        @include('layouts.partials.styles')

        @stack('styles')

        <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
		<script src="https://unpkg.com/video.js/dist/video.min.js"></script>
		<script>window.HELP_IMPROVE_VIDEOJS = false;</script>
        <style>
            .video-js {
                /* position: absolute; */
				max-height: 100vh!important;
                max-width: 100%!important;
			}

            .rounded-vol {
                height: 40px;
                width: 40px;
                border-radius: 50%;
            }

            .rounded-vol:hover {
                height: 50px;
                width: 50px;
                cursor: pointer;
            }

            .no-display {
                display: none!important;
            }
            
            .mb-dis {
                    display: none;
                }

            @media (max-width: 768px) {
                .mb-change {
                    /*position: absolute!important;*/
                    /*z-index: 1;*/
                    /*opacity: 0.2;*/
                    display:  none!important;
                }
                
                .video-js {
                    height: 200px;
                    width: 100%;
                }
                
                .mb-dis {
                    display: block!important;
                }
            }
            textarea {
                resize: none;
            }

            .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            white-space: nowrap;
            }

            @charset "UTF-8";

            .svg-inline--fa {
            vertical-align: -0.200em;
            }

            .rounded-social-buttons {
            text-align: center;
            }

            .rounded-social-buttons .social-button {
            display: inline-block;
            position: relative;
            cursor: pointer;
            width: 3.125rem;
            height: 3.125rem;
            border: 0.125rem solid transparent;
            padding: 0;
            text-decoration: none;
            text-align: center;
            color: #fefefe;
            font-size: 1.5625rem;
            font-weight: normal;
            line-height: 2em;
            border-radius: 1.6875rem;
            transition: all 0.5s ease;
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
            }

            .rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
            -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                    transform: rotate(360deg);
            }

            .rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
            font-size: 25px;
            }

            .rounded-social-buttons .social-button.facebook {
            background: #3b5998;
            }

            .rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
            color: #3b5998;
            background: #fefefe;
            border-color: #3b5998;
            }

            .rounded-social-buttons .social-button.twitter {
            background: #55acee;
            }

            .rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
            color: #55acee;
            background: #fefefe;
            border-color: #55acee;
            }

            .rounded-social-buttons .social-button.linkedin {
            background: #007bb5;
            }

            .rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
            color: #007bb5;
            background: #fefefe;
            border-color: #007bb5;
            }

            .rounded-social-buttons .social-button.youtube {
            background: #bb0000;
            }

            .rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
            color: #bb0000;
            background: #fefefe;
            border-color: #bb0000;
            }

            .rounded-social-buttons .social-button.instagram {
            background: #125688;
            }

            .rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
            color: #125688;
            background: #fefefe;
            border-color: #125688;
            }

            .social-media {
                /* background: #f0f8ff; */
            }

            .icon-image {
                height: 26px!important;
                width: 26px!important;
                margin: auto!important;
            }
        </style>
    </head>
    <body id="page-top position-relative" style="overflow-x: hidden;">

        {{-- navbar --}}
        {{-- @include('layouts.partials.navbar') --}}



        <header class="masthead " style="height: 100%; min-height: 100%;padding: 0; background: none;">
            <div class="row justify-content-center w-100 mx-0 h-100">
                <div class="col-lg-6 col-sm-12 align-self-start  h-100  p-0 position-relative">
                    <div class="bg-dark h-100 w-100 position-absolute op-9 d-flex" style="z-index: 1;"></div>
                    <div class="m-auto position-absolute d-flex h-100" style="z-index: 2;">
                        <div class="m-auto">
                            
                            <h1 class=" text-white font-weight-bold pt-3 px-3 text-center" style="font-size: 2rem;">Our Website is Coming Soon</h1>
                            <!-- <hr class="divider " /> -->
                            <p class="text-white-75 font-weight-light  text-justify text-center px-3" style="font-size: 1rem;">
                                We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!
                            </p>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="d-flex pb-3 px-3">
                                <form action="{{route('soon')}}" method="post" class="m-auto d-flex">
                                    @csrf
                                    <div class="input-group mr-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" required  placeholder="Email" value="">

                                    </div>
                                    <button onclick="document.getElementById('msg-users').classList.remove('d-none');" class="btn btn-primary px-4">
                                        Submit
                                    </button>
                                </form>
                            </div>
                            <hr class="divider mb-3" />
                            <div class="mb-dis">
                                <video style=""
                    muted
                        id="my-player"
                        class="video-js "

                        {{-- preload="auto" --}}
                        poster="{{asset('public/coming/img/bg-mobile-fallback - Copy.jpg')}}"
                        data-setup='{
                        "controls": true,
                            "loop": "true",
                            "autoplay": true,
                            "preload": "true"
                            }'>
                        <source src="{{asset('public/coming/mp4/video.mp4')}}" type="video/mp4"></source>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">
                            supports HTML5 video
                            </a>
                        </p>
                    </video>
                            </div>
                            <hr class="divider mb-3 mb-dis" />
                            <footer class=" py-3 social-media bg-dark">
                                <div class="row justify-content-center w-100 m-0">
                                    <div class="col-lg-8 text-center">
                                        <h1 class=" text-white font-weight-bold pt-3 text-center" style="font-size: 2rem;">Follow us on</h1>
                                        <hr class="divider mt-3" />
                                    </div>
                                </div>
                                <div class="rounded-social-buttons m-auto row w-100 justify-content-center">
                                    <div class="">
                                        <a class="m-auto social-button facebook d-flex " href="https://www.facebook.com/Seekheed-104251228550231" target="_blank"><i class="fab fa-facebook-f m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button twitter d-flex" href="https://twitter.com/seekheed" target="_blank"><i class="fab fa-twitter m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button youtube d-flex" href="https://www.pinterest.com/seekheed/" target="_blank"><i class="fab fa-pinterest m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button instagram d-flex p-2" href="https://www.instagram.com/seekheed" target="_blank"><img class="icon-image" src="{{asset('public/resource/assets/img/icons/linktree.png')}}" alt=""></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button linkedin d-flex" href="https://www.linkedin.com/company/seekheed/" target="_blank"><i class="fab fa-linkedin m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button youtube d-flex" href="https://www.youtube.com/channel/UCL8dB8RM1HsDHXwOicRN-7g" target="_blank"><i class="fab fa-youtube m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button instagram d-flex" href="https://www.instagram.com/seekheed" target="_blank"><i class="fab fa-instagram m-auto"></i></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button linkedin d-flex " style="padding: 10px;" href="https://www.snapchat.com/add/seekheed" target="_blank"><img class="icon-image" src="{{asset('public/resource/assets/img/icons/snap1.png')}}" alt=""></a>
                                    </div>
                                    <div class="">
                                        <a class="m-auto social-button twitter d-flex " style="padding: 10px;" href="https://www.tiktok.com/@seekheed?lang=en" target="_blank"><img class="icon-image" src="{{asset('public/resource/assets/img/icons/tiktok.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-0 position-relative mb-change d-flex">
                    <!--<div class="position-absolute " style="z-index: 3; left: 5%;top: 2%; font-size: 22px; color: #ffffff;">-->
                    <!--    <div id="bt-1">-->
                    <!--        <div class="rounded-vol bg-dark d-flex" onclick="display('bt-1', 'bt-2', 'unmute');">-->
                    <!--            <i class="fa fa-volume-off m-auto" style="color: #ffffff;" aria-hidden="true"></i>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class=" no-display" id="bt-2">-->
                    <!--        <div class="rounded-vol bg-dark d-flex " onclick="display('bt-1', 'bt-2', 'mute')";>-->
                    <!--            <i class="fa fa-volume-up m-auto" style="color: #ffffff;" aria-hidden="true"></i>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <video style="height: 100%;"
                    muted
                        id="my-player"
                        class="video-js "

                        {{-- preload="auto" --}}
                        poster="{{asset('public/coming/img/bg-mobile-fallback - Copy.jpg')}}"
                        data-setup='{
                        "controls": true,
                            "loop": "true",
                            "autoplay": true,
                            "preload": "true"
                            }'>
                        <source src="{{asset('public/coming/mp4/video.mp4')}}" type="video/mp4"></source>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">
                            supports HTML5 video
                            </a>
                        </p>
                    </video>
                </div>
            </div>
        </header>

        {{-- end main content --}}

        {{-- footer --}}
        {{-- @include('layouts.partials.footer') --}}


        {{-- suggestion box --}}
        {{-- @include('layouts.partials.suggestion_box') --}}

        {{-- scripts --}}
        @include('layouts.partials.scripts')
        @stack('scripts')

        <script>

            function display(op, op2, val) {
                if(val == "mute") {
                    document.getElementById('my-player_html5_api').muted = true;
                }
                else {
                    document.getElementById('my-player_html5_api').muted = false;
                }
                document.getElementById(op).classList.toggle('no-display');
                document.getElementById(op2).classList.toggle('no-display');

                //
            }
        </script>


    </body>
</html>
