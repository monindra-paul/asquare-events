@extends('frontend.layout.app')
@section('mainsection')

<main>

    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding sub-bg">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-7">
                    <div class="caption">
                        <h6 class="sub-title">Contact Us</h6>
                        <h1 class="fz-55">Let's make <br> your brand brilliant!</h1>
                    </div>
                </div>
                <div class="col-lg-5 valign">
                    <div class="text">
                        <p>Welcome to our integrated entertainment company! We specialize in films, weddings,
                            photography, event management, studios, and digital marketing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Contact ==================== -->

    <section class="contact-crev section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-lg-head mb-80">
                        <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                        <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                        <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                            touch, we’d love to hear from you!</p>
                        <div class="phone fz-30 fw-600 mt-30 underline main-color">
                            <a href="tel:+916290950790
                            ">+91 6290950790
                            </a>
                        </div>
                        <ul class="rest social-text d-flex mt-60">
                            <li class="mr-30">
                                <a href="#0">Facebook</a>
                            </li>
                            <li class="mr-30">
                                <a href="#0">Twitter</a>
                            </li>
                            <li class="mr-30">
                                <a href="#0">LinkedIn</a>
                            </li>
                            <li>
                                <a href="#0">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="full-width">
                        
                        <form method="post" action="{{url('/contact')}}">
                            @csrf

                            <div class="messages"></div>

                            <div class="controls row">

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        <input id="form_name" type="text" name="name" placeholder="Enter Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <input id="form_email" type="email" name="email" placeholder="Enter Your Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                        <textarea id="form_message" name="message" placeholder="Message"
                                            rows="4"></textarea>
                                        @if(session('success'))
                                        <div class="alert alert-success">{{session('success')}}</div>
                                        @endif
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-md butn-bord radius-30">
                                            <span class="text">Let's Talk</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->

</main>

@endsection