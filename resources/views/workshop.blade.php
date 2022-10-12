@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}">
@section('title')
ICF 2022 - Workshop
@endsection

@section('content')
<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600" >
<div class="workshop-container">
<div class="row align-items-center">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 d-flex justify-content-center workshop-poster">
        <img src="{{ url('/assets/img/poster.png') }}" alt="Poster Workshop" style="width: 70%;">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-7 workshop-regis">
        <div class="card mx-auto workshop-card" style="">
            <h4>Register Workshop</h4>
            <p>Workshop game seru</p>
            <ul>tanggal 9</ul>
            <button type="button" class="btn myBtn dark" data-bs-toggle="modal" data-bs-target="#modalRegister">
                Register
            </button>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">       
        <div class="modal-content">
            <div class="modal-header" style="background-color:#a0583a; color: #eceeca; font-weight: 600">
                <h5 class="modal-title" id="modal1Label">Daftar Workshop</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <input type="hidden" name="workshopId" value="1">
                <div class="modal-body" style="background-color:#eceeca">
              
                </div>
                <div class="modal-footer" style="background-color:#eceeca">
                    <button type="submit" name="btnSubmit" value="submit" class="btn myBtn w-100">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection