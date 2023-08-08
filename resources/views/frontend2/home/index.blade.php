@extends('frontend.layout.app')
@section('mainsection')


<div class="cs-hero cs-style3 cs-type1 cs-bg cs-fixed_bg cs-shape_wrap_1" data-src="{{ asset('assets/img/asquare/fb/kolkataphotos-bg.webp') }}"
  id="home">
  <div class="container">
    <div class="cs-hero_text">
      <h1 class="cs-hero_title wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">Welcome to Asquare Team
        <br> India's Leading Events Brand
      </h1>
      <div class="cs-hero_subtitle">We are 360 degree agency showcasing our expertise</div>
      <a href="{{ url('/contact') }}" class="cs-btn cs-style1 cs-type1">
        <span>Contact</span>
        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
            fill="currentColor" />
        </svg>
      </a>
    </div>
  </div>
  <div class="cs-hero_highlite cs-primary_color cs-accent_color cs-center">
    <img src="assets/img/asquare/logo/logomain.png" alt="Portfolio" width="120px">
    <div class="cs-round_img cs-center"><img src="{{asset('assets/img/asquare/rotation.webp')}}" alt="Circle"></div>
  </div>
  <div class="cs-hero_social_wrap cs-left_side cs-primary_font cs-primary_color">
    <div class="cs-hero_social_title">Follow Us</div>
    <ul class="cs-hero_social_links">
      <li><a href="">Facebook</a></li>
      <li><a href="">Instagram</a></li>
    </ul>
  </div>
</div>
<!-- End Hero -->
<!-- Start FunFact -->
<section>
  <div class="container">
    <div class="cs-funfact_wrap cs-type1">
      <div class="cs-funfact_shape" data-src="assets/img/funfact_shape_bg.svg"></div>
      <div class="cs-funfact_left">
        <div class="cs-funfact_heading">
          <h2>Our fun fact</h2>
          <p> Together, we strive to create captivating moments, unforgettable experiences, and everlasting memories.
            Join us as we embark on a journey of imagination, artistry, and boundless creativity. </p>
        </div>
      </div>
      <div class="cs-funfact_right">
        <div class="cs-funfacts">
          <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
              <span data-count-to="40" class="odometer"></span>K
            </div>
            <div class="cs-funfact_text">
              <span class="cs-accent_color">+</span>
              <p>Global Happy Clients</p>
            </div>
          </div>
          <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
              <span data-count-to="50" class="odometer"></span>K
            </div>
            <div class="cs-funfact_text">
              <span class="cs-accent_color">+</span>
              <p>Project Completed</p>
            </div>
          </div>
          <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
              <span data-count-to="245" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
              <span class="cs-accent_color">+</span>
              <p>Team Members</p>
            </div>
          </div>
          <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
              <span data-count-to="550" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
              <span class="cs-accent_color">+</span>
              <p>Digital products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End FunFact -->
<!-- Start Service Section -->

<!-- End Service Section -->


<section class="mt-5">
  <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
      <h3 class="cs-section_subtitle">Highlights</h3>
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Asquare Highlights</h2>
    </div>
  </div>
  <div class="cs-height_90 cs-height_lg_45"></div>
  <div class="container">
    <div class="cs-iconbox_3_list">
      <div class="cs-hover_tab active">
        <a href="{{url('/eventscommunication')}}" class="cs-iconbox cs-style3">
          <div class="cs-image_layer cs-style1 cs-size_md">
            <div class="cs-image_layer_in">
              <img src="{{ asset('assets/img/asquare/home/home-event.webp') }}" alt="Image" class="w-100 cs-radius_15">
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
            <h2 class="cs-iconbox_title">Asquare Events</h2>
            <div class="cs-iconbox_subtitle">We are specialized in Corporate Events, Award Show , Exhibition-Fair ,
              Corporate Meets , Beauty
              Pageant , Brand-Product Launch etc...</div>
          </div>
        </a>
      </div>
      <div class="cs-hover_tab">
        <a href="{{url('/filmsentertaiment')}}" class="cs-iconbox cs-style3">
          <div class="cs-image_layer cs-style1 cs-size_md">
            <div class="cs-image_layer_in">
              <img src="{{ asset('assets/img/asquare/home/home-film.webp') }}" alt="Image" class="w-100 cs-radius_15">
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
            <h2 class="cs-iconbox_title">Asquare Films</h2>
            <div class="cs-iconbox_subtitle">Asquare Films and Entertainments is an audio visual production company
              which is
              diversified into the streams of Short films, Video Portfolios, Music Albums and other
              digital contents.</div>
          </div>
        </a>
      </div>
      <div class="cs-hover_tab">
        <a href="{{url('/asquare-wedding')}}" class="cs-iconbox cs-style3">
          <div class="cs-image_layer cs-style1 cs-size_md">
            <div class="cs-image_layer_in">
              <img src="{{ asset('assets/img/asquare/home/home-wedding.webp') }}" alt="Image"
                class="w-100 cs-radius_15">
            </div>
          </div>
          <span href="{{url('/asquare-wedding')}}" class="cs-iconbox_icon cs-center">
            <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z"
                fill="currentColor" />
            </svg>
          </span>
          <div class="cs-iconbox_in">
            <h2 class="cs-iconbox_title">Asquare Wedding</h2>
            <div class="cs-iconbox_subtitle">When it comes to weddings, we understand the significance of your special
              day. Our wedding photography and videography services capture the essence of love, joy, and cherished
              memories, creating timeless treasures that you can revisit for a lifetime.

            </div>
          </div>
        </a>
      </div>
      <div class="cs-hover_tab">
        <a href="{{url('/kolkatastudios')}}" class="cs-iconbox cs-style3">
          <div class="cs-image_layer cs-style1 cs-size_md">
            <div class="cs-image_layer_in">
              <img src="{{ asset('assets/img/asquare/home/home-studio.webp') }}" alt="Image" class="w-100 cs-radius_15">
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
            <h2 class="cs-iconbox_title">Asquare Studio</h2>
            <div class="cs-iconbox_subtitle">With our studios equipped with state-of-the-art technology, we provide a
              creative space for artists, content creators, and professionals to bring their ideas to life. Whether it's
              a photo shoot, film production, or live performance, our studios offer a versatile environment tailored to
              your unique needs.

            </div>
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
      <h3 class="cs-section_subtitle">Services</h3>
      <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Services</h2>
    </div>
  </div>
</section>
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Project Section -->
<div class="cs-portfolio cs-style2">
  <div class="cs-gradient_shape"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="cs-portfolio_img">
          <h3 class="cs-portfolio_img_title"> Events & Communication </h3>
          <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
            <img src="{{ asset('assets/img/asquare/home/home-event-big.webp') }}" alt="Portfolio" class="cs-w100">
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 offset-xl-1">
        <div class="cs-height_0 cs-height_lg_35"></div>
        <div class="cs-section_heading cs-style1">

          <h2 class="cs-section_title"> Events & Communication </h2>
          <div class="cs-height_45 cs-height_lg_20"></div>
          <p>We are specialized in Corporate Events, Award Show , Exhibition-Fair , Corporate Meets , Beauty Pageant ,
            Brand-Product Launch etc...</p>
          <a href="portfolio-details.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
            data-wow-delay="0.2s">
            <span>See Details</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>
<div class="cs-portfolio cs-style2 cs-type1">
  <div class="cs-gradient_shape"></div>
  <div class="container">
    <div class="row align-items-center cs-column_reverse_lg">
      <div class="col-xl-5 col-lg-6">
        <div class="cs-height_0 cs-height_lg_35"></div>
        <div class="cs-section_heading cs-style1 ">

          <h2 class="cs-section_title"> Film & Communications </h2>
          <div class="cs-height_45 cs-height_lg_20"></div>
          <p>Asquare Films and Entertainments is an audio visual production company which is diversified into the
            streams of Short films, Video Portfolios, Music Albums and other digital contents.</p>
          <a href="portfolio-details.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
            data-wow-delay="0.2s">
            <span>See Details</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-lg-6 offset-xl-1">
        <div class="cs-portfolio_img">
          <h3 class="cs-portfolio_img_title"> Film & Communications </h3>
          <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
            <img src="{{ asset('assets/img/asquare/home/home-film-big.webp') }}" alt="Portfolio" class="cs-w100">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>
<div class="cs-portfolio cs-style2">
  <div class="cs-gradient_shape"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="cs-portfolio_img">
          <h3 class="cs-portfolio_img_title"> Kolkata Photos </h3>
          <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
            <img src="{{ asset('assets/img/asquare/home/home-photo-big.webp') }}" alt="Portfolio" class="cs-w100">
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 offset-xl-1">
        <div class="cs-height_0 cs-height_lg_35"></div>
        <div class="cs-section_heading cs-style1 ">

          <h2 class="cs-section_title"> Kolkata Photos </h2>
          <div class="cs-height_45 cs-height_lg_20"></div>
          <p>Asquare PhotoZ a newly established company, is dedicated to the art of capturing moments and preserving
            memories through the lens. With a passion for photography and a keen eye for detail, we strive to provide
            exceptional services that exceed expectations.</p>
          <a href="portfolio-details.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
            data-wow-delay="0.2s">
            <span>See Details</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>
<div class="cs-portfolio cs-style2 cs-type1">
  <div class="cs-gradient_shape"></div>
  <div class="container">
    <div class="row align-items-center cs-column_reverse_lg">
      <div class="col-xl-5 col-lg-6">
        <div class="cs-height_0 cs-height_lg_35"></div>
        <div class="cs-section_heading cs-style1 ">

          <h2 class="cs-section_title"> Kolkata Studios</h2>
          <div class="cs-height_45 cs-height_lg_20"></div>
          <p>With our studios equipped with state-of-the-art technology, we provide a creative space for artists,
            content creators, and professionals to bring their ideas to life.</p>
          <a href="portfolio-details.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
            data-wow-delay="0.2s">
            <span>See Details</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-lg-6 offset-xl-1">
        <div class="cs-portfolio_img">
          <h3 class="cs-portfolio_img_title"> Kolkata Studios</h3>
          <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
            <img src="{{ asset('assets/img/asquare/home/home-studio-big.webp') }}" alt="Portfolio" class="cs-w100">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cs-height_145 cs-height_lg_80"></div>
<div class="cs-portfolio cs-style2">
  <div class="cs-gradient_shape"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="cs-portfolio_img">
          <h3 class="cs-portfolio_img_title"> Digital Marketing </h3>
          <div class="cs-portfolio_img_in cs-shine_hover_1 cs-radius_5">
            <img src="{{ asset('assets/img/asquare/home/home-digital-big.webp') }}" alt="Portfolio" class="cs-w100">
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 offset-xl-1">
        <div class="cs-height_0 cs-height_lg_35"></div>
        <div class="cs-section_heading cs-style1 ">
          <h3 class="cs-section_subtitle">Service 05</h3>
          <h2 class="cs-section_title"> Digital Marketing</h2>
          <div class="cs-height_45 cs-height_lg_20"></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam hic, aspernatur ab quisquam
            consectetur!</p>
          <a href="portfolio-details.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s"
            data-wow-delay="0.2s">
            <span>See Details</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                fill="currentColor"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>








<!-- Start Latest Project -->

<!-- End Latest Project -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start gallery Text -->


<div class="container">
  <div class="cs-portfolio_1_heading">
    <div class="cs-section_heading cs-style1">
      <h3 class="cs-section_subtitle">Portfolio</h3>
      <h2 class="cs-section_title">Asquare Portfolio</h2>
    </div>
    <div class="cs-isotop_filter cs-style1">
      <ul class="cs-mp0 cs-center">
        <li class="active">
          <a href="#" data-filter="*">All</a>
        </li>
        <li>
          <a href="#" data-filter=".wedding">Events</a>
        </li>
        <li>
          <a href="#" data-filter=".portrait">Films</a>
        </li>
        <li>
          <a href="#" data-filter=".fashion">Kolkata Photos</a>
        </li>
        <li>
          <a href="#" data-filter=".commercial">Kolkata Studios</a>
        </li>
        <li>
          <a href="#" data-filter=".landscape">Wedding</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="cs-height_90 cs-height_lg_45"></div>
</div>
<div class="container-fluid">
  <div class="container-fluid">
    <div class="cs-isotop cs-style1 cs-isotop_col_4 cs-has_gutter_24 cs-lightgallery">
      <div class="cs-grid_sizer"></div>
      <div class="cs-isotop_item fashion wedding">
        <a href="{{ asset('assets/img/asquare/fb/portfolio/concert-1.webp') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size1 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/portfolio/concert-1.webp') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg">
            </div>
           
            <div class="cs-portfolio_subtitle">View Large
            </div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item wedding  short_film">
        <a href="{{ asset('assets/img/asquare/fb/portfolio/event11.jpg') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/portfolio/event11.jpg') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item wedding fashion">
        <a href="{{ asset('assets/img/asquare/fb/event7.jpg') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size1 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/event7.jpg') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item portrait">
        <a href="{{ asset('assets/img/asquare/fb/film/film6.jpg') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/film/film6.jpg') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item portrait">
        <a href="{{ asset('assets/img/asquare/fb/film/documentary-short.webp') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/film/documentary-short.webp') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item commercial fashion">
        <a href="{{ asset('assets/img/asquare/fb/portfolio/event14.jpg') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/portfolio/event14.jpg') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item commercial short_film">
        <a href="{{ asset('assets/img/asquare/fb/studio/classical-concert-2.webp') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/studio/classical-concert-2.webp') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item wedding">
        <a href="{{ asset('assets/img/asquare/fb/portfolio/event15.jpg') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size2 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/portfolio/event15.jpg') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item landscape short_film">
        <a href="{{ asset('assets/img/asquare/fb/wedding/wedding-choose.webp') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size1 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/wedding/wedding-choose.webp') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
      <div class="cs-isotop_item landscape  landscape">
        <a href="{{ asset('assets/img/asquare/fb/wedding/wedding-film.webp') }}" class="cs-portfolio cs-style1 cs-lightbox_item cs-size1 cs-type2">
          <div class="cs-portfolio_hover"></div>
          <span class="cs-plus"></span>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('assets/img/asquare/fb/wedding/wedding-film.webp') }}"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <div class="cs-portfolio_subtitle">View Large</div>
          </div>
        </a>
      </div>
      <!-- .cs-isotop_item -->
    </div>
  </div>
</div>


<!-- End gallery Text -->

<!-- End Video Block -->

<!-- End Blog Section -->
<!-- End Moving Text -->
<div class="cs-moving_text_wrap cs-bold cs-primary_font">
  <div class="cs-moving_text_in">
    <div class="cs-moving_text">Our reputed world wide partners</div>
    <div class="cs-moving_text">Our reputed world wide partners</div>

  </div>

</div>
<div class="cs-height_100 cs-height_lg_70"></div>




<div class="container ">

  <section class="customer-logos slider as-cs-lo-bg">
    <div class="slide  new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/canara.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/anchor.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/euro-kids.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/karma.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/kotak.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/maxlife.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/spen.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/success.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/svf.jpg') }}">
    </div>
    <div class="slide new-bg-remove-as">
      <img src="{{ asset('assets/img/asquare/clients/zee.jpg') }}">
    </div>
  </section>









  <!-- Start Partner Logo -->
  <!-- <div class="container">
  <div class="cs-partner_logo_wrap">
    <div class="cs-partner_logo">
      <img src="assets/img/partner_1.svg" alt="Partner" />
    </div>
    <div class="cs-partner_logo">
      <img src="assets/img/partner_2.svg" alt="Partner" />
    </div>
    <div class="cs-partner_logo">
      <img src="assets/img/partner_3.svg" alt="Partner" />
    </div>
    <div class="cs-partner_logo">
      <img src="assets/img/partner_4.svg" alt="Partner" />
    </div>
    <div class="cs-partner_logo">
      <img src="assets/img/partner_5.svg" alt="Partner" />
    </div>
  </div>
</div> -->
  <!-- End Partner Logo -->
  <div class="cs-height_130 cs-height_lg_70"></div>
  <!-- Start CTA -->
  <section>
    <div class="container">
      <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="assets/img/cta_bg.jpeg">
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-cta_in">
          <h2 class="cs-cta_title cs-semi_bold cs-m0"> Let’s disscuse make <br />something <i>cool</i> together </h2>
          <div class="cs-height_70 cs-height_lg_30"></div>
          <a href="{{url('/partner')}}" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <span>Become a Partner</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z"
                fill="currentColor" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  @endsection