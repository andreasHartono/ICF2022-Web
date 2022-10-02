@extends('layouts.peserta')
@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Peserta</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Soal</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Welcome Peserta</h6>
@endsection
@section('content')
<div class="col-lg-12">
    <div class="card text-black">
        <div class="card-header">
            <div class="card-title">
                <h5>Soal</h5>
                <div style="margin-right: 10px; float:left; border: 1px solid black; text-align:center; width: 30px;">
                    <a href="#">1</a>
                </div>
                <div style="margin-right: 10px; float:left; border: 1px solid black; text-align:center; width: 30px;">
                    <a href="#">2</a>
                </div>
                <div style="margin-right: 10px; float:left; border: 1px solid black; text-align:center; width: 30px;">
                    <a href="#">3</a>
                </div>
                <div style="margin-right: 10px; float:left; border: 1px solid black; text-align:center; width: 30px;">
                    <a href="#">4</a>
                </div>
                <div style="margin-right: 10px; float:left; border: 1px solid black; text-align:center; width: 30px;">
                    <a href="#">5</a>
                </div>
            </div>
            {{-- <div class="clearfix"></div> --}}
        </div>
        <div class="card-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <input type="file" style="border:1px solid black">
        </div>
        <div class="card-footer" style="text-align:right">
            <button type="button">Prev</button>
            <button type="button">Next</button>
        </div>
    </div>
    <!-- END card -->
</div>
@endsection
