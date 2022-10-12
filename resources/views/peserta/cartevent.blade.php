@extends('layouts.cart')
@extends('layouts.navbar')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@section('title')
ICF 2022 - Daftar
@endsection

@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
               <th style="width:80%">Your's Event</th>
            </tr>
        </thead>
        <tbody>
            @if (session('cart'))
               @foreach (session('cart') as $id => $details)
                  <tr>
                     <td data-th="Nama">
                        <div class="row">
                           <div class="col-sm-3 hidden-xs"><img src="{{ url('/assets/img/poster.png')}}" height="200" width="150" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-9">
                              <h4 class="nomargin">{{ $details['nama'] }}</h4>
                           </div>
                        </div>
                     </td>
                  </tr>
               @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
               <td><a href="{{ url('/peserta/daftarevents') }}" class="btn text-light" style="background: #273242 !important"><i class="fa fa-angle-left"></i> Daftar Event</a></td>
               <td colspan="2" class="hidden-xs"></td>
               <td><a href="{{ url('/peserta/checkout') }}" class="btn text-light" style="background: red !important;"><i class="fa fa-angle-right"></i> Checkout</a></td>
            </tr>
        </tfoot>
    </table>

@endsection