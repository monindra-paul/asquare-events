@extends('frontend.layout.app')
@section('mainsection')



<section class="about section-padding main-bg">
    <div class="container ontop">
        <div class="row">
            <div class="col-lg-5 valign">
                <div class="about-circle-crev md-hide">
                    <div class="circle-button">
                        <div class="rotate-circle fz-16 ls1 text-u">
                            <svg class="textcircle" viewBox="0 0 500 500">
                                <defs>
                                    <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                    </path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#textcircle" textLength="900"> Team Asquare - Give you the
                                        Best Solution - </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>
                    <div class="half-circle-img">
                        <img src="assets/imgs/about/1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="cont sec-lg-head">
                    <h6 class="dot-titl mb-20">About Team Asquare</h6>
                    <h2 class="d-slideup wow">
                        <span class="sideup-text"><span class="up-text">Your trusted partner
                                for business.</span></span>
                        <span class="sideup-text"><span class="up-text">Get your Any Event Solution.</span></span>
                    </h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text mt-20">
                                <p>Welcome to Team Asquare our dynamic entertainment empire, where we bring your dreams
                                    to life through the magic of film, photography, events, and digital marketing. With
                                    a passion for creativity and a dedication to excellence, we offer a wide range of
                                    services that ensure your special moments are captured, celebrated, and shared in
                                    the most extraordinary ways.

                                </p>
                            </div>
                            <div class="underline">
                                <a href="#" class="mt-30 ls1 sub-title"><img id="as-ab-logo"
                                        src="{{asset('assets/imgs/asquare/logo/as.png')}}" alt="f" srcset="">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="intro-corp section-padding pt-4 mt-4">
    <div class="container">
        <div class="row justify-content-around">

            <div class="col-lg-6 valign">
                <div class="cont">
                    <div class="text">
                        <h2 class="d-slideup wow">
                            <span class="sideup-text">
                                <span class="up-text">The creative</span>
                            </span>
                            <span class="sideup-text">
                                <span class="up-text">process behind our<span class="stroke fw-700 opacity-7">
                                        Management Services</span></span>
                            </span>


                        </h2>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <ul class="rest list-arrow">
                                <li class="mt-20">
                                    <span class="icon">
                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span>Research</span>
                                </li>
                                <li class="mt-20">
                                    <span class="icon">
                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span>Concept</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="rest list-arrow">
                                <li class="mt-20">
                                    <span class="icon">
                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span>Implement</span>
                                </li>
                                <li class="mt-20">
                                    <span class="icon">
                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span>Handover</span>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-5 valign md-mb50">
                <div class="imgs mb-80">
                    <div class="img1">
                        <img src="{{asset('assets/imgs/about/sq1.jpg')}}" alt="" class="radius-10">
                    </div>
                    <div class="img2">
                        <img src="{{asset('assets/imgs/about/sq2.jpg')}}" alt="" class="radius-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="testim-vrt sub-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="cont">
                    <div>
                        <h6 class="sub-title mb-15">Since From 2015</h6>
                        <h3>Our talented team created exceptional experiences and timeless moments</h3>
                        <div class="text mt-10 pb-30 bord-thin-bottom">
                            <p>Our satisfied family</p>
                        </div>
                        <div class="stauts d-flex mt-20">
                            <div class="item d-flex align-items-center mt-30">
                                <h2 class="mr-20">12k</h2>
                                <p class="fz-14">Happy Users in<br> Events & Communications</p>
                            </div>
                            <div class="item d-flex align-items-center ml-auto mt-30">
                                <h2 class="mr-20">150k</h2>
                                <p class="fz-14">Happy Users in <br> Asquare Wedding</p>
                            </div>
                        </div>
                        <div class="stauts d-flex mt-20">
                            <div class="item d-flex align-items-center mt-30">
                                <h2 class="mr-20">12k</h2>
                                <p class="fz-14">Happy Users in<br> Asquare Photoz</p>
                            </div>
                            <div class="item d-flex align-items-center ml-auto mt-30">
                                <h2 class="mr-20">150k</h2>
                                <p class="fz-14">Happy Users in <br> Kolkata Studios</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div>
                    <div class="main-marqv">
                        <div class="slide-vertical st1">

                            <div class="box">
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item radius-30 mt-30">
                                    <div class="cont mb-40">
                                        <div class="rate-stars mb-30 fz-12">
                                            <span class="rate main-color">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="fw-400">I have been hiring people in this
                                            space for a number of years
                                            and I have never seen this level of
                                            professionalism. It really feels like you are
                                            working with a team that can get the job
                                            done.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="img circle-80">
                                                <img src="{{asset('assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                            </div>
                                        </div>
                                        <div class="ml-30">
                                            <div class="info">
                                                <h6>Leonard Heiser</h6>
                                                <span class="main-color sub-title">Ceo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<div class="clients section-padding pb-100 position-re brand-sec">
    <div class="container">
        <div class="row justify-content-center mb-80">
            <div class="col-lg-6 text-center">
                <h6><span class="fz-14"> </span> Clients</h6>
                <div class="text">
                    <h3>We create <span class="sub-font">experiences</span> and turn ideas into reality.</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-marq main-marq">
                        <div class="slide-har st1">
                            <div class="box">
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/canara.png')}}" alt="rfuu">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/anchor.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/andra-bank.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/lalit.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/zee.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/tata-aia.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/india-first.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/max.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/spencer.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/success.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/kotak.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/euro-kids.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/zee.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#0" class="img">
                                        <img src="{{asset('assets/imgs/asquare/c2/karma.png')}}" alt="">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    <div class="bg-pattern patrn1 bg-img opacity-5" data-background="{{asset('assets/imgs/patterns/pattern.svg')}}"></div>
</div>



@endsection