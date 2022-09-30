@extends('layouts.admin')
@section('header')
   <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
   </ol>
   <h6 class="font-weight-bolder text-white mb-0">Welcome Admin</h6>
@endsection
@section('content')
   <div class="col-lg-12">
            <!-- START card -->
            <div class="card bg-gradient-danger text-white">
                <div class="card-header">
                    <div class="card-title">
                        <h1>Welcome to Admin Dashboard ICF 2022</h1>
                    </div>
                    {{-- <div class="clearfix"></div> --}}
                </div>
                <div class="card-body">
                    <p>
                       Selamat Datang di Admin Dashboard ICF 2022. Untuk validasi data  data dapat anda
                        lakukan dengan memilih menu pada bagian kiri.<br /> Selamat Bertugas .Terima Kasih.
                     </p>
                </div>
            </div>
            <!-- END card -->
        </div>
@endsection