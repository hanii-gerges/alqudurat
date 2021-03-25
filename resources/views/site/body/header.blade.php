//0A2125
<div class="navigation-bar">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top navbar-fixed-top">
       <div class="container">
           {{-- @if ($status == 1)
           <a href="{{route('lang','en')}}" class="text-white">English</a>
           @else
           <a href="{{route('lang','arabic')}}" class="text-white">العربية</a>
           @endif --}}
          <a class="navbar-brand" href="/">
          <img src="{{asset('front-end/classic-business/img/logo.png')}}" alt="image"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                   <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ">
                  <div class="dropdown">
                     <a class="nav-link" href="/intro"  id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                        The Company
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="/intro">Introduction</a>
                           <a class="dropdown-item" href="/services">Services</a>

                     </div>
                   </div>
             </li>
                <li class="nav-item ">
                    <div class="dropdown">
                        <a href="/categories" class="nav-link"  id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                         Products & Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($categories as $category)
                              <a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                      </div>


                    {{-- <a class="nav-link" href="{{route('categories')}}">Services</a> --}}
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href="/#brand">Brands</a>
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                 </li>
             </ul>
          </div>
          {{--  <div class="social-icons">
             <ul >
                <li><a class="facebook-hovr" href="">
                   <i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a class="twitter-hovr" href="">
                   <i class="fab fa-twitter"></i></a>
                </li>
                <li><a class="instagram-hovr" href="">
                   <i class="fab fab fa-instagram"></i></a>
                </li>
             </ul>
          </div>  --}}
       </div>
       <!-- Container End -->
       <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
       <span></span>
       <span></span>
       <span></span>
       </a>
    </nav>
    <!-- Side Menu -->
    <div class="side-menu hidden">
       <div class="inner-wrapper">
          <div class="image">
             <img src="{{asset('front-end/classic-business/img/logo.png')}}" alt="image">
          </div>
          <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
          <nav class="side-nav w-100">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="/#home">Home</a>
                </li>
                <li class="nav-item ">
                   <a class="nav-link" href="/about">The Company</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link scroll" href="/categories">Products & Services</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="/#brand">Brands</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="/contact">Contact Us</a>
                </li>

             </ul>
          </nav>
          <div class="side-menu-footer">
             <div class="banner-icons">
                <ul>
                   <li>
                      <a target="_blank" href="https://www.facebook.com/AlQudurat-For-Digital-Industrial-Services-109436721206059" class="hover"><i class="fab fa-facebook-f"></i></a>
                   </li>
                   <li><a href="#" class="hover"><i class="fab fa-twitter"></i></a></li>
                   <li><a target="_blank" href="https://www.linkedin.com/company/71681104/admin/" class="hover"><i class="fab fa-linkedin-in"></i></a></li>
                   <li><a href="#" class="hover"><i class="fab fa-instagram"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
 </div>

