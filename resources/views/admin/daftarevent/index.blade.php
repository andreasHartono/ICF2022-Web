@extends('layouts.admin')
@section('header')
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Dashboard</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">Event</li>
   </ol>
   <h6 class="font-weight-bolder text-white mb-0">Daftar Event</h6>
@endsection
@section('content')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Acara</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Jenis Acara</th>
                      <th>Tanggal Mulai Acara</th>
                      <th>Tanggal Akhir Acara</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @for($i=0;$i < count($query); $i++)
                        <tr>
                           <td class="text-center">{{ $query[$i]->id }}</td>
                           <td>{{ $query[$i]->nama }}</td>
                           <td>{{ $query[$i]->jenis->nama }}</td>
                           <td>{{ $query[$i]->tanggal_start }}</td>
                           <td>{{ $query[$i]->tanggal_end }}</td>
                           <td>
                              <a href="#event_{{ $query[$i]->id }}" class="btn btn-block bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#event_{{ $query[$i]->id }}">Show Detail Event</a><br>
                              <a href="#" class="btn btn-block bg-gradient-warning">Edit Event</a>
                           </td>
                        </tr>
                           <div class="modal fade" id="event_{{ $query[$i]->id }}" tabindex="-1" role="dialog"
                              aria-labelledby="event_{{ $query[$i]->id }}" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">{{ $query[$i]->nama }}</h5>
                                       </div>
                                       <div class="modal-body">
                                          <p><h6>Lokasi : </h6> {{ $query[$i]->lokasi }}</p>
                                          <p><h6>Deskripsi : </h6>{{ $query[$i]->deskripsi }}</p>
                                          <p><h6>Link WA : </h6><a href="{{ $query[$i]->link_wa }}" class="btn btn-link">Click Me</a></p>
                                          <p><h6>Author : </h6>{{ $query[$i]->author }}</p>
                                          <p><h6>Syarat & Ketentuan : </h6>{{ $query[$i]->term_condition }}</p>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                     @endfor
                  </tbody>
                </table>
              </div>
            </div>
            {{-- <div class="card-footer py-4">
               <nav aria-label="...">
                  <ul class="pagination justify-content-end mb-0">
                  </ul>
               </nav>

            </div> --}}
          </div>
        </div>
      </div>
@endsection
