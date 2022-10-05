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
  

  @yield('style')

</head>
<body>

    @include('layouts.navbar')
    @yield('content')

 
    <!-- FOOTER -->

  <footer class="bg-dark text-inverse mt-5 mt-md-16">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        {{-- <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="./assets/img/logo/logoUtama.png" srcset="./assets/img/logo/logoUtama.png" alt="" />
            <p class="mb-4">© 2022 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
            {{-- <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div> --}}
        <!-- /column -->
        <div class="col-md-4 col-lg-3 align-items-center" >
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Social Media</h4>
            <a href="#"><i class="uil uil-instagram"></i><u>@icfubaya2022</u></a><br>
            <a href="#"><i class="uil uil-youtube"></i><u>ICF UBAYA 2022</u></a><br>
            <a href="#"><i class="uil uil-line"></i><u>ICF UBAYA 2022</u></a>
            <h4 class="widget-title text-white mb-3" style="margin-top: 15px; margin-bottom: 15px">Contact Person</h4>
            <a href="#"><i class="uil uil-whatsapp"></i>... : <u>08...</u></a><br>
            <a href="#"><i class="uil uil-whatsapp"></i>... : <u>09...</u></a>
          </div>
          <!-- /.widget -->
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3" style="text-align: center">Our Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7689.26769629826!2d112.76750596476232!3d-7.3212739372670725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7311b083dc2502a7!2sUBAYA%20(%20UNIVERSITAS%20SURABAYA%20)!5e0!3m2!1sen!2sid!4v1652534141596!5m2!1sen!2sid" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        {{-- <div class="col-md-4 col-lg-3">
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
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
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
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div> --}}
        <!-- /column -->
      </div>
      <!--/.row -->
      <div style="align-content: center; text-align: center;">
        <p style="margin: 0px">Developed by ICF .. Comitee</p>
        <p>Lapor bug & kendala web hubungi ...@gmail.com</p>
      </div>
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