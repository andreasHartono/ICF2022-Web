@extends('layouts.admin')
@section('header')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Peserta Workshop UI</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Workshop How to Make a Good UI</h6>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>List Peserta Workshop How to Make a Good UI</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table table-hover align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nomor HP</th>
                </tr>
              </thead>
              <tbody>
                 @for($i=0;$i < count($data); $i++)
                    <tr>
                       <td class="text-center">{{ $i + 1 }}</td>
                       <td>{{ $data[$i]->nama }}</td>
                       <td>{{ $data[$i]->email }}</td>
                       <td>{{ $data[$i]->no_hp }}</td>
                    </tr>
                 @endfor
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
