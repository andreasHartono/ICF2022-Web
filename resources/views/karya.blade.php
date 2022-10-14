@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}">
@section('title')
ICF 2022 - Daftar Karya Pameran
@e ndsection

@section('content')
{{-- @foreach ($workshop as $k => $w)
   <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
        <div class="workshop-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 d-flex justify-content-center workshop-poster">
                    <img src="{{ url('/assets/img/poster.png') }}" alt="Poster Workshop {{ $w->url }}" style="width: 80%;">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-7 workshop-regis">
                    <div class="card mx-auto workshop-card" style="">
                        <h3 class="text-center">{{ $w->nama }}</h3>
                        <ul>
                           <li style="list-style: none;"><p style="color: black;">{{ $w->deskripsi }}</p></li>
                            <li style="list-style: none;"><p style="text-align: justify;"><h6>Lokasi Acara</h6> {{ $w->lokasi }}</p></li>
                            @php $date1 = date_create($w->tanggal_start);  $date2 = date_create($w->tanggal_end); @endphp
                            <li style="list-style: none;"><h6>Tanggal Acara</h6>{{ date_format($date1, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li>
                            <li style="list-style: none;"><p style="text-align: justify; color: black;"><h6>Syarat & Ketentuan</h6> {{ $w->term_condition }}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
</div>
</div>
@endsection
