<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
    <meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Asquare Events</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/imgs/favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('showcase/assets/css/showcases.css')}}">




    <!-- <script>document.documentElement.className = "js";

        var supportsCssVars = function supportsCssVars() {
            var e,
                t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
        };

        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script> -->

</head>

<body class="sub-bg demo-1">


    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>A</span>
                <span>S</span>
                <span>Q</span>
                <span>U</span>
                <span>A</span>
                <span>R</span>
                <span>E</span>

            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor">
        <img src="{{asset('assets/imgs/asquare/logo/asquare25.png')}}" alt="cursor" srcset="">
    </div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    @include('frontend.common.header')
    @yield('mainsection')
    @include('frontend.common.footer')


    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

    <!-- plugins -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>

    <!-- custom scripts -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('showcase/assets/js/showcase1.js')}}"></script>



    <script src="{{asset('assets/js/hscroll.js')}}"></script>
    <script src="{{asset('assets/js/smoother-script.js')}}"></script>
    
    <script src="{{asset('assets/js/imgReveal/charming.min.js')}}"></script>
    <script src="{{asset('assets/js/imgReveal/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imgReveal/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/js/imgReveal/demo.js')}}"></script>

    <!-- custom scripts -->
    <!-- <script src="{{asset('assets/js/scripts.js')}}"></script> -->


</body>

</html>