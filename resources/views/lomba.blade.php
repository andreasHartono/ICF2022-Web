@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}">
@section('title')
ICF 2022 - Workshop
@endsection

@section('content')
@for($i=0;$i<count($lomba); $i++)
<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
    <div class="workshop-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3 d-flex justify-content-center workshop-poster">
                <img src="{{ url('/assets/img/poster.png') }}" alt="Poster Workshop" style="width: 80%;">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-7 workshop-regis">
                <div class="card mx-auto workshop-card" style="">
                    <h4>{{ $lomba[$i]->nama }}</h4>
                    <p>{{ $lomba[$i]->deskripsi }}</p>
                    <ul>
                        <li><h6>Lokasi Acara :</h6> {{ $lomba[$i]->lokasi }}</li><br>
                        @php $date1 = date_create($lomba[$i]->tanggal_start);  $date2 = date_create($lomba[$i]->tanggal_end); @endphp
                        <li><h6>Tanggal:</h6> {{ date_format($date1, "d F Y") }} - {{ date_format($date2, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li><br>
                        <h5>Syarat & Ketentuan {{ $lomba[$i]->nama }}</h5>
                        <li>{{ $lomba[$i]->term_condition}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endfor
@endsection
