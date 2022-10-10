@extends('layouts.mainweb')

@section('title')
ICF 2022 - Daftar
@endsection

@section('content')
{{-- @php $total = 0; $quantity = 0; @endphp
@if (session('cart'))
@foreach (session('cart') as $id => $details)
@php $total += $details['product_selling_price'] * $details['quantity']; $quantity += $details['quantity'] @endphp
@endforeach
@endif --}}

<div class="body-cart">
   <div class="container marketing">

    <div class="row">
        @for ($i=0;$i<count($event);$i++)
            <div class="col-lg-4">
                <img class="img-circle" src="{{ url('/assets/img/'.$event[$i]->url)}}" alt="{{ $event[$i]->url}}">
                <h2>{{ $event[$i]->nama}}</h2>
                <h5>Kategori : {{ $event[$i]->name}}</h5>
                <p>{{ $event[$i]->deskripsi }}</p>
                <p>Mulai : {{ $event[$i]->tanggal_start }}<br> Akhir : {{ $event[$i]->tanggal_end}}</p>
                <p><a class="btn btn-soft-dark" href="#" role="button">Pilih Event</a></p>
            </div><!-- /.col-lg-4 -->
        @endfor
    </div><!-- /.row -->
  </div>
</div>
@endsection
{{-- @section('content')

<header class="wrapper bg-white">
      <div class="container flex-lg-row flex-nowrap align-items-center">
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item">
              <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                <i class="nav-link uil uil-shopping-cart"></i>
                <span class="badge badge-cart bg-primary">1</span>
              </a>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
      </div>
      <!-- /.container -->
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
      <div class="offcanvas-header">
        <h3 class="mb-0 nav-link">Your Cart</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column">
        <div class="shopping-cart">
          <div class="shopping-cart-item d-flex justify-content-between mb-4">
            <div class="d-flex flex-row">
              <figure class="rounded w-17"><a href="./shop-product.html"><img src="{{ url('/assets/img/poster.png') }}" alt="" /></a></figure>
              <div class="w-100 ms-4">
                <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="nav-link">Nike Air Sneakers</a></h3>
                <p class="nav-link price fs-sm">Deskripsi</p>
                <!--/.form-select-wrapper -->
              </div>
            </div>
            <div class="ms-2"><a href="#" class="nav-link"><i class="uil uil-trash-alt"></i></a></div>
          </div>
          <!--/.shopping-cart-item -->
        </div>
        <!-- /.shopping-cart-->
        <div class="offcanvas-footer flex-column text-center">
          <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i class="uil uil-credit-card fs-18"></i> Checkout</a>
        </div>
        <!-- /.offcanvas-footer-->
      </div>
      <!-- /.offcanvas-body -->
    </div>
  </header>
  <!-- /header -->
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row align-items-center mb-10 position-relative zindex-1">
        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
          <h3 class="display-6">Daftar Workshop & Seminar</h3>
          <h6 class="display-7">Silahkan Pilih Seminar atau Workshop yang tersedia</h6>
          </nav>
          <!-- /nav -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="grid grid-view projects-masonry shop mb-13">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
            @for ($i=0;$i<count($event);$i++)
                <div class="project item col-md-6 col-xl-4">
                    <figure class="rounded mb-6">
                        <img src="{{ url('/assets/img/poster.png') }}" alt="{{ $event[$i]->url}}" />
                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Daftar</a>
                    </figure>
                    <div class="post-header">
                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                            <div class="post-category text-ash mb-0">Kategori : {{ $event[$i]->name}}</div>
                        </div>
                        <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">{{ $event[$i]->nama}}</a></h2>
                        <p class="price">{{ $event[$i]->deskripsi }}</p>
                        <p>Mulai : {{ $event[$i]->tanggal_start }}<br> Akhir : {{ $event[$i]->tanggal_end}}</p>
                        <p><a href="{{ $event[$i]->link_wa }}" class="btn">Link Whatsapp</a></p>
                    </div>
                    <!-- /.post-header -->
                </div>
            @endfor
          <!-- /.item -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.container -->
  </section>
@endsection --}}
