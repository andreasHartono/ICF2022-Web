@extends('layouts.mainweb')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/css/aboutus.css') }}">
@section('title')
ICF - About Us
@endsection

@section('content')
<div class="container pt-10 pb-15 pt-md-14 pb-md-10 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
        <h1 class="display-1 mb-4">About ICF</h1>
        <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem iste sint sed molestiae rerum mollitia unde, officiis vel distinctio
           id cupiditate quasi, cumque ex nam? Deserunt eos nesciunt cumque.</p>
        <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >

            <span><a class="btn btn-primary rounded mx-1" style="background-color:  red !important;color:#fff !important; height:50px; width:200px;">Register Now</a></span>

          </div>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <div>
</div>
  

 
<div class="wrapper bg-gray ">
    <div class="container-fluid px-xl-0 pt-6 pb-10">
      <div class="swiper-container" data-margin="30" data-dots="true" data-nav="true" data-centered="true" data-loop="true" data-items-xxl="2" data-items-xl="2" data-items-lg="2" data-items-md="1" data-items-xs="1">
        <div class="swiper overflow-visible">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf1.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf2.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf3.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf4.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf5.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="{{ url('/assets/img/tea.jpg') }}" alt="" /><a class="item-link" href="./assets/img/photos/cf6.jpg" data-glightbox data-gallery="gallery-group"><i class="uil uil-focus-add"></i></a></figure>
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.cotnainer -->
  </div>
</div>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-17">
      <div class="row mb-8 text-center">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
          <h2 class="fs-16 text-uppercase text-primary mb-3"></h2>
          <h3 class="display-4">The Speakers</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          <div class="project item col-md-6 col-xl-4 product">
            <figure class="lift rounded mb-6"><a href="./single-project.html"> <img src="./assets/img/photos/pd1.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-yellow">Coffee</div>
                <h2 class="post-title h3">Cras Fermentum Sem</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item col-md-6 col-xl-4 workshop">
            <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img src="./assets/img/photos/pd2.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-red">Stationary</div>
                <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item col-md-6 col-xl-4 still-life">
            <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img src="./assets/img/photos/pd3.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-orange">Branding</div>
                <h2 class="post-title h3">Ipsum Ultricies Cursus</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item col-md-6 col-xl-4 product">
            <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img src="./assets/img/photos/pd4.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-purple">Product</div>
                <h2 class="post-title h3">Inceptos Euismod Egestas</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item col-md-6 col-xl-4 product">
            <figure class="lift rounded mb-6"><a href="./single-project.html"> <img src="./assets/img/photos/pd5.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-leaf">Print</div>
                <h2 class="post-title h3">Sollicitudin Ornare Porta</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item col-md-6 col-xl-4 workshop">
            <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img src="./assets/img/photos/pd6.jpg" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category mb-2 text-aqua">Workshop</div>
                <h2 class="post-title h3">Ipsum Mollis Vulputate</h2>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
    </div>
    <!-- /.container -->
  </section>

  <section style="background: rgb(4, 135, 135)">
    <div class="container py-14 py-md-16">
      {{-- <figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="./assets/img/photos/about15.jpg" srcset="./assets/img/photos/about15@2x.jpg 2x" alt="" /></figure> --}}
      <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
          <h1 class="display-4 text-white mb-10">Competition</h1>
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  <section style="background:RED">
    <div class="container py-14 py-md-16">
      {{-- <figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="./assets/img/photos/about15.jpg" srcset="./assets/img/photos/about15@2x.jpg 2x" alt="" /></figure> --}}
      <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
          <h1 class="display-4 text-white mb-10">PUBG Battles</h1>
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  <section style="background:blue">
    <div class="container py-14 py-md-16">
      {{-- <figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="./assets/img/photos/about15.jpg" srcset="./assets/img/photos/about15@2x.jpg 2x" alt="" /></figure> --}}
      <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
          <h1 class="display-4 text-white mb-10">REWARDS </h1>
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  
  
@endsection