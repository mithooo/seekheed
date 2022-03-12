@extends('layouts.master')

@push('styles')
<style>
    .search-box-icon {
        border-top-right-radius: 0.25rem!important;
        border-bottom-right-radius: 0.25rem!important;
    }
    .search-box:focus,  .search-box:active{
        box-shadow: none;
        outline: none;
    }
    .content  {
        padding-top: 6rem;
        padding-bottom: 0;
    }

    .profile-img {
        width: 180px;
        border-radius: 15px;
        border: 1px solid #331414;
    }

        /*  bhoechie tab */
    div.bhoechie-tab-container{
    z-index: 10;
    background-color: #ffffff;
    padding: 0 !important;
    border-radius: 4px;
    -moz-border-radius: 4px;
    border:1px solid #ddd;
    margin-top: 20px;
    margin-left: 50px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    background-clip: padding-box;
    opacity: 0.97;
    filter: alpha(opacity=97);
    }
    div.bhoechie-tab-menu{
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group{
    margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a{
    /* padding-top: 60px; */
    width: 20px;
    display: flex;
    margin-bottom: 0;
    height: 200px;
    position: relative;
    }

    div.bhoechie-tab-menu div.list-group>a div {
    transform: rotate(-90deg);
    /* padding-bottom: 60px; */
    position: absolute;
    left: -100%;
    top: 50%;
    width: 120px;
    }
    div.bhoechie-tab-menu div.list-group>a .glyphicon,
    div.bhoechie-tab-menu div.list-group>a .fa {
    color: #dd003f;
    }
    div.bhoechie-tab-menu div.list-group>a:first-child{
    border-top-right-radius: 0;
    -moz-border-top-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a:last-child{
    border-bottom-right-radius: 0;
    -moz-border-bottom-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a.active,
    div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
    div.bhoechie-tab-menu div.list-group>a.active .fa{
    background-color: #dd003f;
    background-image: #dd003f;
    color: #ffffff;
    }
    div.bhoechie-tab-menu div.list-group>a.active:after{
    content: '';
    position: absolute;
    left: 100%;
    top: 50%;
    margin-top: -13px;
    border-left: 0;
    border-bottom: 13px solid transparent;
    border-top: 13px solid transparent;
    border-left: 10px solid #dd003f;
    }

    div.bhoechie-tab-content{
    background-color: #ffffff;
    /* border: 1px solid #eeeeee; */
    padding-left: 20px;
    padding-top: 10px;
    }

    div.bhoechie-tab div.bhoechie-tab-content:not(.active){
    display: none;
    }
</style>
@endpush
@section('content')
    <!-- confidential profile -->
    <section class="content">
        <div class="row justify-content-center w-100 mx-0 h-100 mt-4">
            <div class="col-lg-5 col-sm-12 align-self-start  h-100 px-4">
                <div class="d-flex">
                    <div class="d-flex flex-column">
                        <img class="profile-img" src="{{asset('public/resource')}}/assets/img/user.jpg"  alt="">
                        <div class="mr-auto ml-1 mt-2">
                            <div class="input-group ">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="contect_request" type="checkbox" id="contect_request" style="vertical-align: middle;" />
                                    <label class="form-check-label" for="contect_request" style="vertical-align: middle;">
                                        Contact Request
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mr-auto ml-1 mt-2">
                            <div class="input-group ">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="message" type="checkbox" id="message" style="vertical-align: middle;" />
                                    <label class="form-check-label" for="message" style="vertical-align: middle;">
                                        Message
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mr-auto ml-1 mt-2">
                            <div class="input-group ">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="contact" type="checkbox" id="contact" style="vertical-align: middle;" />
                                    <label class="form-check-label" for="contact" style="vertical-align: middle;">
                                        Contact
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-2 mt-2">
                        <h2><strong>PJ Bell</strong></h2>
                        <h6>Web Developer & CEO at <strong>MIXFIT</strong></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 align-self-start  h-100 px-4 pt-4">
                <p class="font-weight-bold  text-justify text-muted" style="font-size: 1rem;">
                    "
                    <span>
                    At 20 years young this Graphic Designer has shown a strong sense of style and
                    visual understanding of what it takes to deliver an eye catching piece of work. PJ
                    prides himself on is creative thinking, artistic sensibility , keen eye for detail, his
                    motivation to keep pushing the envelope, thinking outside the box and even
                    sometimes trying to re-shape it.
                    </span>
                    "
                </p>
            </div>
        </div>
        <!------ Include the above in your HEAD tag ---------->

        <div class="">
            <div class="row justify-content-center w-100 mx-0 h-100 pr-3">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 "></div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 bhoechie-tab-container ml-0 d-flex pr-2" >
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bhoechie-tab-menu" style="max-width: 42px;">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center">
                                <div>
                                    Resume
                                </div>
                            </a>
                            <a href="#" class="list-group-item  text-center">
                                <div>
                                    Portfolio
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 bhoechie-tab ">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <div class="container" id="feed">
                                <h2 class="mt-5 mx-4 text-center">
                                    <strong>PJ Bell </strong> only shares information with those
                                    who are connected that are connected <br> to his
                                    network.
                                </h2>
                                <form accept="#"  method="post" class="mt-4 mx-5 pxl-5">
                                    <h6><strong>What's on your mind?</strong></h6>
                                    <div class="d-flex">
                                        <div class="input-group ">
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="Business" type="checkbox" id="Business" style="vertical-align: middle;" />
                                                <label class="form-check-label" for="Business" style="vertical-align: middle;">
                                                    Business Proposition
                                                </label>
                                            </div>
                                        </div>

                                        <div class="input-group ">
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="Collabration" type="checkbox" id="Collabration" style="vertical-align: middle;" />
                                                <label class="form-check-label" for="Collabration" style="vertical-align: middle;">
                                                    Collaboration
                                                </label>
                                            </div>
                                        </div>

                                        <div class="input-group ">
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="hire" type="checkbox" id="hire" style="vertical-align: middle;" />
                                                <label class="form-check-label" for="hire" style="vertical-align: middle;">
                                                    Contract / Hire
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="input-group ">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" name="Investment" type="checkbox" id="Investment" style="vertical-align: middle;" />
                                            <label class="form-check-label" for="Investment" style="vertical-align: middle;">
                                                Investment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex px-4">
                                        <button id="feedform"  class="btn btn-primary px-4 ml-auto mr-5">
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <hr>

                            <h2 style="margin-top: 0;"><strong>PJ's Resume</strong></h2>
                            <p class=" font-weight-bold text-muted" style="font-size: 1rem;">
                                Last Updated 8/26/11
                            </p>
                            <div class="row justify-content-center w-100 mx-0 h-100 pr-3 pb-4">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 px-0">
                                    <h3 style="margin-top: 0;"><u>Introduction</u></h3>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                    <p class=" font-weight-light text-justify" style="font-size: 0.95rem;">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae assumenda nesciunt voluptatem aperiam nihil, mollitia eum temporibus doloribus quam fuga cum architecto perferendis adipisci provident error doloremque. Reiciendis, eligendi magnam.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="bhoechie-tab-content">
                            <h2 style="margin-top: 0;"><strong>PJ's Portfolio</strong></h2>
                            <p class=" font-weight-bold text-muted" style="font-size: 1rem;">
                                Last Updated 8/26/11
                            </p>
                            <div class="row justify-content-center w-100 mx-0 h-100 pr-3 pb-4">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 px-0">
                                    <h3 style="margin-top: 0;"><u>Introduction</u></h3>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                    <p class=" font-weight-light text-justify" style="font-size: 0.95rem;">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae assumenda nesciunt voluptatem aperiam nihil, mollitia eum temporibus doloribus quam fuga cum architecto perferendis adipisci provident error doloremque. Reiciendis, eligendi magnam.
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center w-100 mx-0 h-100 pr-3 pb-4">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 px-0">
                                    <h3 style="margin-top: 0;"><u>Heading-2</u></h3>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                    <p class=" font-weight-light text-justify" style="font-size: 0.95rem;">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae assumenda nesciunt voluptatem aperiam nihil, mollitia eum temporibus doloribus quam fuga cum architecto perferendis adipisci provident error doloremque. Reiciendis, eligendi magnam.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
        </div>
        </div>
    </section>

    <!-- End confidential form -->
@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });
</script>

<script>
    document.getElementById('feedform').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('feed').classList.add('d-none');
    });
</script>
@endpush
