@extends('layouts.mainweb')
@section('title')
    ICF 2022 - Events
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="wrapper bg-gray">
            <div class="container py-3 py-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" class="btn"
                    style="background: rgb(250, 173, 7) !important; color: #ffffff !important;">
                    <i class="uil uil-shopping-cart"></i> Your's Events
                </a>
                <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
                    <div class="offcanvas-header">
                        <h3 class="mb-0" style="color: #ffffff !important;">Your Events</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            <div class="offcanvas-body d-flex flex-column">
                                <div class="shopping-cart">
                                    <div class="shopping-cart-item d-flex justify-content-between mb-4">
                                        <div class="d-flex flex-row">
                                            <figure class="rounded w-17"><img src="{{ url('/assets/img/poster.png') }}"
                                                    alt="" /></figure>
                                            <div class="w-100 ms-4">
                                                <h3 class="post-title fs-16 lh-xs mb-1" style="color: #ffffff !important;">
                                                    {{ $details['nama'] }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.shopping-cart-->
                                <div class="offcanvas-footer flex-column text-center">
                                    <a href="{{ url('peserta/cart') }}"
                                        class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"
                                        style="color: #ffffff !important;"> View All</a>
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
                <div class="grid grid-view projects-masonry shop mb-13">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                        @foreach ($event as $key => $e)
                            <div class="project item col-md-6 col-xl-4">
                                <figure class="rounded mb-6">
                                    <img src="{{ url('/assets/img/poster.png') }}" alt="{{ $e->url }}" />
                                </figure>
                                <div class="post-header">
                                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                        <div class="post-category text-ash mb-0">Kategori : {{ $e->name }}</div>
                                    </div>
                                    <h2 class="post-title h3 fs-22">{{ $e->nama }}</h2>
                                    <p class="price" style="text-align: justify;">{{ $e->deskripsi }}</p><br>
                                    <ul style="list-style: none;">
                                        @php
                                            $date1 = date_create($e->tanggal_start);
                                            $date2 = date_create($e->tanggal_end);
                                        @endphp
                                        <li>Tanggal: {{ date_format($date1, 'd F Y') }}<br>Pukul :
                                            {{ date_format($date1, 'H:i') }} - {{ date_format($date2, 'H:i') }}</li>
                                        @if ($registered[$key] == 1)
                                            <li>
                                                <a class="btn btn-link" href="{{ $e->link_wa }}" role="button"
                                                    style="color: #274242 !important; background: #fff !important; border: 1px solid #273242 !important;">
                                                    Link WA Group
                                                </a>
                                            </li>
                                        @else
                                            <li style="display:none;"><a class="btn-holder text-center"
                                                    href="{{ $e->link_wa }}" role="button"
                                                    style="background-color: #fff !important; ">Link WA Group</a>
                                            </li>
                                        @endif
                                    </ul>
                                    @if ($registered[$key] == 1)
                                        <a href="#" class="btn btn-primary d-grid gap-2"
                                            style="cursor: not-allowed !important; color: #fff !important; opacity: 0.5 !important; background: red !important;"
                                            disabled="true">Already Registered</a>
                                    @else
                                        <a href="{{ url('peserta/add-to-cart/' . $e->id) }}" class="btn btn-primary d-grid gap-2"
                                            style="color: #fff !important; background: red !important;">Pilih Event</a>
                                    @endif
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.item -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>
                <!--/.row -->

                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
@endsection
