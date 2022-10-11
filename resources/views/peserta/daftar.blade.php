@extends('layouts.cart')
@extends('layouts.navbar')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/mainweb.css') }}"> --}}
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
   <div class="container">
      <div class="container page">

            <div class="row">
               @for ($i=0;$i<count($event);$i++)

                     <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                           <img src="{{ url('/assets/img/poster.png')}}" alt="{{ $event[$i]->url}}">
                           <div class="caption">
                                 <h4>{{ $event[$i]->nama}}</h4>
                                 <h5>Kategori : {{ $event[$i]->name}}</h5>
                                 <p>{{ $event[$i]->deskripsi }}</p>
                                 <ul>
                                    @php $date1 = date_create($event[$i]->tanggal_start);  $date2 = date_create($event[$i]->tanggal_end); @endphp
                                    <li>Tanggal: {{ date_format($date1, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li>
                                    <li><a class="btn-holder text-center" href="{{ $event[$i]->link_wa }}" role="button" style="background-color: #fff !important;">Link WA Group</a></li>
                                 </ul>

                                 <p><a class="btn btn-soft-dark nav-link" href="{{ url('peserta/add-to-cart/'.$event[$i]->id) }}" role="button" style="background-color: red !important">Pilih Event</a></p>
                           </div>
                        </div>
                     </div>
               @endfor
            </div><!-- /.row -->
      </div>
  </div>
</div>
@endsection
{{-- <div class="col-lg-4">
      <img class="img-circle" src="{{ url('/assets/img/poster.png')}}" alt="{{ $event[$i]->url}}">
      <h2>{{ $event[$i]->nama}}</h2>
      <h5>Kategori : {{ $event[$i]->name}}</h5>
      <p>{{ $event[$i]->deskripsi }}</p>
      <ul>
         @php $date1 = date_create($event[$i]->tanggal_start);  $date2 = date_create($event[$i]->tanggal_end); @endphp
         <li>Tanggal: {{ date_format($date1, "d F Y") }}<br>Pukul : {{ date_format($date1, "H:i")}} - {{ date_format($date2, "H:i")}}</li>
      </ul>
      <a class="btn btn-soft-dark nav-link" href="{{ $event[$i]->link_wa }}" role="button" style="background-color: #273242  !important">Link WA Group</a> 
      <p><a class="btn btn-soft-dark nav-link" href="#" role="button" style="background-color: red !important">Pilih Event</a></p>
</div><!-- /.col-lg-4 --> --}}