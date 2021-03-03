@extends('site.layout')

@section('content')
      <!--SLIDER START-->
      <div class="slider" id="home">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="slider-shop" data-source="gallery" style="background:rgba(255,255,255,0);padding:0px;">
           <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
           <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
              <ul>
                 
                 <!-- SLIDE-3 -->
                 <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('front-end/classic-business/sliders/3.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide 1" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('front-end/classic-business/about/about us.jpeg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                       id="slide-1-layer-3"
                       data-x="['left','center','center','center']" data-hoffset="['3','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                       data-fontsize="['18','18','16','16']"
                       data-width="['510','510','510','450']"
                       data-height="none"
                       data-whitespace="normal"
                       data-type="text"
                       data-responsive_offset="on"
                       data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','center','center','center']"
                       data-paddingtop="[30,30,30,30]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"
                       style="z-index: 7; white-space: normal; font-size: 25px;   color: #fff; letter-spacing: 0px; line-height: 1.3"><span style="font-size: 20px">Delivering a wide range of industrial services solutions, in partnership with the Original Equipment Manufacture.</span>
                       <br>
                       <br>
                       <div class="cube-button">
                        <a class="btn  btn-light-blue btn-hvr-light-blue" style="color: #eaeef3;
                        background-color: #1A203c;
                        border-color: #fff;
                        border-radius: 50px;" href="/categories">
                           Discover
                           
                           <div class="btn-hvr-setting">
                              <ul class="btn-hvr-setting-inner">
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                                 <li class="btn-hvr-effect"></li>
                              </ul>
                           </div>
                        </a>
                     </div>
                    </div>
                    
                 </li>
              </ul>
              {{--  <div class="tp-bannertimer tp-bottom" style="height: 5px; background: rgb(87,202,133);"></div>  --}}
           </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
     </div>
     <!--SLIDER END-->

    
      <!-- BRANDS SECTION START -->
      <div class="team-section" id="brand">
        <div class="container">
           <h2 class="wow fadeInDown" data-wow-delay="300ms">Our Brands</h2>
           <div class=" text-center team-section-carousel owl-carousel owl-themes active wow zoomIn" data-wow-delay="400ms">
              <div class=" item">
                 <img src="{{asset('front-end/classic-business/brands/cat.png')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>CATERPILLER</h5>
                 </div>
              </div>
              <div class=" item" >
                 <img src="{{asset('front-end/classic-business/brands/Demag.jpg')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>DEMAG</h5>
                 </div>
              </div>
              <div class=" item">
                 <img src="{{asset('front-end/classic-business/brands/lister.png')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>LISTER PETTER</h5>
                 </div>
              </div>
              <div class=" item">
                 <img src="{{asset('front-end/classic-business/brands/Meico.webp')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>MEICO</h5>
                 </div>
              </div>
              <div class=" item">
                 <img src="{{asset('front-end/classic-business/brands/metso.jpg')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>METSO</h5>
                 </div>
              </div>
              <div class="item">
                 <img src="{{asset('front-end/classic-business/brands/siemens.jpg')}}" style="margin: 0 auto; width:250px;height:200px" alt="image">
                 <div class="team-detail">
                    <h5>SIEMENS</h5>
                 </div>
              </div>

           </div>
        </div>
        <!-- Container End -->
     </div>
     <!-- BRANDS SECTION END -->









@endsection
