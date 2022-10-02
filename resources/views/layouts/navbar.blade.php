<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="#">
                        <img class="logo" src="{{ asset('assets/img/logo/logoUtama.png') }}"
                            srcset="{{ asset('assets/img/logo/logoUtama.png') }}" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <a class="nav-link" href="#">Home</a>
                            <a class="nav-link " href="#">Competition</a>
                            <a class="nav-link " href="#">Workshop</a>
                            <a class="nav-link " href="#">About Us</a>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                              <p>Contact Person</p>
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
                        <li class="nav-item d-none d-md-block">
                            <a href="#" class="btn btn-sm btn-primary rounded">Login</a>
                            <a href="#" class="btn btn-sm btn-primary rounded">Sign Up</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
    <!-- /header -->
</div>
