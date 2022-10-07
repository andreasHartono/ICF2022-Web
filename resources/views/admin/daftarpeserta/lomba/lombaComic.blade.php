@extends('layouts.admin')
@section('header')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tim Lomba Comic Strip</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Comic Strip Competition</h6>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>List Tim Comic Strip Competition</h6>
          <div class="card-header border-0">
            <h2 class="mb-0">Verifikasi Team</h2>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
               <p class="col-md-4 mb-0 text-muted">Keterangan Status</p>
               <ul class="nav class col-md-4 d-flex align-items-center justify-start mb-3 mb-md-0 me-md-auto text-decoration-none">
                  <li class="nav-item">
                     <span class="badge bg-primary text-white">Pending</span>
                  </li>&nbsp;&nbsp;
                  <li class="nav-item">
                     <span class="badge bg-success text-white">Accepted</span>
                  </li>&nbsp;&nbsp;
                  <li class="nav-item">
                     <span class="badge bg-danger text-white">Rejected</span>
                  </li>
               </ul>
            </div>
         </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table table-hover align-items-center mb-0">
              <thead>
                <tr>
                    <th class="text-center">#</th>
                  <th class="text-center">Nama Tim</th>
                  <th class="text-center">Nama Instansi</th>
                  <th class="text-center">Tanggal Daftar</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Detail</th>
                </tr>
              </thead>
              <tbody>
                @for ($i=0; $i < count($data); $i++)
                <tr>
                    <td class="text-center">{{ $data[$i]->id }}</td>
                    <td class="text-center">{{ $data[$i]->nama_tim }}</td>
                    <td class="text-center">{{ $data[$i]->instansi }}</td>
                    <td class="text-center">{{ $data[$i]->tanggal_daftar }}</td>
                    <td>
                        @if($data[$i]->status=="accepted")
                            <span class="badge bg-success text-white text-center">{{ $data[$i]->status }}</span>
                        @elseif($data[$i]->status=="rejected")
                            <span class="badge bg-danger text-white text-center">{{ $data[$i]->status }}</span>
                        @else
                            <span class="badge bg-primary text-white text-center">{{ $data[$i]->status }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/showpeserta/'.$data[$i]->id) }}" class="btn bg-gradient-info">Show Detail Peserta</a>
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
