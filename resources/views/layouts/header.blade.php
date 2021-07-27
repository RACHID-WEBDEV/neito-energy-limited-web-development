    <!-- Header Top Area -->

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-info">
                        <i class="las la-envelope"></i> info@neitoenergy.com |
                        <i class="las la-map-marker"></i>2, Tokunbo Alli Street, Off Toyin Street Ikeja Lagos</div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                    <div class="site-info">
                      Follow Us on
                        <div class="social-area">
                            <a href="#"><i class="lab la-facebook-f"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="la la-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->

    <header class="header-area">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a class="navbar-brand" href="/"><img src="{{asset('/assets/img/icon/logo.png')}}" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="sub-title">
                                 <p>Providing the Energy You Need</p> 
                               
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="/">Home
                                                  
                                                </a>
                                              
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="/about">About</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="/services">Services 
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <button class="sub-nav-toggler"> <i class="fa fa-angle-down"></i> </button></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('/services/petroleum-trading') }}">Petroleum Trading</a></li>
                                                    <li><a href="{{ url('/services/products-retailing')}}">Products Retailing</a></li>
                                                    <li><a href="{{ url('/services/petroleum-marketing ')}}">Petroleum Marketing</a></li>
                                                   <li><a href="{{ url('/services/logistics ')}}">Logistics</a></li>

                                                </ul>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link " href="#">Services
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                               
                                                <ul class="sub-menu">
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="single-service.html">Service Details</a></li>
                                                </ul>

                                            </li> --}}
                                            

                                            <li class="nav-item">
                                                <a class="nav-link" href="/blog">Blog
                                                    
                                                </a>
                                               
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/contact">Contact</a>
                                            </li>
                                             {{-- auth code start here --}}
                                            @if (Route::has('login'))
                                            @auth
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">{{Auth::user()->name}}
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    {{-- <li><a href="{{ route('profile.show') }} ">Manage Profile</a></li> --}}
                                                    <li><a href="{{ url('/blog/create') }}">Create Blog Post</a></li>
                                                    <li><a href="{{ url('blog/personalpost') }}">View My Posts</a></li>
                                                    <li><a href="{{ url('/categories/create') }}">Create Categories</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <li>
                                                        <a class="btn bg_white" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">{{ __('Logout') }}
                                                        </a>
                                                    </li>
                                                </form>

                                                </ul>
                                            </li>
                                            @else 

                                            <li class="nav-item">
                                                <a hidden class="nav-link" href="{{route('login')}}">Login</a>
                                            </li>
                                            @endif
                                            @endif
                                           
        
        
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="header-right-content">
                                <div class="search-box">
                                    <button class="search-btn"><i class="la la-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Dropdown Area -->

        <div class="search-popup">
            <span class="search-back-drop"></span>

            <div class="search-inner">
                <div class="auto-container">
                    <div class="upper-text">
                        <div class="text">Search for anything.</div>
                        <button class="close-search"><span class="la la-times"></span></button>
                    </div>

                    <form method="post" action="#!">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>