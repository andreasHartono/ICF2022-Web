@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}">
@section('title')
ICF 2022 - Workshop
@endsection

@section('content')
   @foreach ($lomba as $key => $competition)
      <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
         <div class="workshop-container">
            <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-3 d-flex justify-content-center workshop-poster">
                     <img src="{{ url('/assets/img/poster.png') }}" alt="Poster Workshop" style="width: 80%;">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-7 workshop-regis">
                     <div class="card mx-auto workshop-card" style="">
                        <h3 class="text-center">{{ $competition->nama }}</h3>
                        <ul>
                              <li style="list-style: none;text-align: justify; color: black;"><p>{{ $competition->deskripsi }}</p></li>
                              <li style="list-style: none;"><h6>Lokasi Acara :</h6> <p>{{ $competition->lokasi }}</p></li>
                              @php $date1 = date_create($competition->tanggal_start);  $date2 = date_create($competition->tanggal_end); @endphp
                              <li style="list-style: none;color: black;"><h6>Tanggal Acara</h6> {{ date_format($date1, "d F Y") }} - {{ date_format($date2, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li><br>
                              <h5>Syarat & Ketentuan {{ $competition->nama }}</h5>
                              @if ($competition->id == 5)
                                    <button class="btn myBtn" style="width: 400px; max-width: 90%;background: #273242 !important; color: white !important;"
                                    data-bs-toggle="modal" data-bs-target="#modalPendaftarancomprog">Catatan Pendaftaran Competitive Programming</button>                      
                              @elseif ($competition->id == 6)
                                    <button class="btn myBtn" style="width: 400px; max-width: 90%;background: #273242 !important; color: white !important;"
                                    data-bs-toggle="modal" data-bs-target="#modalPendaftaranmlbb">Catatan Pendaftaran MLBB Competition</button>
                              @elseif ($competition->id == 7)
                                    <button class="btn myBtn" style="width: 400px; max-width: 90%;background: #273242 !important; color: white !important;"
                                    data-bs-toggle="modal" data-bs-target="#modalPendaftarantiktok">Catatan Pendaftaran Tiktok Challenges</button>      
                              @elseif ($competition->id == 8)
                                    <button class="btn myBtn" style="width: 400px; max-width: 90%;background: #273242 !important; color: white !important;"
                                    data-bs-toggle="modal" data-bs-target="#modalPendaftarancomic">Catatan Pendaftaran Comic Strip</button>
                              @endif
                        </ul>
                        

                     </div>
                  </div>
            </div>
         </div>
      </div>
   @endforeach
@endsection
