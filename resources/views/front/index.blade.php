@extends('layouts.master')
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="h-100">
            <div class="row w-100 m-0 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-6 align-self-start">
                    <div class="card m-3 p-2 mt-5">
                        <video src="{{asset('public/resource')}}/assets/img/videos/video.mp4" controls="true" autoplay="true"></video>
                    </div>
                </div>
                <div class="col-lg-6 align-self-start bg-dark h-100 px-4 op-9">
                    <h1 class="text-uppercase text-white font-weight-bold mt-5 pt-3">SEEKHEED</h1>
                    <hr class="divider my-4" />
                    <p class="text-white-75 font-weight-light  text-justify">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                        graphic or web designs. The passage is attributed to an unknown
                        typesetter in the 15th century who is thought to have scrambled parts of Cicero's
                        De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                    <hr class="divider my-5" />
                    <a class="btn btn-primary btn-xl js-scroll-trigger mb-2" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">What is SeekHeed?</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">SeekHeed Univercity is a all inclusive creative platform for entrepreneurs, Doer's, Grinders, Hustlers, pioneers etc.
                        providing members with a unique experience catered to their craft allowing but not limited too collaboration with fellow members,
                        web class, self advertising, rules and regulations pertaining your craft,
                        pro bono legal advice, hiring help, among so much moor.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-8 m-auto">
                    <hr>
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" required="" id="name" placeholder="Your Name *"><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" required="" id="email" placeholder="Your Email *"><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" required="" placeholder="Your Phone *"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" required="" id="message" placeholder="Your Message *"></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" type="submit" id="sendMessageButton">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
