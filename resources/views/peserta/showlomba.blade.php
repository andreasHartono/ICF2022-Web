@extends('layouts.mainweb')

@section('title')
ICF 2022 - Daftar
@endsection

@section('content')
<div class="body-cart">
   <div class="container marketing">

    <div class="row">
        @for ($i=0;$i<count($lomba);$i++)
            <div class="col-lg-4">
                <img class="img-circle" src="{{ url('/assets/img/poster.png')}}" alt="{{ $lomba[$i]->url}}">
                <h2>{{ $lomba[$i]->nama}}</h2>
                <h5>Kategori : {{ $lomba[$i]->name}}</h5>
                <p>{{ $lomba[$i]->deskripsi }}</p>
                <p>Mulai : {{ $lomba[$i]->tanggal_start }}<br> Akhir : {{ $lomba[$i]->tanggal_end}}</p>
                <p>Link WA : <a href="{{ $lomba[$i]->link_wa }}" class="btn" style="background-color:red !important; ">Click Me</a></p>
                <p><a class="btn btn-soft-dark" href="{{ url('registerlomba/'.$lomba[$i]->id) }}" role="button"style="background-color:red !important; ">Register</a></p>
            </div><!-- /.col-lg-4 -->
        @endfor
    </div><!-- /.row -->
  </div>
</div>
@endsection
