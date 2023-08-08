@extends('frontend.layout.app')
@section('mainsection')

<header class="header-startup full-height valign bord-thin-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="caption text-center mt-50">
                    <div class="sec-lg-head">
                        <h6 class="dot-titl-non mb-15">Asquare Digital</h6>
                    </div>
                    <h1 class="fw-700 fz-80">We’re <span class="img-in-text icon-img-120 radius-30 bg-img" data-background="{{asset('assets/imgs/asquare/logo/asquaregra.png')}}"></span> innovative <span class="sub-font">digital </span> marketing
                        <span class="icon-img-60"><img src="assets/imgs/svg-assets/star.png" alt=""></span> strategies
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow-down main-bg">
        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-for-tablet">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.835489 6.51022L15.5607 6.51022L10.9081 1.85764C10.5179 1.46747 10.9555 1.24491 11.3626 0.837776C11.7697 0.430646 11.9923 -0.00687319 12.3825 0.383293L18.7406 6.74141C19.1307 7.13158 19.117 7.77791 18.7099 8.18504L12.0753 14.8196C11.6682 15.2267 11.371 14.7053 11.0739 14.4081C10.7767 14.111 10.2553 13.8138 10.6624 13.4067L15.5173 8.55182L0.792051 8.55182L0.835489 6.51022Z" fill="currentColor"></path>
        </svg>
    </div>
    <div class="bg-pattern-half bg-img opacity-5" data-background="assets/imgs/svg-assets/patern-bg.png"></div>
    <div class="bg-pattern-half bg-img opacity-5" data-background="assets/imgs/svg-assets/patern-bg.png"></div>
</header>



<section class="skills-exp section-padding sub-bg" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-lg-head mb-80">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-10 wow fadeIn">Services</h6>
                        <h2 class="fz-50 d-rotate wow">
                            <span class="rotate-text">Asquare Most Specilized Services</span>
                        </h2>
                    </div>
                </div>
                <div class="skill-item d-flex justify-content-between md-mb50">
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="{{asset('assets/imgs/asquare/social/fb.png')}}" alt="dd">
                        </div>
                        <span class="mt-15">Facebook</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="{{asset('assets/imgs/asquare/social/insta.png')}}" alt="">
                        </div>
                        <span class="mt-15">Instagram</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="{{asset('assets/imgs/asquare/social/google.png')}}" alt="">
                        </div>
                        <span class="mt-15">Google</span>
                    </div>
                    <div class="item text-center">
                        <div class="icon-img-60 m-auto">
                            <img src="{{asset('assets/imgs/asquare/social/youtube.png')}}" alt="">
                        </div>
                        <span class="mt-15">Youtube</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 valign">
                <div class="exp-items full-width">
                    <div class="item d-flex pb-30 pt-30 mb-30 bord-thin-top bord-thin-bottom">
                        <div class="title">
                            <h6>Google SEO</h6>                           
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">                               
                                    <i class="fas fa-arrow-right"></i>                                
                            </span>                           
                        </div>
                    </div>
                    <div class="item d-flex pb-30 mb-30 bord-thin-bottom">
                        <div class="title">
                            <h6>Facebook Marketing</h6>                          
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">                               
                                    <i class="fas fa-arrow-right"></i>                                
                            </span>                            
                        </div>
                    </div>
                    <div class="item d-flex pb-30 bord-thin-bottom">
                        <div class="title">
                            <h6>Instagram Marketing</h6>                         
                        </div>
                        <div class="date ml-auto text-right">
                            <span class="icon">                               
                                    <i class="fas fa-arrow-right"></i>                               
                            </span>                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-tab section-padding">
    <div class="container">
        <div class="row" id="tabs">
            <div class="col-lg-6 order2">
                <div class="serv-tab-cont mb-80">
                    <div class="tab-content current" id="tabs-1">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('assets/imgs/sass-img/serv/1.jpg')}}" alt="">
                            </div>
                            <div class="cont sub-bg">
                                <div class="icon-img-60 mb-40">
                                    <img src="{{asset('assets/imgs/serv-icons/0.png')}}" alt="">
                                </div>
                                <div class="text">
                                    <p>Team Asquare is well known for its SEO services. We provide best and low cost SEO services & Team Asquare is famous for its SEO service. We use modern architectures, technical systems and trending technologies to perform best.

                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tabs-2">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('assets/imgs/sass-img/serv/2.jpg')}}" alt="">
                            </div>
                            <div class="cont sub-bg">
                                <div class="icon-img-60 mb-40">
                                    <img src="{{asset('assets/imgs/serv-icons/1.png')}}" alt="">
                                </div>
                                <div class="text">
                                    <p>Team Asquare is well known for its SEO services. We provide best and low cost SEO services & Team Asquare is famous for its SEO service. We use modern architectures, technical systems and trending technologies to perform best.

                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tabs-3">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('assets/imgs/sass-img/serv/3.jpg')}}" alt="">
                            </div>
                            <div class="cont sub-bg">
                                <div class="icon-img-60 mb-40">
                                    <img src="{{asset('assets/imgs/serv-icons/2.png')}}" alt="">
                                </div>
                                <div class="text">
                                    <p>Team Asquare is well known for its SEO services. We provide best and low cost SEO services & Team Asquare is famous for its SEO service. We use modern architectures, technical systems and trending technologies to perform best.

                                    </p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tabs-4">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('assets/imgs/sass-img/serv/1.jpg')}}" alt="">
                            </div>
                            <div class="cont sub-bg">
                                <div class="icon-img-60 mb-40">
                                    <img src="assets/imgs/serv-icons/0.png" alt="">
                                </div>
                                <div class="text">
                                    <p>Team Asquare is well known for its SEO services. We provide best and low cost SEO services & Team Asquare is famous for its SEO service. We use modern architectures, technical systems and trending technologies to perform best.

                                    </p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 valign order1">
                <div class="serv-tab-link tab-links full-width md-mb50">
                    <div class="sec-lg-head mb-80">
                        <h6 class="dot-titl-non mb-15">Support</h6>
                        <p>We help you to go online and increase your conversion rate Better design
                            for
                            your
                            digital products. </p>
                    </div>
                    <ul class="rest">
                        <li class="item-link current mb-15" data-tab="tabs-1"><span>01</span>  Search Page Ranking</li>
                        <li class="item-link mb-15" data-tab="tabs-2"><span>02</span>  Website Ranking</li>
                        <li class="item-link mb-15" data-tab="tabs-3"><span>03</span>  Locality search result
                        </li>
                        <li class="item-link" data-tab="tabs-4"><span>04</span> 
                            Handle Social Media Platforms</li>
                    </ul>
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

@endsection