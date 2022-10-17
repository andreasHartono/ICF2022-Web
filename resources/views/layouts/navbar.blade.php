<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="{{ url('/') }}">
                <img class="imgWhite" src="{{ asset('assets/img/logo/logo-ubaya.png') }}"
                    srcset="{{ asset('assets/img/logo/logo-ubaya.png') }}" alt="" />
                <img class="img" src="{{ asset('assets/img/logo/LOGO ICF (2).png') }}"
                    srcset="{{ asset('assets/img/logo/LOGO ICF (2).png') }}" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0"><img class="imgWhite"
                        src="{{ asset('assets/img/logoicf.png') }}"
                        srcset="{{ asset('assets/img/logoicf.png') }}" alt="" /></h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item  dropdown-mega">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                        <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                            <li class="mega-menu-content mega-menu-scroll">
                                {{-- <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                                    <li class="col"><a class="dropdown-item" href="#">
                                            <figure class="rounded lift d-none d-lg-block"><img
                                                    src="{{ asset('assets/img/demos/mi1.jpg') }}"
                                                    srcset="{{ asset('assets/img/demos/mi1@2x.jpg 2x') }}./"
                                                    alt=""></figure>
                                            <span class="d-lg-none">Demo I</span>
                                        </a></li>
                                    <li class="col"><a class="dropdown-item" href="#">
                                            <figure class="rounded lift d-none d-lg-block"><img
                                                    src="{{ asset('assets/img/demos/mi2.jpg') }}"
                                                    srcset="{{ asset('assets/img/demos/mi2@2x.jpg 2x') }}"
                                                    alt=""></figure>
                                            <span class="d-lg-none">Demo II</span>
                                        </a></li>
                                </ul> --}}
                                <!--/.row -->
                                <span class="d-none d-lg-flex"><i class="uil uil-direction"></i><strong>Scroll to view
                                        more</strong></span>
                            </li>
                            <!--/.mega-menu-content-->
                        </ul>
                        <!--/.dropdown-menu -->
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link" href="{{ url('/workshop') }}">Workshop</a> --}}
                        {{-- <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <h6 class="dropdown-header">Project Pages</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">Projects I</a></li>
                                    </ul>
                                </div>
                                <!-- /.column -->
                                <div>
                                    <h6 class="dropdown-header">Single Projects</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">Single Project I</a></li>
                                    </ul>
                                </div>
                                <!-- /.column -->
                            </div>
                            <!-- /auto-column -->
                        </div> --}}
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('seminar') }}">Seminar</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('competition') }}">Competition</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('pameran') }}">Pameran</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
                    @auth
                        @if (auth()->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome {{ auth()->user()->nama }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->sebagai=="pubreg" || auth()->user()->sebagai=="admin"|| auth()->user()->sebagai=="superadmin")
                                    <li>
                                    <a class="dropdown-item" href="{{ url('/dashboardadmin') }}">Dashboard</a>
                                    </li>
                                 @else
                                    {{-- Jangan dihapus dulu, lagi testing --}}
                                    <li>
                                          <a class="dropdown-item" href="{{ url('peserta/daftarevents') }}">Seminar</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="{{ url('daftarlomba') }}">Lomba</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="{{ url('historyevents') }}">History Event</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{ url('/logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"> Logout</button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endauth
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('/register')}}">Register</a></li>
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item dropdown dropdown-mega">
                        {{-- <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                        <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                            <li class="mega-menu-content">
                                <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                    <li class="col"><a class="dropdown-item" href="./docs/block#">
                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                    class="rounded-0" src="{{ asset('assets/img/demos/block1.svg') }}"
                                                    alt=""></div>
                                            <span>About</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--/.row -->
                            </li>
                            <!--/.mega-menu-content-->
                        </ul> --}}
                        <!--/.dropdown-menu -->
                    </li>

                    <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
                </li>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                    <div>
                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                </div>
                <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                {{-- @auth
                    @if (auth()->check())
                        @if (auth()->user()->sebagai == 'peserta')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/'.auth()->user()->id) }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('peserta/daftarevents') }}">Workshop Seminar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('daftarlomba') }}">Lomba</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Daftar Tim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Daftar Event</a>
                            </li>
                        @endif
                    @endif
                @endauth --}}
                {{-- <li class="nav-item dropdown"> --}}
                {{-- @auth
                        @if (auth()->check())
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome {{ auth()->user()->nama }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->sebagai == 'pubreg' || auth()->user()->sebagai == 'admin' || auth()->user()->sebagai == 'superadmin')
                                    <li>
                                    <a class="dropdown-item" href="{{ url('/dashboardadmin') }}">Dashboard</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{ url('/logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"> Logout</button>
                                    </form>
                                </li>
                            </ul>
                    @endauth
                    @else
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('/register')}}">Register</a></li>
                        </ul>
                    @endif --}}
                {{-- </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ url('login')}}" class="nav-link">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('register')}}" class="btn btn-sm btn-primary rounded" >Sign Up</a>
                </li> --}}
                <li class="nav-item d-lg-none">
                    <button class="nav-link hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

</header>
<!-- /header -->
