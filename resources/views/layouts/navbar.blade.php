<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="{{ url('/') }}">
                <img class="imgWhite" src="{{ asset('assets/img/logo/logoWhiteArtboard 2.png') }}"
                    srcset="{{ asset('assets/img/logo/logoWhiteArtboard 2.png') }}" alt=""/>
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0"><img class="imgWhite" src="{{ asset('assets/img/logo/logoWhiteArtboard 2.png') }}"
                        srcset="{{ asset('assets/img/logo/logoWhiteArtboard 2.png') }}" alt=""/></h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item  dropdown-mega">
                        <a class="nav-link" href="{{ url('/')}}">Home</a>
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
                                <span class="d-none d-lg-flex"><i class="uil uil-direction"></i><strong>Scroll to view more</strong></span>
                            </li>
                            <!--/.mega-menu-content-->
                        </ul>
                        <!--/.dropdown-menu -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Competition</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle"
                                    href="#" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">Services I</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle"
                                    href="#" data-bs-toggle="dropdown">About</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">About I</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Workshop</a>
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
                        <a class="nav-link" href="#">About Us</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/faq')}}">FAQ</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">Blog without Sidebar</a></li>
                        </ul> --}}
                    </li>
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
                @auth
                    @if(auth()->check())
                        @if(auth()->user()->sebagai == "peserta")
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
                @endauth
                <li class="nav-item dropdown">
                    @auth
                        @if (auth()->check())
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome {{ auth()->user()->nama }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->sebagai=="pubreg" || auth()->user()->sebagai=="admin"|| auth()->user()->sebagai=="superadmin")
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
                    @endif
                </li>
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
{{-- <div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Welcome Back</h2>
                <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                <form class="text-start mb-3">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                    </div>
                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                </form>
                <!-- /form -->
                <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup"
                        data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
                <div class="divider-icon my-4">or</div>
                <nav class="nav social justify-content-center text-center">
                    <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                            class="uil uil-facebook-f"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav>
                <!--/.social -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
</div> --}}
<!--/.modal -->
{{-- <div class="modal fade" id="modal-signup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
                <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                <form class="text-start mb-3">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Name" id="loginName">
                        <label for="loginName">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Confirm Password"
                            id="loginPasswordConfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPasswordConfirm">Confirm Password</label>
                    </div>
                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
                </form>
                <!-- /form -->
                <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin"
                        data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
                <div class="divider-icon my-4">or</div>
                <nav class="nav social justify-content-center text-center">
                    <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                            class="uil uil-facebook-f"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav>
                <!--/.social -->
            </div>
            <!--/.modal-content -->
        </div>

        <!--/.modal-body -->
    </div>

    <!--/.modal-dialog -->
</div> --}}
<!--/.modal -->
</header>
<!-- /header -->
