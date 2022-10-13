<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

{{-- <div class="container"> --}}

{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> 
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif 
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 
    {{-- <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">3</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">3</span>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$2,978.24</span></p>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Sony DSC-RX100M..</p>
                            <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://cdn2.gsmarena.com/vv/pics/blu/blu-vivo-48-1.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Vivo DSC-RX100M..</p>
                            <span class="price text-info"> $500.40</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://static.toiimg.com/thumb/msid-55980052,width-640,resizemode-4/55980052.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Lenovo DSC-RX100M..</p>
                            <span class="price text-info"> $445.78</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
<div class="container">
         <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
               <div class="dropdown">
                  <button type="button text-white" class="btn btn-info" data-toggle="dropdown" style="background-color: rgb(250, 173, 7) !important">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;Cart
                  </button>
                  <div class="dropdown-menu">
                     <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                           <p>Cart Event</p>
                        </div>
                     </div>

                     @if (session('cart'))
                         @foreach (session('cart') as $id=>$details)
                              <div class="row cart-detail">
                                 <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ url('/assets/img/poster.png')}}">
                                 </div>
                                 <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['nama'] }}</p>
                                 </div>
                              </div>
                         @endforeach
                     @endif

                     <div class="row">
                           <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                              <a href="{{ url('peserta/cart') }}" class="btn btn-primary btn-block">View all</a>
                           </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   <div class="container page">
         @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      @yield('content')
   </div>
</div>
{{-- <div class="container page"> --}}
    
{{-- </div> --}}


@yield('scripts')

</body>
</html>