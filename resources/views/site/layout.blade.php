<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Page Title -->
      <title>{{ config('app.name','laravel') }}</title>
      <!-- Favicon -->
      <link rel="icon" href="{{asset('front-end/classic-business/img/logoicon.png')}}">
      <!-- Bundle -->
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/bundle.min.css')}}">
      <!-- Plugin Css -->
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/jquery.fancybox.min.css')}}">
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/swiper.min.css')}}">
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/cubeportfolio.min.css')}}">
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/wow.css')}}">
      <!-- Slider Settings -->
      <link rel="stylesheet" href="{{asset('front-end/vendor/css/LineIcons.min.css')}}">
      <link rel="stylesheet" href="{{asset('front-end/classic-business/css/settings.css')}}">
      <!-- Style Sheet -->
      <link rel="stylesheet" href="{{asset('front-end/classic-business/css/style.css')}}">
   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="pre-loader">
        <div class="loader">
           <div></div>
           <div></div>
           <div></div>
        </div>
     </div>
<div>
<!-- Navbar Start -->
@include('site.body.header')
<!-- End Navbar -->

</div>


    @yield('content')








      <!-- FOOTER START -->
      <footer class="no-gutters" style="padding-top:30px; padding-bottom: 20px;">
         <div class="container">
            <div class="row justify-content-center mb-5">
               <div class="col col-lg-2 text-center"><a class="fword rounded-pill" href="/">Home</a></div>
               <div class="col col-lg-2 text-center"><a class="fword rounded-pill" href="/about">About Us</a></div>
               <div class="col col-lg-2 text-center"><a class="" href="/categories"><span class="rounded-pill">Products & Services</span></a></div>
               <div class="col col-lg-2 text-center"><a class="fword rounded-pill" href="/#brand">Brands</a></div>
               <div class="col col-lg-2 text-center"><a class="fword rounded-pill" href="/#contact">Contact</a></div>
            </div>
            <div class="footer-social-icons wow fadeInDown" data-wow-delay="300ms">
               <ul >
                  <li><a class="facebook-hovr" href="">
                     <i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="">
                     <i class="fab fa-twitter"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li><a  href="">
                     <i class="fab fa-instagram"></i></a>
                  </li>
                  <li><a href="">
                     <i class="far fa-envelope"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </footer>

          <!-- FOOTER END -->


      <!-- JavaScript -->
      <script src="{{asset('front-end/vendor/js/bundle.min.js')}}"></script>
      <!-- Plugin Js -->
      <script src="{{asset('front-end/vendor/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/swiper.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/jquery.cubeportfolio.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/wow.min.js')}}"></script>
      <!-- REVOLUTION JS FILES -->
      <script src="{{asset('front-end/vendor/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
      <!-- SLIDER REVOLUTION EXTENSIONS -->
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
      <script src="{{asset('front-end/vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
      <!-- custom script -->
      <script src="{{asset('front-end/vendor/js/contact_us.js')}}"></script>
      <script src="{{asset('front-end/classic-business/js/script.js')}}"></script>
    </body>
</html>
