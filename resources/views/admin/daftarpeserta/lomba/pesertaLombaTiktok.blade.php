@extends('layouts.admin')
@section('header')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Peserta Lomba Tiktok</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Tiktok Challenges Competition</h6>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>List Peserta Tiktok Challenge</h6>
            <div class="card-header border-0">
                <h2 class="mb-0">Peserta Tiktok Challenge ICF 2022</h2>
         </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table table-hover align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Nama Peserta</th>
                  <th class="text-center">Email Peserta</th>
                  <th class="text-center">Nomor HP Peserta</th>
                  <th class="text-center">Akun Tikok Peserta</th>
                  <th class="text-center">Kartu Pelajar Peserta</th>
                </tr>
              </thead>
              <tbody>
                @for ($i=0; $i < count($data); $i++)
                    <tr>
                        <td class="text-center">{{ $i + 1}}</td>
                        <td class="text-center">{{ $data[$i]->nama }}</td>
                        <td class="text-center">{{ $data[$i]->email }}</td>
                        <td class="text-center">{{ $data[$i]->no_hp }}</td>
                        <td class="text-center">{{ $data[$i]->akun_tiktok }}</td>
                        <td>
                            <a href="{{ asset('files/'.$data[$i]->image) }}" target="_blank" class="btn bg-gradient-info">Show Kartu Pelajar Peserta</a>
                        </td>
                    </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
