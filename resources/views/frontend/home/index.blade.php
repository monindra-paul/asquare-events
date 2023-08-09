@extends('frontend.layout.app')
@section('mainsection')

<main>
    <!-- ==================== Start Slider ==================== -->
    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/1.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('asquare-events')}}">
                                                <span data-swiper-parallax="-2000">Events & Communications</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/2.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('asquare-wedding')}}">
                                                <span data-swiper-parallax="-2000">Asquare Wedding</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/3.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('asquare-photoz')}}">
                                                <span data-swiper-parallax="-2000">Asquare Photoz</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/4.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('filmsentetainment')}}">
                                                <span data-swiper-parallax="-2000">Asquare Films & Entertainments</span> <br> <span
                                                    data-swiper-parallax="-3000"></span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/2.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('kolkata-studios')}}">
                                                <span data-swiper-parallax="-2000">Asquare Studios</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('assets/imgs/works/full/3.jpg')}}" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="{{url('asquare-digital')}}">
                                                <span data-swiper-parallax="-2000">Asquare Digital</span> 
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="slider-contro">
                <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                    <div>
                        <span>Next</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span>Prev</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination dots"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


   

    <section class="about section-padding">
        <div class="container">
            <div class="row md-marg">
                <div class="col-lg-6 valign">
                    <div class="cont md-mb50">
                        <h6 class="sub-title opacity-8  ">About Us.</h6>
                        <h2 class=" ">
                            <span class="">
                                <span class="">Our <span class="sub-font">Global Presence</span></span>
                            </span>

                        </h2>
                        <div class=" mt-20" >
                            <p>Together, we strive to create captivating moments, unforgettable experiences, and
                                everlasting memories. Join us as we embark on a journey of imagination, artistry, and
                                boundless creativity.

                            </p>
                        </div>
                        <div class="stutas pt-40 mt-40 bord-thin-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center sm-mb30">
                                        <div class="mr-30">
                                            <h2 class="stroke fw-800">12k</h2>
                                        </div>
                                        <div>
                                            <h6 class="sub-title ls1 opacity-8">Happy Users <br> Around World
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-30">
                                            <h2 class="stroke fw-800">30k</h2>
                                        </div>
                                        <div>
                                            <h6 class="sub-title ls1 opacity-8">Projects <br> Already Done</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <a href="{{url('about')}}"><button class="butn butn-md butn-bord radius-30">
                                        <span class="text">About Asquare</span>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img">
                        <img src="{{asset('assets/imgs/about/2.jpg')}}" alt="">
                        <div class="exp main-bg">
                            <h2>8+</h2>
                            <h6 class="sub-title">Years Of Experience</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End About ==================== -->
    <!-- ==================== Start Services ==================== -->



    <section class="portfolio-fixed mt-4">
        <div class="container-fluid rest">
            <div class="row">
                <div class="col-lg-6 rest">
                    <div class="left" id="sticky_item">
                        <div id="tab-1" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/1.jpg')}}">
                        </div>
                        <div id="tab-2" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/2.jpg')}}">
                        </div>
                        <div id="tab-3" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/3.jpg')}}">
                        </div>
                        <div id="tab-4" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/1.jpg')}}">
                        </div>
                        <div id="tab-5" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/2.jpg')}}">
                        </div>
                        <div id="tab-6" class="img bg-img" data-background="{{asset('assets/imgs/portfolio/gallery/3.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sub-bg right">
                    <div class="cont active" data-tab="tab-1">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/1.jpg')}}" alt="event">
                        </div>
                        <span class="sub-title mb-15">01.Events</span>
                        <h2 class="mb-15">Events & Communications</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>We are specialized in Corporate Events, Award Show , Exhibition-Fair , Corporate
                                    Meets , Beauty Pageant , Brand-Product Launch etc...</p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('asquare-events')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont" data-tab="tab-2">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/2.jpg')}}" alt="films-entertainment">
                        </div>
                        <span class="sub-title mb-15">02. Production</span>
                        <h2 class="mb-15">Asquare Films & Entertainments</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>Asquare Films and Entertainments is an audio visual production company which is
                                    diversified into the streams of Short films, Video Portfolios, Music Albums and
                                    other digital contents.</p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('filmsentertainment')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont" data-tab="tab-3">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/3.jpg')}}" alt="wedding">
                        </div>
                        <span class="sub-title mb-15">03. Wedding Management</span>
                        <h2 class="mb-15">Asquare Wedding</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>When it comes to weddings, we understand the significance of your special day. Our
                                    wedding photography and videography services capture the essence of love, joy, and
                                    cherished memories, creating timeless treasures that you can revisit for a lifetime
                                </p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('asquare-wedding')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont" data-tab="tab-4">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/1.jpg')}}" alt="asquare-photoz">
                        </div>
                        <span class="sub-title mb-15">04. Photography</span>
                        <h2 class="mb-15">Asquare Photoz</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>Asquare PhotoZ a newly established company, is dedicated to the art of capturing
                                    moments and preserving memories through the lens. With a passion for photography and
                                    a keen eye for detail, we strive to provide exceptional services that exceed
                                    expectations.</p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('asquare-photoz')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont" data-tab="tab-5">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/2.jpg')}}" alt="kolkata-studios">
                        </div>
                        <span class="sub-title mb-15">05. Kolkata Studios</span>
                        <h2 class="mb-15">Kolkata Studios</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>With our studios equipped with state-of-the-art technology, we provide a creative space for artists, content creators, and professionals to bring their ideas to life. Whether it's a photo shoot, film production, or live performance, our studios offer a versatile environment tailored to your unique needs.</p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('kolkata-studios')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont" data-tab="tab-6">
                        <div class="img-hiden">
                            <img src="{{asset('assets/imgs/portfolio/gallery/3.jpg')}}" alt="asquare-digital">
                        </div>
                        <span class="sub-title mb-15">06. Digital Marketing</span>
                        <h2 class="mb-15">Asquare Digital</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <p>In the digital realm, our expert marketers employ strategic techniques to elevate your brand and connect with your target audience. Through innovative digital marketing strategies, we amplify your online presence, helping you stand out in the ever-evolving digital landscape.</p>
                                <div class="vew-all mt-50 ml-25">
                                    <a href="{{url('asquare-digital')}}" class="sub-title">
                                        Explore More
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




     <div class="container text-center mt-4 pt-4">
        <div class="row">
            <h2>
                Portfolios to watch out
            </h2>
        </div>
    </div>
    <section class="works thecontainer">

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/01.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Events & Communications</span>
                        <h5>Zee Saregamapa Event</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2022</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/02.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Asquare Wedding</span>
                        <h5>Sangeet</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2021</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/03.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>New Gadgets</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/04.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Digital Platform</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/05.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Branding Process</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('assets/imgs/portfolio/4/06.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Branding Process</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>
    </section> 

</main>

@endsection