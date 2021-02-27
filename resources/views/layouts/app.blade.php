<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('back-end/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('back-end/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- Font Awosem CDN -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('back-end/assets/css/sleek.css')}}" />



  <!-- FAVICON -->
  <link href="{{asset('back-end/assets/img/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('back-end/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
@include('AdminPanel.body.sidebar')

      <div class="page-wrapper">
                  <!-- Header -->
         @include('AdminPanel.body.header')

        <div class="content-wrapper">
          <div class="content">
                  

            @yield('content')


</div>




        </div>

        @include('AdminPanel.body.footer')


      </div>
    </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('back-end/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/sleek.js')}}"></script>
<script src="{{asset('back-end/assets/js/chart.js')}}"></script>
<script src="{{asset('back-end/assets/js/date-range.js')}}"></script>
<script src="{{asset('back-end/assets/js/map.js')}}"></script>
<script src="{{asset('back-end/assets/js/custom.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('ckeditorDescription');
  CKEDITOR.replace('ckeditorContent');
</script>

  </body>
</html>
