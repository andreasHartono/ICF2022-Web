@extends('layouts.mainweb')

@section('title')
ICF 2022 - Home
@endsection

@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14 pb-md-10 text-center">
      <div class="row">
        <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
          <h1 class="display-1 mb-4">ICF 2022</h1>
          <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7" >ICF (Informatics Creative Festival) adalah sebuah festival yang memamerkan hasil-hasil karya mahasiswa dari Informatika Universitas Surabaya. Tiap tahunnya, ICF mengenalkan desain dan pemrograman melalui pameran karya-karya mahasiswa akhir teknik informatika UBAYA. Selain itu, ICF juga ada berbagai macam seminar dan lomba untuk menambah pengetahuan dan mengasah kemampuan para peserta sesuai dengan perkembangan teknologi.</p>
          <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >

              <span><a class="btn btn-primary rounded mx-1" style="background-color:  red !important;color:#fff !important; height:50px; width:200px; border-radius: 400px !important;">Register Now</a></span>

            </div>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  {{-- poster --}}
  <section id="poster" class="mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <a href="{{ url('/assets/img/poster.png') }}" target="blank"><img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300"  img src="{{ url('/assets/img/poster.png') }}" alt="Scroll" width="100%; height:100%; object-fit: contain;"></a>
            </div>
        </div>
    </div>
</section>
{{-- endposter --}}

  <section class="wrapper bg-light">

    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
      <div class="row gx-0 mb-16 mb-mb-20">
  {{-- timeline --}}
  <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp" data-group="process">
  <h1 style="color: #273242; margin-top: 1em ; text-align: center; font-family: joyrideextended, Montserrat, sans-serif;"
  data-aos="zoom-in">Timeline ICF 2022</h1>

<link rel="stylesheet" href="{{ url('/assets/css/timeline.css') }}">
<div class="content">
  <div class="timeline col-lg-6 wow fadeInRight">
      <ul>
          <li>
              <div class="timeline-content">
                  <h3 class="date" id="timeline-date">16-22 September 2021</h3>
                  <h1 class="content-timeline">Open Registration </h1>
              </div>
          </li>
          <li>
              <div class="timeline-content">
                  <h3  class="date">25 September 2021</h3>
                  <h1 class="content-timeline">Technical Meeting PKM, PILMAPRES, Video Digital Pendidikan, KTI</h1>
              </div>
          </li>
          <li>
              <div class="timeline-content">
                  <h3  class="date">Day 1 (4 November 2022)</h3>
                  <h1 class="content-timeline">Machine vs Human,
Data for the Future,
Competitive Programming</h1>
              </div>
          </li>
          <li>
              <div class="timeline-content">
                  <h3  class="date">Day 2 (5 November 2022)</h3>
                  <h1 class="content-timeline">Human Computer Interaction in Everyday Life,
Mobile Legends: BangBang Competition </h1>
              </div>
          </li>
          <li>
              <div class="timeline-content">
                  <h3  class="date">Day 3 (6 November 2022)</h3>
                  <h1 class="content-timeline">Toward Metaverse: Challenge and Opportunities,
Augmented Reality vs Virtual Reality,
Comic Strip Competition,
Tiktok Competition Announcement</h1>
              </div>
          </li>
      </ul>
  </div>
</div>
  </div>
{{-- end timeline --}}
<div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp" data-group="process">
              <div class="hadiah">
                <h3 class="display-4 mb-5">Apa yang akan kamu Dapatkan ? </h3>
                <p class="total-hadiah">Total hadiah senilai Rp 225 Juta</p>
                <div class="hadiah-deskripsi">Dengan perincian sebagai berikut: </div>
                <div class="row mt-5">
                  <div class="col-md-4">
                    <div class="hadiah-item">
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="hadiah-item-title"> Terbaik 1</div>
                      </div>
                      <div class="hadiah-item-price">
                        Rp. 100.000.000
                      </div>
                    </div>
                  </div>

                  <!--/column -->
                  <div class="col-md-4">
                    <div class="hadiah-item">
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="hadiah-item-title"> Terbaik 2</div>
                      </div>
                      <div class="hadiah-item-price">
                        Rp.75.000.000
                      </div>
                    </div>
                  </div>
                  <!--/column -->
                  <div class="col-md-4">
                    <div class="hadiah-item">
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="hadiah-item-title"> Terbaik 3</div>
                      </div>
                      <div class="hadiah-item-price">
                        Rp.50.000.000
                      </div>
                    </div>
                  </div>
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
      </div>
            <!--/.row -->
            {{-- penjelasan --}}
            {{-- <section >


            <div class="container pt-10 pb-10 pt-md-10 pb-md-5 text-center">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-55 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
                  <h1 class="display-1 mb-4">Penjelasan</h1>
                  <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem iste sint sed molestiae rerum mollitia unde, officiis vel distinctio
                     id cupiditate quasi, cumque ex nam? Deserunt eos nesciunt cumque.</p>
                  <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
                      <span><a class="btn btn-primary rounded mx-1"
                         style="background-color: #273242;height:50px; width:200px; border-radius: 400px !important;">More Info</a></span>
                    </div>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
          </section> --}}
            {{-- /penjelasan --}}
            {{-- Workshop --}}
            {{-- <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
              <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 mb-4">Workshop</h1>
            </div> --}}
             {{-- end Workshop --}}

            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6 position-relative">
                <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
                <div class="row gx-md-5 gy-5 position-relative align-items-center">
                  {{-- <div class="col-6">
                    <img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="{{ asset('assets/img/photos/sa13.jpg') }}" srcset="{{ asset('assets/img/photos/sa13@2x.jpg 2x') }}" alt="" />
                  </div> --}}
                  <!-- /column -->
                  {{-- <div class="col-6">
                    <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900" src="{{ asset('assets/img/photos/sa14.jpg') }}" srcset="{{ asset('assets/img/photos/sa14@2x.jpg 2x') }}" alt="" />
                    <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200" src="{{ asset('assets/img/photos/sa15.jpg') }}" srcset="{{ asset('assets/img/photos/sa15@2x.jpg 2x') }}" alt="" />
                  </div> --}}
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!--/column -->
              {{-- <div class="col-lg-6">
                <h3 class="display-4 mb-5">We bring solutions to manage your finance the way works best.</h3>
                <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                <div class="row gy-3">
                  <div class="col-xl-6">
                    <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                      <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                      <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                    </ul>
                  </div>
                  <!--/column -->
                  <div class="col-xl-6">
                    <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                      <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare.</span></li>
                      <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas odio.</span></li>
                    </ul>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div> --}}
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-soft-primary">
          <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
            <div class="row text-center" data-cue="slideInUp">
              <div class="col-lg-10 mx-auto">
                <div class="mt-lg-n20 mt-xl-n22 position-relative">
                  <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 1rem; left: -3.9rem;"></div>
                  <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: 2rem; right: -3rem;"></div>
                  {{-- <video poster="{{ asset('assets/img/photos/movie.jpg') }}" class="player" playsinline controls preload="none"> --}}
                    <iframe width="777" height="437" src="https://www.youtube.com/embed/aK33uXl_qzo"
                     title="Informatics Creative Festival 2021" frameborder="0" allow="accelerometer;
                     autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                  {{-- </video> --}}
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="row text-center mt-12">
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        {{-- <section class="wrapper bg-light">
          <div class="container py-14 py-md-17">
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 align-items-center">
              <div class="col-lg-7 position-relative">
                <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-6" data-cue="fadeIn">
                    <figure class="rounded mt-md-10 position-relative"><img src="{{ asset('assets/img/photos/g5.jpg') }}" srcset="{{ asset('assets/img/photos/g5@2x.jpg 2x') }}" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                    <div class="row gx-md-5 gy-5">
                      <div class="col-md-12 order-md-2" data-cue="fadeIn" data-delay="900">
                        <figure class="rounded"><img src="{{ asset('assets/img/photos/g6.jpg') }}" srcset="{{ asset('assets/img/photos/g6@2x.jpg 2x') }}" alt=""></figure>
                      </div>
                      <!--/column -->
                      <div class="col-md-10" data-cue="fadeIn" data-delay="300">
                        <div class="card bg-pale-primary text-center">
                          <div class="card-body py-11 counter-wrapper">
                            <h3 class="counter text-nowrap">5000+</h3>
                            <p class="mb-0">Satisfied Customers</p>
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.card -->
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
              <div class="col-lg-5 mt-5">
                <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <blockquote class="icon icon-top fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Coriss Ambady</h5>
                              <p class="mb-0">Financial Analyst</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide">
                        <blockquote class="icon icon-top fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Cory Zamora</h5>
                              <p class="mb-0">Marketing Specialist</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide">
                        <blockquote class="icon icon-top fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Nikolas Brooten</h5>
                              <p class="mb-0">Sales Manager</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                  </div>
                  <!--/.swiper -->
                </div>
                <!-- /.swiper-container -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="px-lg-5">
              <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c1.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c2.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c3.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c4.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c5.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-4 col-md-2">
                  <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{ asset('assets/img/brands/c6.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /div -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
          <div class="container pt-14 pb-18 pt-md-17 pb-md-22 text-center">
            <div class="row">
              <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h3 class="display-4 mb-15 mb-md-6 px-lg-10">We offer great prices, premium products and quality service for your business.</h3>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
          <div class="container py-14 py-md-16">
            <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
              <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
              <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
              <div class="pricing-switcher-wrapper switcher">
                <p class="mb-0 pe-3">Monthly</p>
                <div class="pricing-switchers">
                  <div class="pricing-switcher pricing-switcher-active"></div>
                  <div class="pricing-switcher"></div>
                  <div class="switcher-button bg-primary"></div>
                </div>
                <p class="mb-0 ps-3">Yearly</p>
              </div>
              <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                  <div class="pricing card shadow-lg text-center">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/icons/lineal/shopping-basket.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                      <h4 class="card-title">Basic Plan</h4>
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">mo</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                      </div>
                      <!--/.prices -->
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                        <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                        <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4 popular">
                  <div class="pricing card shadow-lg text-center">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/icons/lineal/home.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                      <h4 class="card-title">Premium Plan</h4>
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                      </div>
                      <!--/.prices -->
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                        <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                  <div class="pricing card shadow-lg text-center">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/icons/lineal/briefcase-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                      <h4 class="card-title">Corporate Plan</h4>
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                      </div>
                      <!--/.prices -->
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                        <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
          </div>
          <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="{{ asset('assets/img/map.png') }}">
          <div class="container pt-0 pb-14 pt-md-18 pb-md-18">
            <div class="row">
              <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h3 class="display-4 mb-8 px-lg-12">We are trusted by over 5000+ clients. Join them now and grow your business.</h3>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join">
              <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
              <span><a class="btn btn-green rounded mx-1">Free Trial</a></span>
            </div>
          </div>
          <!-- /.container -->
        </section> --}}
        <!-- /section -->
      </div>
      <!-- /.content-wrapper -->

      <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
      <script src="{{ asset('assets/js/plugins.js') }}"></script>
      <script src="{{ asset('assets/js/theme.js') }}"></script>

@endsection
