@extends('layouts.mainweb')

@section('title')
ICF 2022 - Daftar
@endsection

@section('content')
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
