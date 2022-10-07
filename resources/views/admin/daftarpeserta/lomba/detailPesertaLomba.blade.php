@extends('layouts.admin')
@section('header')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tim Lomba Hackaton</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Hackaton Competition</h6>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>List Tim Hackaton dengan Nama Tim : {{ $nama }}</h6>
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
                  <th class="text-center">Nama Peserta</th>
                  <th class="text-center">Role Peserta</th>
                  <th class="text-center">Nomor HP Peserta</th>
                  <th class="text-center">Email Peserta</th>
                  <th class="text-center">Image</th>
                </tr>
              </thead>
              <tbody>
                @for ($i=0; $i < count($teamdetail); $i++)
                    <tr>
                        <td class="text-center">{{ $i + 1}}</td>
                        <td class="text-center">{{ $teamdetail[$i]->nama }}</td>
                        <td class="text-center">{{ $teamdetail[$i]->role }}</td>
                        <td class="text-center">{{ $teamdetail[$i]->no_hp }}</td>
                        <td class="text-center">{{ $teamdetail[$i]->email }}</td>
                        <td>
                            <a href="{{ asset('files/'.$teamdetail[$i]->image) }}" target="_blank" class="btn bg-gradient-info">Show Kartu Pelajar Peserta</a>
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
