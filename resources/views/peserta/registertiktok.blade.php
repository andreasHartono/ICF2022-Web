@extends('layouts.mainweb')

@section('title')
    ICF 2022 - Register
@endsection

@section('content')
    <section id="register" style="margin: 80px 0 100px;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-11">
                    <h2 class="fs-1 myTitle">REGISTRATION</h2>
                    <h5 class="fs-1 myTitle">Tiktok Challenges ICF 2022</h5>
                    <div class="d-flex justify-content-center">
                        <button class="btn myBtn"
                            style="width: 400px; max-width: 90%; background: #273242 !important; color: white !important;"
                            data-bs-toggle="modal" data-bs-target="#modalPendaftarantiktok">Catatan Pendaftaran</button>
                    </div>
                    <form method="POST" action="{{ url('/registertiktok') }}" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tiktokId" value="7">
                        <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                        <div class="data-tim">
                            <Label class="myLabel">Tiktok Account</Label>
                            <input type="text" name="akuntiktok" id="txtAkunTiktok"
                                class="myTextbox width-90 @error('akuntiktok') is-invalid @enderror"
                                placeholder="@exampleaa" value="{{ old('akuntiktok') }}">
                            @error('akuntiktok')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn myBtn width-90 mt-5 text-light"
                            style="background: red !important; color: white !important;" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </section>
@endsection
