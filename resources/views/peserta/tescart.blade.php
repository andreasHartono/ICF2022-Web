@extends('layouts.mainweb')
@section('title')
   ICF 2022 - Events
@endsection
@section('content')
   <div class="content-wrapper">
      <section class="wrapper bg-gray">
         <div class="container py-3 py-5">
            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" class="btn" style="background: rgb(250, 173, 7) !important; color: #ffffff !important;">
               <i class="uil uil-shopping-cart"></i> Your's Events
            </a>
            <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
               <div class="offcanvas-header">
                  <h3 class="mb-0" style="color: #ffffff !important;">Your Events</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               @if (session('cart'))
                  @foreach (session('cart') as $id=>$details)
                     <div class="offcanvas-body d-flex flex-column">
                        <div class="shopping-cart">
                           <div class="shopping-cart-item d-flex justify-content-between mb-4">
                              <div class="d-flex flex-row">
                                 <figure class="rounded w-17"><img src="{{ url('/assets/img/poster.png') }}" alt="" /></figure>
                                 <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1" style="color: #ffffff !important;">{{ $details['nama'] }}</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.shopping-cart-->
                        <div class="offcanvas-footer flex-column text-center">
                           <a href="{{ url('peserta/cart') }}" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4" style="color: #ffffff !important;"> View All</a>
                        </div>
                        <!-- /.offcanvas-footer-->
                     </div>
                     <!-- /.offcanvas-body -->
                  @endforeach
               @endif

            </div>
         </div>
      </section>

        <!-- /.offcanvas-body -->
      <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-12">
               <div class="col-lg-8">
               <div class="table-responsive">
                  <table class="table text-center shopping-cart">
                     <thead>
                        <tr>
                           <th class="ps-0 w-25">
                              <div class="h4 mb-0 text-start">Event yang Akan Terdaftar</div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @if (session('cart'))
                           @foreach (session('cart') as $id=>$details)
                              <tr>
                                 <td class="option text-start d-flex flex-row align-items-center ps-0">
                                    <figure class="rounded w-17"><img src="{{ url('/assets/img/poster.png')}}" alt="" /></figure>
                                    <div class="w-100 ms-4">
                                    <h3 class="post-title h6 lh-xs mb-1">{{ $details['nama'] }}</h3>
                                    </div>
                                 </td>
                              </tr>
                           @endforeach
                        @endif
                     </tbody>
                  </table>
               </div>
               <!-- /.table-responsive -->
               <div class="row mt-0 gy-4">
                  <div class="col-md-8 col-lg-7">
                     <div class="form-floating input-group">
                        <a href="{{ url('/peserta/daftarevents') }}" class="btn btn-primary rounded" style="color: #fff !important; background: #273242 !important; border: 1px solid #273242 !important;">
                           < Back To Event
                        </a>
                     </div>
                     <!-- /.input-group -->
                  </div>
                  <!-- /column -->
                  <div class="col-md-4 col-lg-5 ms-auto ms-lg-0 text-md-end">
                     <a href="{{ url('/peserta/checkout') }}" class="btn btn-primary rounded" style="color: #fff !important;">
                        <i class="uil uil-credit-card fs-18"></i>
                        &nbsp;&nbsp; Submit >
                     </a>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
            <!--/.row -->

            <!-- /.grid -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /section -->        
   </div>
@endsection