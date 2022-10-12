@extends('layouts.mainweb')

@section('title')
ICF 2022 - Daftar Competition
@endsection

@section('content')
<div class="body-cart">
   <div class="container marketing">
    <div class="row">
         <div class="col-lg-12">
            <h2 class="text-center">Riwayat Acara Peserta {{ Auth::user()->nama }}</h2>
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Pembicara</th>
                        <th scope="col">Tanggal & Jam</th>
                        <th scope="col">Lihat Detail</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($events as $key => $e)
                        <tr>
                           <td>{{ $e->nama }}</td>
                           <td>{{ $e->author }}</td>
                           @php
                              $date1 = date_create($e->tanggal_start);
                              $date2 = date_create($e->tanggal_end);
                           @endphp
                           <td>       
                              @if ($e->jenis_id < 3)
                                 <p style="text-align: justify;"> 
                                    {{ date_format($date1, 'd F Y') }}<br>Pukul : {{ date_format($date1, 'H:i') }} - {{ date_format($date2, 'H:i') }}
                                 </p>                                  
                              @else
                                 <p style="text-align: justify;"> 
                                    {{ date_format($date1, 'd F Y') }} - {{ date_format($date2, 'd F Y') }}<br>Pukul : {{ date_format($date1, 'H:i') }} - {{ date_format($date2, 'H:i') }}
                                 </p>                                
                              @endif

                           </td>
                           <td>
                              @if($e->jenis_id === 3) 
                                 <a class="btn" href="{{ url('showteam/'.Auth::user()->id.'/'.$e->id) }}" style="background-color: red !important; color: #fff !important;">
                                    View Detail your Team
                                 </a>
                              @else
                                 <a href="{{ $e->link_wa }}" class="btn btn-link" style="border: 1px solid red !important; color: black !important;">Link Group Whatsapp</a>
                              @endif
                           </td>

                        </tr>
                     @endforeach
                  </tbody>
               </table>
         </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>
</div>
@endsection
