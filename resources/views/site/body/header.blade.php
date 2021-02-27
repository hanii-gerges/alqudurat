<div class="navigation-bar">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top navbar-fixed-top">
       <div class="container">
          <a class="navbar-brand" href="#">
          <img src="{{asset('front-end/classic-business/img/logo.png')}}" alt="image"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                   <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item ">
                   <a class="nav-link" href="#services">About Us</a>
                </li>
                <li class="nav-item ">
                    <div class="dropdown">
                        <a href="/categories" class="nav-link"  id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                         Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($categories as $category)
                              <a class="dropdown-item text-white" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                      </div>

                   {{-- <a class="nav-link" href="{{route('categories')}}">Services</a> --}}
                </li>
                {{-- <li class="nav-item">
                   <a class="nav-link" href="#team">Team</a>
                </li> --}}
                <li class="nav-item">
                   <a class="nav-link" href="#work">Work</a>
                </li>
                {{-- <li class="nav-item">
                   <a class="nav-link" href="#pricing">Pricing</a>
                </li> --}}
                {{-- <li class="nav-item">
                   <a class="nav-link" href="#blog">Blog</a>
                </li> --}}
                <li class="nav-item">
                   <a class="nav-link" href="#contact">Contact</a>
                </li>
             </ul>
          </div>
          <div class="social-icons">
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
          </div>
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
             <img src="{{asset('front-end/classic-business/img/side-menu.png')}}" alt="image">
          </div>
          <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
          <nav class="side-nav w-100">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link scroll" href="#home">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link scroll" href="#services">About Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link scroll" href="/categories">Services</a>
                </li>
                {{-- <li class="nav-item">
                   <a class="nav-link scroll" href="#team">Team</a>
                </li>--}}
               <li class="nav-item">
                   <a class="nav-link scroll" href="#work">Work</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link scroll" href="#contact">Contact</a>
                </li>
             </ul>
          </nav>
          <div class="side-menu-footer">
             <div class="banner-icons">
                <ul>
                   <li>
                      <a href="#" class="hover"><i class="fab fa-facebook-f"></i></a>
                   </li>
                   <li><a href="#" class="hover"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="#" class="hover"><i class="fab fa-linkedin-in"></i></a></li>
                   <li><a href="#" class="hover"><i class="fab fa-instagram"></i></a></li>
                </ul>
             </div>
             <p class="copywrite text-left">&#169; 2020  Made with love by Digital Tips Company</p>
          </div>
       </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
 </div>

