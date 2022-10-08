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
         @if ( session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
         @endif
         @if ( session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
         @endif
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
                        <form method="POST" action="{{ url('/lomba/confirm/'.$data[$i]->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="accepted">
                            <button type="submit" class="btn btn-warning" onclick="if(!confirm('apakah anda yakin menerima tim {{$data[$i]->nama_tim}} ini ?')) return false">Accept Tim {{ $data[$i]->nama_tim }}</button><br>
                         </form>
                        <a href="#reject_{{$data[$i]->id }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reject_{{$data[$i]->id }}">Reject Tim {{ $data[$i]->nama_tim }}</a>
                         {{-- Modal --}}
                         <div class="modal fade" id="reject_{{$data[$i]->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Tolak Verifikasi Tim {{ $data[$i]->nama_tim }}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('/lomba/reject/'.$data[$i]->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                           <label class="form-control-label" for="txt-message">Input Keterangan Tolak Verifikasi Tim {{ $data[$i]->nama_tim }}</label>
                                           <textarea class="form-control" id="txt-message" rows="3" name="keterangan"></textarea>
                                        </div>
                                        <input type="hidden" name="status" value="rejected">
                                        <input type="submit" class="btn btn-danger" id="btn-reject" value="Tolak">
                                     </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
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
