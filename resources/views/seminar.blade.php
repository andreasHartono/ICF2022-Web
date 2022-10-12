@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}">
@section('title')
ICF 2022 - Workshop
@endsection

@section('content')
@for($i=0;$i<count($seminar);$i++)
    <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
        <div class="workshop-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 d-flex justify-content-center workshop-poster">
                    <img src="{{ url('/assets/img/poster.png') }}" alt="Poster Workshop" style="width: 80%;">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-7 workshop-regis">
                    <div class="card mx-auto workshop-card" style="">
                        <h4>{{ $seminar[$i]->nama }}</h4>
                        <p style="text-align: justify;">{{ $seminar[$i]->deskripsi }}</p>
                        <p>Lokasi Acara : {{ $seminar[$i]->lokasi }}</p>
                        <p style="text-align: justify;">Syarat & Ketentuan <br> {{ $seminar[$i]->term_condition }}</p>
                        <ul>
                            @php $date1 = date_create($seminar[$i]->tanggal_start);  $date2 = date_create($seminar[$i]->tanggal_end); @endphp
                            <li>Tanggal: {{ date_format($date1, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor
</div>
</div>
@endsection
