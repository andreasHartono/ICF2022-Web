@extends('layouts.admin')
@section('header')
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Dashboard</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Event</li>
   </ol>
   <h6 class="font-weight-bolder text-white mb-0">Edit Event {{ $event->nama }}</h6>
@endsection
@section('content')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit Acara {{ $event->nama}}</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <form role="form" method="POST" action="{{ url('daftarevent/update/'.$event->id )}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-control-label">Jenis Acara</label>
                        <select class="form-control" name="jenis_id">
                            @for($i=0;$i<count($jenis);$i++)
                                <option value="{{ $jenis[$i]->id }}" @if($jenis[$i]->id == $event->jenis_id) selected @endif>
                                    {{$jenis[$i]->nama}}
                                </option>
                            @endfor
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNama" class="form-control-label">Nama Acara</label>
                        <input class="form-control" type="text" value="{{ $event->nama }}" id="inputNama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="inputtanggalstart" class="form-control-label">Tanggal Awal Acara</label>
                        <input class="form-control" type="datetime-local" value="{{ $event->tanggal_start}}" id="inputtanggalstart" name="tanggal_start">
                    </div>
                    <div class="form-group">
                        <label for="inputtanggalend" class="form-control-label">Tanggal Akhir Acara</label>
                        <input class="form-control" type="datetime-local" value="{{ $event->tanggal_end}}" id="inputtanggalstart" name="tanggal_end">
                    </div>
                    <div class="form-group">
                        <label for="inputdeskripsi">Deskripsi Acara</label>
                        <textarea class="form-control" id="inputdeskripsi" rows="5" name="deskripsi">{{ $event->deskripsi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputlokasi" class="form-control-label">Lokasi Acara</label>
                        <input class="form-control" type="text" value="{{ $event->lokasi }}" id="inputlokasi" name="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="inputWhatsapp" class="form-control-label">Link Whatsapp Acara</label>
                        <input class="form-control" type="url" value="{{ $event->link_wa }}" id="inputWhatsapp" name="link_wa">
                    </div>
                    <div class="form-group">
                        <label for="inputauthor" class="form-control-label">Author Acara</label>
                        <input class="form-control" type="text" value="{{ $event->author }}" id="inputauthor" name="author">
                    </div>
                    <div class="form-group">
                        <label for="inputterm_condition" class="form-control-label">Syarat & Ketentuan Acara</label>
                        <textarea class="form-control" id="inputterm_condition" rows="5" name="term_condition">{{ $event->term_condition}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg w-100 btn-primary">Edit Acara</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection
