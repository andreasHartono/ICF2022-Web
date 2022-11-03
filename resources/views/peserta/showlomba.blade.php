@extends('layouts.mainweb')

@section('title')
ICF 2022 - Daftar Competition
@endsection

@section('content')
<div class="body-cart">
   <div class="container marketing">
   
    <div class="row">
      @if(session()->has("success"))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get("success") }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      @if(session()->has("error"))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get("error") }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      @if(session()->has('registerClosed'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ session()->get('registerClosed') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @foreach ($lomba as $key => $comp)
         <div class="col-lg-4">
            <img class="img-circle" src="{{ url('/assets/img/poster.png')}}" alt="{{ $comp->url}}">
            <h2>{{ $comp->nama}}</h2>
            <p style="text-align: justify;">{{ $comp->deskripsi }}</p>
            @php
               $date1 = date_create($comp->tanggal_start);
               $date2 = date_create($comp->tanggal_end);
               date_default_timezone_set("Asia/Jakarta");
               $endDate = "02 November 2022";
               $endDateTimestamp = strtotime($endDate);
            @endphp
            <h6>Tanggal Acara</h6>
            <p style="text-align: center;"> {{ date_format($date1, 'd F Y') }} - {{ date_format($date2, 'd F Y') }}<br>Pukul :
            {{ date_format($date1, 'H:i') }} - {{ date_format($date2, 'H:i') }}</p>
            <ul style="list-style: none;">

               @if($registered[$key] == 1)
                  <li>
                     <a class="btn btn-primary text-center" href="{{ $comp->link_wa }}"
                        role="button" style="background-color: #fff !important; color: red !important; border: 1px solid red !important;">Link WA Group</a>
                  </li>
               @else
                  <li style ="display:none;"><a class="btn btn-primary text-center" href="{{ $comp->link_wa }}"
                     role="button" style="background-color: #fff !important; color: red !important; border: 1px solid red !important;">Link WA Group</a>
                  </li>
               @endif
            </ul>
            @if($registered[$key] == 1)
                  <p class="disabled">
                     <a class="btn btn-primary text-light d-grid gap-2" href="#" role="button" 
                     style="background-color: red !important;cursor: not-allowed !important;
                     opacity: 0.5 !important; color: #fff !important;" disabled="true">
                     Already Registered
                     </a>
                  </p>
            @else

               @if(time() > $endDateTimestamp) 
                  <p class="disabled">
                     <a class="btn btn-primary text-light d-grid gap-2" href="#" role="button" 
                     style="background-color: red !important;cursor: not-allowed !important;
                     opacity: 0.5 !important; color: #fff !important;" disabled="true">
                     Close Registration
                     </a>
                  </p>
               @else
                  <p>
                     <a class="btn btn-soft-dark text-light d-grid gap-2" href="{{ url('registerlomba/'.$comp->id) }}" role="button" 
                        style="background: red !important; color: white !important ">Register</a>
                  </p>
               @endif
            @endif

         </div><!-- /.col-lg-4 -->
      @endforeach
    </div><!-- /.row -->
  </div>
</div>
@endsection
