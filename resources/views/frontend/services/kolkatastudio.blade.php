@extends('frontend.layout.app')
@section('mainsection')


<section class="intro-corp section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 valign">
                <div class="cont">
                    <div class="text ">
                        <h6 class="dot-titl-non mb-15 wow fadeIn " id="hi-as">Kolkata Studios</h6>
                        <h3>Asquare Studios is a ground breaking studio company set to revolutionize the world of entertainment.</h3>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-5 valign md-mb50">
                <div class="imgs mb-80">
                    <div class="img1">
                        <img src="{{asset('assets/imgs/arch/intro/sq1.jpg')}}" alt="">
                    </div>
                    <div class="img2">
                        <img src="{{asset('assets/imgs/asquare/fb/film/film4.jpg')}}" alt="cc">
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>



<div class="block-pattern">

    <div class="bg-pattern bg-img" data-background="{{asset('assets/imgs/patterns/bg-lines-1.svg')}}"></div>

    

    <!-- ==================== Start Services ==================== -->

    <section class="serv-box section-padding pt-0">
        <div class="container">
            <div class="sec-leter-head mb-80">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>A</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">We have AIM to push.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="serv-item md-mb50">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('assets/imgs/serv-icons/0.png')}}" alt="">
                        </div>
                        <h5 class="mb-20">Creativity</h5>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="serv-item md-mb50">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('assets/imgs/serv-icons/1.png')}}" alt="">
                        </div>
                        <h5 class="mb-20">Technology</h5>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="serv-item sm-mb50">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('assets/imgs/serv-icons/2.png')}}" alt="">
                        </div>
                        <h5 class="mb-20">Story Telling</h5>
                        
                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


</div>



<section class="portfolio sub-bg ">
    <div class="container">
        <div class="sec-leter-head mb-80">
            <div class="d-flex align-items-center">
                <div class="leter">
                    <h4>S</h4>
                </div>
                <div class="line"></div>
            </div>
            <div class="title">
                <h6 class="sub-title">Services.</h6>
                <p>With our studios equipped with state-of-the-art technology, we provide a creative space for artists, content creators, and professionals to bring their ideas to life.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="item md-mb50">
                    <div class="img">
                        <img src="{{asset('assets/imgs/arch/works/1.jpg')}}" alt="">
                    </div>
                    <div class="cont mt-30 d-flex">
                        <div>
                            <h6 class="line-height-1">Concerts</h6>
                            <p>Different types of Concerts</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 valign">
                <div class="item full-width">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="img">
                                <img src="{{asset('assets/imgs/arch/works/3.jpg')}}" alt="">
                            </div>
                            <div class="cont mt-30 d-flex">
                                <div>
                                    <h6 class="line-height-1">Editing & Dubbing</h6>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>



<section class="serv-img-reveal section-padding">
    <div class="container">
        <div class="sec-head mb-80">
            <div class="row">
                <div class="col-lg-8">
                  
                    <h2 class="d-slideup wow fz-50">
                        <span class="sideup-text">
                            <span class="up-text">Different types of Concerts</span>
                        </span>
                    </h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="full-width d-flex justify-content-end justify-end">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row md-marg content">
            <div class="col-lg-6">
                <div>
                    <ul class="rest">
                        <li class="block" data-fx="1">
                            <a href="project-details1.html" class="mb-30 pb-30 bord-thin-bottom full-width block__title" data-img="assets/imgs/serv-img/13.jpg">
                                <div class="d-flex align-items-center">
                                    <div class="mr-80">
                                        <span class="icon-img-50">
                                            <img src="{{asset('assets/imgs/serv-icons/0.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div>
                                        <h5>Classical Concerts</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="arrow">
                                            <span class="circle">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="block" data-fx="1">
                            <a href="project-details1.html" class="mb-30 pb-30 bord-thin-bottom full-width block__title" data-img="assets/imgs/serv-img/13.jpg">
                                <div class="d-flex align-items-center">
                                    <div class="mr-80">
                                        <span class="icon-img-50">
                                            <img src="{{asset('assets/imgs/serv-icons/1.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div>
                                        <h5>Festival Concerts</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="arrow">
                                            <span class="circle">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <ul class="rest">
                        <li class="block" data-fx="1">
                            <a href="project-details1.html" class="mb-30 pb-30 bord-thin-bottom full-width block__title" data-img="assets/imgs/serv-img/13.jpg">
                                <div class="d-flex align-items-center">
                                    <div class="mr-80">
                                        <span class="icon-img-50">
                                            <img src="{{asset('assets/imgs/serv-icons/0.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div>
                                        <h5>POP Concerts</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="arrow">
                                            <span class="circle">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container mt-80">
    <div class="row">
        <div class="col-12">
            <div class="caption">
                <h6 class="sub-title">Our Works</h6>
                <h1>Kolkata Studios</h1>
            </div>
        </div>
    </div>
</div>

<section class="portfolio section-padding pb-70">
    <div class="container-xxl">


        <div class="gallery">

            <div class="row masonry md-marg">

                <div class="col-lg-4 col-md-6 items web info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/1.jpg')}}" alt="image">
                            </div>
                        </a>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/v1.jpg')}}" alt="image">
                            </div>
                        </a>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 items brand info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/2.jpg')}}" alt="image">
                            </div>
                        </a>
                       
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 items web info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/v2.jpg')}}" alt="image">
                            </div>
                        </a>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 items brand info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/v3.jpg')}}" alt="image">
                            </div>
                        </a>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 items app info-overlay mb-50">
                    <div class="item-img o-hidden">
                        <a href="#0" class="imago wow">
                            <div class="inner wow">
                                <img src="{{asset('assets/imgs/works/grid2/4.jpg')}}" alt="image">
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


@endsection