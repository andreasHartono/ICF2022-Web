<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon//assets/img/apple-icon.png') }}">
  
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.ico') }}">
  <title>
    ICF 2022 - Peserta
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{ asset('logo/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">ICF 2022</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  h-auto w-auto ps ps--active-y" id="sidenav-collapse-main">
      <ul class="navbar-nav">
         <li class="nav-item">
          <a class="nav-link" href="#">

              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tim">

          <i class="bi bi-person-lines-fill"></i>

            <span class="nav-link-text ms-1">Tim</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">

              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>

            <span class="nav-link-text ms-1">Workshop</span>
          </a>
        </li>
      </ul>
      <div class="accordion" id="accordionExample">
  <div style="padding-left:9px;"class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i> &nbsp;   &nbsp; &nbsp; Lomba <i style="position:relative; left:50%;" class="bi bi-arrow-down"></i>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a style="color:black" href="peserta">Peserta</a> <br><br>
        <a style="color:black" href="#">Lomba</a> <br><br>
        <a style="color:black" href="soal">Soal</a> <br><br>
      </div>
    </div>
  </div>
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
                <span class="d-sm-inline d-none">Welcome Peserta</span>
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