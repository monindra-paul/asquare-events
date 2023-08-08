@extends('frontend.layout.app')
@section('mainsection')


<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('assets/img/asquare/fb/wedding/wedding-bg.webp') }}">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Asquare Wedding</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active">Asquare Wedding</li>
            </ol>
        </div>
    </div>
</div>

<div class="cs-height_50 cs-height_lg_20"></div>

<div class="container">
    <h2 class="cs-font_38 text-center cs-m0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Asquare Wedding
    </h2>
    <div class="row">
        <div class="col-md-8">
            <div class="cs-height_60 cs-height_lg_45">
            </div>

            <p class="cs-m0 ">When it comes to weddings, we understand the significance of your special day. Our wedding
                photography and videography services capture the essence of love, joy, and cherished memories, creating
                timeless treasures that you can revisit for a lifetime.


            </p>
            <div class="cs-height_65 cs-height_lg_45"></div>
        </div>
        <div class="col-md-4 p-5">
            <img src="{{('assets/img/asquare/Asquare-Wedding.png')}}" alt="" srcset="">
        </div>
    </div>
</div>
<section>
    <!-- <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h3 class="cs-section_subtitle">Wedding</h3> -->
    <h2 class="cs-section_title wow fadeInUp text-center" data-wow-duration="0.8s" data-wow-delay="0.2s">Different
        types of Wedding
        Events
    </h2>
    <!--<p>When it comes to weddings, we understand the significance of your special day. Our wedding photography and videography services capture the essence of love, joy, and cherished memories, creating timeless treasures that you can revisit for a lifetime.
      </p>
    </div>
  </div> -->
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="container">
        <div class="cs-iconbox_3_list">
            <div class="cs-hover_tab active">
                <a href="#" class="cs-iconbox cs-style3">
                    <div class="cs-image_layer cs-style1 cs-size_md">
                        <div class="cs-image_layer_in">
                            <img src="{{asset('assets/img/asquare/fb/wedding/pre-wedding.webp')}}" alt="Image" class="w-100 cs-radius_15">
                        </div>
                    </div>
                    <span class="cs-iconbox_icon cs-center">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <div class="cs-iconbox_in">
                        <h2 class="cs-iconbox_title">Pre Wedding Shoot</h2>
                        <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium
                            lorema doloremque laudantium, totam rem.</div>
                    </div>
                </a>
            </div>
            <div class="cs-hover_tab">
                <a href="#" class="cs-iconbox cs-style3">
                    <div class="cs-image_layer cs-style1 cs-size_md">
                        <div class="cs-image_layer_in">
                            <img src="{{asset('assets/img/asquare/fb/wedding/wedding.webp')}}" alt="Image" class="w-100 cs-radius_15">
                        </div>
                    </div>
                    <span class="cs-iconbox_icon cs-center">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <div class="cs-iconbox_in">
                        <h2 class="cs-iconbox_title">Wedding Photoshoot</h2>
                        <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium
                            lorema doloremque laudantium, totam rem.</div>
                    </div>
                </a>
            </div>
            <div class="cs-hover_tab">
                <a href="#" class="cs-iconbox cs-style3">
                    <div class="cs-image_layer cs-style1 cs-size_md">
                        <div class="cs-image_layer_in">
                            <img src="{{asset('assets/img/asquare/fb/wedding/wedding-film.webp')}}" alt="Image" class="w-100 cs-radius_15">
                        </div>
                    </div>
                    <span href="#" class="cs-iconbox_icon cs-center">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <div class="cs-iconbox_in">
                        <h2 class="cs-iconbox_title">Wedding Films</h2>
                        <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium
                            lorema doloremque laudantium, totam rem.</div>
                    </div>
                </a>
            </div>
            <div class="cs-hover_tab">
                <a href="#" class="cs-iconbox cs-style3">
                    <div class="cs-image_layer cs-style1 cs-size_md">
                        <div class="cs-image_layer_in">
                            <img src="{{asset('assets/img/asquare/fb/wedding/wedding-diaries.webp')}}" alt="Image" class="w-100 cs-radius_15">
                        </div>
                    </div>
                    <span href="service-details.html" class="cs-iconbox_icon cs-center">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <div class="cs-iconbox_in">
                        <h2 class="cs-iconbox_title">Wedding Diaries</h2>
                        <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium
                            lorema doloremque laudantium, totam rem.</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="cs-height_50 cs-height_lg_50"></div>
    </div>
</section>



<section>
    <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
            <h3 class="cs-section_subtitle">Values</h3>
            <h2 class="cs-section_title">Our Values</h2>

        </div>
        <div class="cs-height_90 cs-height_lg_45"></div>
        <div class="row">
            <div class="col-lg-3">
                <div class="cs-iconbox cs-style2 text-center">
                    <div class="cs-iconbox_icon">
                        <svg width="58" height="57" viewBox="0 0 58 57" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="48.5" height="48.5" rx="4.25" stroke="#999696"
                                stroke-width="1.5" stroke-dasharray="3 3" />
                            <rect x="8" y="7" width="50" height="50" rx="5" fill="#FF4A17" />
                        </svg>
                    </div>
                    <h2 class="cs-iconbox_title">Commitment</h2>
                </div>
                <div class="cs-height_30 cs-height_lg_35"></div>
            </div>
            <div class="col-lg-3">
                <div class="cs-iconbox cs-style2 text-center">
                    <div class="cs-iconbox_icon">
                        <svg width="58" height="57" viewBox="0 0 58 57" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24.25" stroke="#999696" stroke-width="1.5"
                                stroke-dasharray="3 3" />
                            <circle cx="33" cy="32" r="25" fill="#FF4A17" />
                        </svg>
                    </div>
                    <h2 class="cs-iconbox_title">Creativity</h2>
                </div>
                <div class="cs-height_30 cs-height_lg_35"></div>
            </div>
            <div class="col-lg-3">
                <div class="cs-iconbox cs-style2 text-center">
                    <div class="cs-iconbox_icon">
                        <svg width="58" height="57" viewBox="0 0 58 57" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24.25" stroke="#999696" stroke-width="1.5"
                                stroke-dasharray="3 3" />
                            <circle cx="33" cy="32" r="25" fill="#FF4A17" />
                        </svg>
                    </div>
                    <h2 class="cs-iconbox_title">Dedication</h2>
                </div>
                <div class="cs-height_30 cs-height_lg_35"></div>
            </div>
            <div class="col-lg-3">
                <div class="cs-iconbox cs-style2 text-center">
                    <div class="cs-iconbox_icon">
                        <svg width="57" height="54" viewBox="0 0 57 54" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.6803 4.01786L24.2268 1.33929L24.8763 1.71429L25 1.5L25.1237 1.71429L25.7732 1.33929L27.3197 4.01786L26.6702 4.39286L28.2167 7.07143L28.8662 6.69643L30.4127 9.375L29.7631 9.75L31.3096 12.4286L31.9591 12.0536L33.5056 14.7321L32.8561 15.1071L34.4026 17.7857L35.0521 17.4107L36.5986 20.0893L35.949 20.4643L37.4955 23.1429L38.145 22.7679L39.6915 25.4464L39.042 25.8214L40.5885 28.5L41.238 28.125L42.7845 30.8036L42.1349 31.1786L43.6814 33.8571L44.3309 33.4821L45.8774 36.1607L45.2279 36.5357L45.3516 36.75H45.1042V37.5H42.0112V36.75H38.9183V37.5H35.8253V36.75H32.7324V37.5H29.6394V36.75H26.5465V37.5H23.4535V36.75H20.3606V37.5H17.2676V36.75H14.1747V37.5H11.0817V36.75H7.98879V37.5H4.89584V36.75H4.6484L4.77212 36.5357L4.1226 36.1607L5.66908 33.4821L6.3186 33.8571L7.86507 31.1786L7.21555 30.8036L8.76202 28.125L9.41154 28.5L10.958 25.8214L10.3085 25.4464L11.855 22.7679L12.5045 23.1429L14.051 20.4643L13.4014 20.0893L14.9479 17.4107L15.5974 17.7857L17.1439 15.1071L16.4944 14.7321L18.0409 12.0536L18.6904 12.4286L20.2369 9.75L19.5873 9.375L21.1338 6.69643L21.7833 7.07143L23.3298 4.39286L22.6803 4.01786Z"
                                stroke="#999696" stroke-width="1.5" stroke-dasharray="3 3" />
                            <path d="M32 4L53.6506 41.5H10.3494L32 4Z" fill="#FF4A17" />
                        </svg>
                    </div>
                    <h2 class="cs-iconbox_title">Loyalty</h2>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_35"></div>
        </div>
    </div>

</section>



<section>
    <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
            <h3 class="cs-section_subtitle">Latest Wedding Events</h3>
            <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Portfolio to
                <br>explore
                recent Wedding Shoots
            </h2>
        </div>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="cs-slider cs-style3 cs-gap-24">
        <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="1"
            data-slides-per-view="1">
            <div class="cs-slider_wrapper">
                <div class="cs-slide">
                    <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                        <div class="cs-portfolio_hover"></div>
                        <div class="cs-portfolio_bg" data-src="assets/img/portfolio_1.jpeg"></div>
                        <div class="cs-portfolio_info">
                            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                            <h2 class="cs-portfolio_title">Colorful Art Work</h2>

                        </div>
                    </a>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                        <div class="cs-portfolio_hover"></div>
                        <div class="cs-portfolio_bg" data-src="assets/img/portfolio_2.jpeg"></div>
                        <div class="cs-portfolio_info">
                            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                            <h2 class="cs-portfolio_title">Colorful Art Work</h2>

                        </div>
                    </a>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                        <div class="cs-portfolio_hover"></div>
                        <div class="cs-portfolio_bg" data-src="assets/img/portfolio_3.jpeg"></div>
                        <div class="cs-portfolio_info">
                            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                            <h2 class="cs-portfolio_title">Colorful Art Work</h2>

                        </div>
                    </a>
                </div>
                <!-- .cs-slide -->
            </div>
        </div>
        <!-- .cs-slider_container -->
        <div class="cs-pagination cs-style1"></div>
    </div>
    <!-- .cs-slider -->
</section>

<div class="cs-height_50 cs-height_lg_50"></div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="cs-image_layer cs-style1">
                    <div class="cs-image_layer_in">
                        <img src="{{ asset('assets/img/asquare/fb/wedding/wedding-choose.webp') }}" alt="Image" class="w-100 cs-radius_15">
                    </div>
                </div>
                <div class="cs-height_0 cs-height_lg_40"></div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">Why Hire Asquare Wedding?</h3>
                    <h2 class="cs-section_title">Highly experienced pepole with us</h2>
                    <div class="cs-height_30 cs-height_lg_20"></div>
                    <p class="cs-m0">
                        We are professioanl , who knows the required skills to make an event happening.

                        We will serve you the perfect stage design along with lighting , based on the theme of your
                        event at best rate.

                        We are highly professional , creative and hard working team of full time critical thinkers
                        and problem solver of your events.

                        We are through a safe pair of hands to manage your event.
                    </p>
                    <div class="cs-height_15 cs-height_lg_15"></div>

                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-separator cs-accent_bg"></div>
                    <div class="cs-height_25 cs-height_lg_0"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="cs-height_50 cs-height_lg_50"></div>





@endsection