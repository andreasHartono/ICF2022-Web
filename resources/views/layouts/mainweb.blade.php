<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/hadiah.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/mainweb.css') }}">  
  <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">  
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.ico') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/cartpeserta.css') }}">  
  npm i bootstrap-icons
  

  @yield('style')

</head>
<body>

    @include('layouts.navbar')
    @yield('content')

 
    <!-- FOOTER -->

    <footer class="bg-dark text-inverse">
      <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <img class="mb-6" src="{{ asset('assets/img/logowhite.png') }}" srcset="{{ asset('assets/img/logowhite.png') }}"" alt="" />
              
              <nav class="nav social social-white">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-4 col-lg-4">
            <div class="row">
              <div class="col-12 mt-3">Social Media</div>
              <div class="col-12">
                  <i class="bi bi-instagram myIcon"></i> <a href="https://www.instagram.com/maniac_ubaya/" target="_blank" class="wa-num">maniac_ubaya</a> 
                  <br>
                  <i class="bi bi-youtube myIcon"></i> <a href="https://www.youtube.com/channel/UCUVYlb7cc67RC17tNngSeug" target="_blank" class="wa-num">ICF UBAYA</a>
                  <br>
                  <i class="fa-brands fa-line myIcon"></i> <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=994nxsfr" class="wa-num">@994nxsfr</a>
              </div>
              <div class="col-12 mt-4">Contact Person</div>
              <div class="col-12"><i class="bi bi-whatsapp myIcon"></i> Aaron Ganteng : <a href="https://wa.me/+6282255940933" class="wa-num" target="_blank">082255940933</a></div>
              <div class="col-12"><i class="bi bi-whatsapp myIcon"></i> Andreas Ganteng : <a href="https://wa.me/+6287855956975" class="wa-num" target="_blank">087855956975</a></div>
          </div>
          </div>
          <!-- /column -->
          {{-- <div class="col-md-3 col-lg-1">
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Learn More</h4>
              <ul class="list-unstyled  mb-0">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div> --}}
          <!-- /column -->
          <div class="col-md-3 col-lg-5">
            <div class="widget">
              <div class="col-12 mt-3">Our Location</div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.212720723352!2d112.7681119!3d-7.3198009!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7536c23b4453a79!2sUniversity%20of%20Surabaya!5e0!3m2!1sen!2sid!4v1665068122899!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                      <div id="mce-responses2" class="clear">
                        <div class="response" id="mce-error-response2" style="display:none"></div>
                        <div class="response" id="mce-success-response2" style="display:none"></div>
                      </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                      <div class="clear"></div>
                    </div>
                  </form>
                </div>
                <!--End mc_embed_signup-->
              </div>
      </div>
              <!-- /.newsletter-wrapper -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->
      </div>
     
      <!-- /.container -->
    </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>