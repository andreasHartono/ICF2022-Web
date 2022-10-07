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
          <h6>List Tim Hackaton Competition</h6>
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
                  <th class="text-center">Peserta</th>
                  <th class="text-center">Tanggal Daftar</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td class="text-center">
                        {{ $data[0]->id }}
                    </td>
                    <td class="text-center">{{ $data[0]->nama_tim }}</td>
                    <td class="text-center">{{ $data[0]->instansi }}</td>
                    <td>
                        @for($i=0;$i < count($data); $i++)
                        <p class="text-left">
                            Role : &nbsp;{{ $data[$i]->role}}<br>
                            Nama : &nbsp; {{ $data[$i]->nama }} <br>
                        </p>
                        @endfor
                    </td>

                    <td class="text-center">{{ $data[0]->tanggal_daftar }}</td>
                    <td>
                        @if($data[0]->status=="accepted")
                            <span class="badge bg-success text-white text-center">{{ $data[0]->status }}</span>
                        @elseif($data[0]->status=="rejected")
                            <span class="badge bg-danger text-white text-center">{{ $data[0]->status }}</span>
                        @else
                            <span class="badge bg-primary text-white text-center">{{ $data[0]->status }}</span>
                        @endif
                    </td>
                    <td><a href="#team_{{ $data[0]->id }}" class="btn btn-twitter" data-bs-toggle="modal" data-bs-target="#team_{{ $data[0]->id }}">Show Detail Verifikasi</a></td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="team_{{ $data[0]->id }}" tabindex="-1"  role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title">Validasi Team Peserta</h5>
                             <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                          </div>
                          <div class="modal-body">
                             <div class="row">
                                @for ($i=0;$i < count($data); $i++)
                                   <div class="col-md-4">
                                      <div class="card">
                                         <!-- Card image -->
                                         <a href="{{ asset('files/'.$data[$i]->image) }}" target="_blank"
                                            style="display:flex; justify-content: center; align-items: center ;width: 50%; height: 40px;
                                            border-radius: 5px; margin: 0 auto; background-color: #1da1f2; color: white;
                                            margin-top: 15px" alt="{{ $data[$i]->image }}">Check Me</a>
                                         <!-- Card body -->
                                         <div class="card-body">
                                            <h5 class="h2 card-title mb-0">Role : &nbsp;{{ $data[$i]->role}}<br>
                                                                        Nama : &nbsp; {{ $data[$i]->nama }} <br>
                                            </h5>
                                            <p id="emailTxt" class="card-text mt-4">Email : {{ $data[$i]->email }}</p>
                                            <p class="card-text mt-4">Nomor Telepon : {{ $data[$i]->no_hp }}</p>
                                         </div>
                                      </div>
                                   </div>
                                @endfor
                                {{-- Form Tolak Verifikasi --}}
                                <div class="col-lg-12">
                                   <div class="card">
                                      <div class="card-header">
                                         <h3 class="mb-0">Tolak Verifikasi</h3>
                                      </div>
                                      <div class="card-body">
                                         <form method="POST" action="#">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                               <label class="form-control-label" for="txt-message">Input Message</label>
                                               <textarea class="form-control" id="txt-message" rows="3" name="message"></textarea>
                                            </div>
                                            <input type="hidden" name="status" value="rejected">
                                            <input type="submit" class="btn btn-danger my-2" id="btn-reject" value="Tolak">
                                         </form>
                                      </div>
                                   </div>
                                </div>
                                {{-- End Form Tolak Verifikasi --}}
                             </div>
                          </div>
                          <div class="modal-footer">
                             <form method="POST" action="#">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="accepted">
                                <input type="submit" class="btn btn-info" id="btn-accept" value="Verifikasi Data">
                             </form>
                             <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- End Modal -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer py-4">
           <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                 {{-- {{ $query->links() }} --}}
              </ul>
           </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
