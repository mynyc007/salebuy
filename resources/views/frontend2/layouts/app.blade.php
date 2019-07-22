<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}frontend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('/')}}frontend/img/favicon.png">
  <title>@yield('title', app_name())</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
{{-- ========single page slider============ --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
{{-- ========single page slider============ --}}
  <!-- CSS Files -->
  <style>
      #filter{
        background: #ffffff61;
        }

        #filter .card-title{
          color: #fff !important;
        }


        {{--  shop box  --}}
        .shop-md-2{
            margin-top:30px 
        }
        .shop {
            position: relative;
            overflow: hidden;
        }
        .shop .shop-img {
            position: relative;
            background-color: #E4E7ED;
            z-index: -1;
        }

        .shop .shop-body {
            position: absolute;
            top: -20px;
            width: 100%;
            padding: 3px;
            z-index: 10;
        }

        .shop .shop-body h3 {
            color: #fff;
            font-weight: 500;
            font-size: 2.5625rem
        }

        .shop:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0px;
            width: 60%;
            background: #9c27b0;
            opacity: 0.7;
            -webkit-transform: skewX(-45deg);
            -ms-transform: skewX(-45deg);
            transform: skewX(-45deg);
        }
       
        .shop:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 1px;
            width: 100%;
            background: #9c27b0;
            opacity: 0.7;
            -webkit-transform: skewX(-45deg) translateX(-100%);
            -ms-transform: skewX(-45deg) translateX(-100%);
            transform: skewX(-45deg) translateX(-100%);
        }

        {{--  shop-box-under-slider  --}}
        .under{
            margin-top: -28px
        }
        .right{
            margin-right: -30px
        }
        .under .col-md-4{
            max-width: 37%;
        }


        {{--  Left box menu  --}}
        .col-md-4 .left-box{
          margin-top: 60px;
        }
        .col-md-4 .left-box  .left{
          margin-left: -55px; 
        }

        {{--  tab search  --}}
        .col-md-4 .card-nav-tabs{
          margin-top: 60px; 
        }
        .col-md-4 .card-nav-tabs label{
          color: #fff;
        }
        .col-md-4 .card-nav-tabs .form-control{
          color: #fff;
          background: #6433827d;
        }

{{-- ===========SINGLE PAGE SLIDER====== --}}
.swiper-container {
  width: 100%;
  height: 300px;
  margin-left: auto;
  margin-right: auto;
}
.swiper-slide {
  background-size: cover;
  background-position: center;
}
.gallery-top {
  height: 80%;
  width: 100%;
}
.gallery-thumbs {
  height: 20%;
  box-sizing: border-box;
  padding: 10px 0;
}
.gallery-thumbs .swiper-slide {
  width: 25%;
  height: 100%;
  opacity: 0.4;
}
.gallery-thumbs .swiper-slide-active {
  opacity: 1;
}
{{-- ===========SINGLE PAGE SLIDER====== --}}
     
       
    </style>
    <link href="{{asset('/')}}frontend/css/my.css" rel="stylesheet" />
  <link href="{{asset('/')}}frontend/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    @include('includes.partials.demo')

  <div id="app">
        @include('includes.partials.logged-in-as')

  {{--  ===============Nav=============            --}}
        @include('frontend2.includes.nav')
        
  {{--  ==============//=Nav=============            --}}

        {{--  bannr  --}}
        <div class=" header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('{{asset('/')}}frontend/img/bg2.jpg');">
          @yield('banner')
        </div>
        {{--  bannr  --}}

        
{{--  ==========Main Content=============  --}}
        <div class="main main-raised" style="background:#9c27b070">
          
          {{--  @include('includes.partials.messages')  --}}
          
          {{--  ======Eror=======  --}}
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>Error Alert:</b> Damn man! {{$error}}...
                        </div>
                    </div>
                    @endforeach
                </ul>
            @endif
          
          {{--  ======Error=======  --}}

          {{--  =========Success==========  --}}
          @if (Session::get('msg'))
          <div class="alert alert-success">
              <div class="container">
                <div class="alert-icon">
                  <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>Success Alert:</b> Yuhuuu! {{Session::get('msg')}}
              </div>
            </div>
          @endif
          
          {{--  =========Success==========  --}}

            @yield('content')
        </div>
              
              <footer class="footer" data-background-color="black">
                <div class="container">
                  <nav class="float-left">
                    <ul>
                      <li>
                        <a href="https://www.creative-tim.com">
                          Creative Tim
                        </a>
                      </li>
                      <li>
                        <a href="https://creative-tim.com/presentation">
                          About Us
                        </a>
                      </li>
                      <li>
                        <a href="http://blog.creative-tim.com">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a href="https://www.creative-tim.com/license">
                          Licenses
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                  </div>
                </div>
              </footer>
              <!--   Core JS Files   -->
              <script src="{{asset('/')}}frontend/js/core/jquery.min.js" type="text/javascript"></script>
              <script src="{{asset('/')}}frontend/js/core/popper.min.js" type="text/javascript"></script>
              <script src="{{asset('/')}}frontend/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
              <script src="{{asset('/')}}frontend/js/plugins/moment.min.js"></script>
              <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
              <script src="{{asset('/')}}frontend/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
              <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
              <script src="{{asset('/')}}frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
              <!--  Google Maps Plugin    -->
              <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
              <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
              <script src="{{asset('/')}}frontend/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
              <script>
                $(document).ready(function() {
                  //init DateTimePickers
                  materialKit.initFormExtendedDatetimepickers();
            
                  // Sliders Init
                  materialKit.initSliders();
                });
            
            
                function scrollToDownload() {
                  if ($('.section-download').length != 0) {
                    $("html, body").animate({
                      scrollTop: $('.section-download').offset().top
                    }, 1000);
                  }
                }
            
              </script>

              {{--  =========card slider=========  --}}
              
              <script>
                  
          $(document).ready(function() {
              $("#news-slider").owlCarousel({
                  items : 2,
                  itemsDesktop : [1199,2],
                  itemsMobile : [600,1],
                  pagination :true,
                  autoPlay : true
              });
              
              $("#news-slider2").owlCarousel({
                  items:3,
                  itemsDesktop:[1199,2],
                  itemsDesktopSmall:[980,2],
                  itemsMobile:[600,1],
                  pagination:false,
                  navigationText:false,
                  autoPlay:true
              });
              
              $("#news-slider3").owlCarousel({
                  items:3,
                  itemsDesktop:[1199,2],
                  itemsDesktopSmall:[1000,2],
                  itemsMobile:[700,1],
                  pagination:false,
                  navigationText:false,
                  autoPlay:true
              });
              
              $("#news-slider4").owlCarousel({
                  items:3,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[1000,2],
                  itemsMobile:[600,1],
                  pagination:false,
                  navigationText:false,
                  autoPlay:true
              });
              
              $("#news-slider5").owlCarousel({
                  items:3,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[1000,2],
                  itemsMobile:[650,1],
                  pagination:false,
                  navigationText:false,
                  autoPlay:true
              });
              
              $("#news-slider6").owlCarousel({
                  items : 3,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [600,1],
                  pagination:false,
                  navigationText:false
              });
              
              $("#news-slider7").owlCarousel({
                  items : 3,
                  itemsDesktop : [1199,3],
                  itemsDesktopSmall : [1000,2],
                  itemsMobile : [650,1],
                  pagination :false,
                  autoPlay : true
              });
              
              $("#news-slider8").owlCarousel({
                  items : 3,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [600,1],
                  autoPlay:true
              });
              
              $("#news-slider9").owlCarousel({
                  items : 3,
                  itemsDesktop:[1199,2],
                  itemsDesktopSmall:[980,2],
                  itemsTablet:[650,1],
                  pagination:false,
                  navigation:true,
                  navigationText:["",""]
              });
              
              $("#news-slider10").owlCarousel({
                  items : 4,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [600,1],
                  navigation:true,
                  navigationText:["",""],
                  pagination:true,
                  autoPlay:true
              });
              
              $("#news-slider11").owlCarousel({
                  items : 4,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [600,1],
                  pagination:true,
                  autoPlay:true
              });
              
              $("#news-slider12").owlCarousel({
                  items : 2,
                  itemsDesktop:[1199,2],
                  itemsDesktopSmall:[980,1],
                  itemsTablet: [600,1],
                  itemsMobile : [550,1],
                  pagination:true,
                  autoPlay:true
              });
              
              $("#news-slider13").owlCarousel({
                  navigation : false,
                  pagination : true,
                  items : 3,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [600,1],
                  navigationText : ["",""]
              });
              
              $("#news-slider14").owlCarousel({
                  items : 4,
                  itemsDesktop:[1199,3],
                  itemsDesktopSmall:[980,2],
                  itemsMobile : [550,1],
                  pagination:false,
                  autoPlay:true
              });
          });


          {{-- ========single page slider=========== --}}
                  var galleryTop = new Swiper('.gallery-top', {
                      spaceBetween: 10,
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                    var galleryThumbs = new Swiper('.gallery-thumbs', {
                      spaceBetween: 10,
                      centeredSlides: true,
                      slidesPerView: 'auto',
                      touchRatio: 0.2,
                      slideToClickedSlide: true,
                    });
                    galleryTop.controller.control = galleryThumbs;
                    galleryThumbs.controller.control = galleryTop;

          {{-- ========single page slider=========== --}}
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 

              {{--  ========//card slider==========  --}}
  </div><!-- #app -->
</body>

</html>
