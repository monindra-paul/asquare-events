@extends('frontend.layout.app')
@section('mainsection')

<section class="call-action-center section-padding position-re">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sec-lg-head text-center">
                    <h2 class="d-slideup wow fz-70 fw-700">
                        <span class="sideup-text">
                            <span class="up-text">Have a project in mind?</span>
                        </span>
                        <span class="sideup-text">
                            <span class="up-text underline"><a href="page-contact.html" class="main-color">Let’s
                                    work together.</a></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/abstact-BG.png"></div>
</section>


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

                    <form method="post" action="{{url('/partner')}}" enctype="multipart/form-data">
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

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('mobile'))
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <input id="form_mobile" type="text" name="mobile"
                                        placeholder="Enter Your Mobile No.">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                    @endif
                                    <input id="form_state" type="text" name="state" placeholder="Enter Your State Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <input id="form_state" type="text" name="city" placeholder="Enter Your City Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                    @endif
                                    <input id="form_state" type="text" name="country"
                                        placeholder="Enter Your Country Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('pin'))
                                    <span class="text-danger">{{ $errors->first('pin') }}</span>
                                    @endif
                                    <input id="form_state" type="text" name="pin" placeholder="Enter Your PIN Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <input id="form_state" type="text" name="address" placeholder="Enter Your Address">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea id="form_message" name="description" placeholder="Describe yourself"
                                        rows="4"></textarea>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                    @if ($errors->has('upload'))
                                    <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input id="form_state" type="file" name="upload" placeholder="Enter Upload Your Portfolio">
                                    <p>Please upload Your Documents within 1.5 MB</p>
                                </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection