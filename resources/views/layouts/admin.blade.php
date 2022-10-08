<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon//assets/img/apple-icon.png') }}">

  <link rel="shortcut icon" href="{{ asset('assets/img/logo.ico') }}">
  <title>
    ICF 2022 - Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('argon/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('argon/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
  <!-- Custom Css-->
  @yield('customcss')
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs h-auto border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ url('/dashboardadmin')}}">
        <img src="{{ asset('logo/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">ICF 2022</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto ps ps--active-y" id="sidenav-collapse-main">
      <ul class="navbar-nav">
         <li class="nav-item">
            <li class="nav-item mt-3">
               <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Daftar Acara</h6>
            </li>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ url('/daftarevent')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-email-83 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">List Acara</span>
          </a>
        </li>
         <li class="nav-item">
            <li class="nav-item mt-3">
               <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Daftar Peserta Workshop</h6>
            </li>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/pesertaWorkshopHCI')}} ">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Workshop <br>What is Human <br>Computer Interaction ?</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/pesertaWorkshopUI')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Workshop <br>How to Make a Good UI</span>
          </a>
        </li>
         <li class="nav-item">
            <li class="nav-item mt-3">
               <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Daftar Peserta Seminar</h6>
            </li>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/pesertaSeminarBigData')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Seminar Utilizing Big Data<br> to Address Global Issues</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/pesertaSeminarMultiverse')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Seminar Accessible <br>Multiverse for Everyone</span>
          </a>
        </li>
         <li class="nav-item">
            <li class="nav-item mt-3">
               <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Daftar Peserta Lomba</h6>
            </li>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/timLombaHackaton')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hackaton Competition</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/timLombaMLBB')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mobile Legend Competition</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pesertaTiktok')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tiktok Challenges<br> Competition</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/timLombaComic')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Comic Strip Competition</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
         <img class="w-50 mx-auto" src="{{ asset('argon/assets/img/illustrations/icon-documentation.svg') }}" alt="sidebar_illustration">
         <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
               <h6 class="mb-0">Need help?</h6>
               <p class="text-xs font-weight-bold mb-0">Please contact the ICF 2022 @ Information System</p>
            </div>
         </div>
      </div>
   </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
         @yield('header')

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
         <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Tidak Dipakai Search....">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Welcome Admin</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog me-sm-1 cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{ asset('argon/assets/img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Back To Home</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{ asset('argon/assets/img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Logout</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('argon/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('argon/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  <!-- Custom Javascript -->
  @yield('javascript')
</body>

</html>
