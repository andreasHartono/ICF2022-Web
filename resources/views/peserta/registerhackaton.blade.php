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
              <h5 class="fs-1 myTitle">Competitive programming</h5>
              <div class="d-flex justify-content-center">
                  <button class="btn myBtn" style="width: 400px; max-width: 90%; background: #273242 !important; color: white !important;" data-bs-toggle="modal"
                      data-bs-target="#modalPendaftarancomprog">Catatan Pendaftaran</button>
              </div>
              <form method="POST" action="{{ url('/registercomprog') }}" class="mt-5"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="data-tim">
                      <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                      <Label class="myLabel">Nama Tim</Label>
                      <input type="text" name="nama_tim" id="txtNamaTim"
                          class="myTextbox width-90 @error('nama_tim') is-invalid @enderror" placeholder="Nama Tim" value="{{ old('nama_tim') }}"
                          >
                      @error('nama_tim')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nama Instansi</label>
                      <input type="text" name="instansi" id="txtinstansi"
                          class="myTextbox width-90 @error('instansi') is-invalid @enderror"
                          placeholder="Nama Instansi" value="{{ old('instansi') }}">
                      @error('instansi')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="data-anggota ketua">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua Tim</h5>
                      <label class="myLabel">Nama Ketua Tim</label>
                      <input type="text" name="nama" id="txtNamaKetua"
                          class="myTextbox width-90 @error('nama') is-invalid @enderror" placeholder="Nama Ketua Tim" value="{{ old('nama') }}"
                          >
                      @error('nama')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp" id="txtNoHpKetua"
                          class="myTextbox width-90 @error('no_hp') is-invalid @enderror"
                          placeholder="081123456789" value="{{ old('no_hp') }}">
                      @error('no_hp')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email" id="txtEmailKetua"
                          class="myTextbox width-90 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"
                          >
                      @error('email')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="image"
                          id="KartuPelajarKetua formFileMultiple"
                          class="myInputFile width-90 @error('image') is-invalid @enderror"
                          style="color:navy;">
                      @error('image')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                  </div>

                  <div class="data-anggota anggota-1">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 1</h5>
                      <label class="myLabel">Nama Anggota 1</label>
                      <input type="text" name="nama1" id="txtNamaAnggota1" class="myTextbox width-90"
                          placeholder="Nama Anggota 1" value="{{ old('nama1') }}">
                      @error('nama1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp1" id="txtNoHpAnggota1" class="myTextbox width-90"
                          placeholder="081123456789" value="{{ old('no_hp1') }}">
                          @error('no_hp1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email1" id="txtEmailAnggota1" class="myTextbox width-90"
                          placeholder="Email" value="{{ old('email1') }}">
                          @error('email1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                          @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="image1"
                          id="KartuPelajarAnggota1 formFileMultiple"
                          class="myInputFile width-90 @error('image1') is-invalid @enderror" style="color:navy;">
                          @error('image1')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                          <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                  </div>

                  <div class="data-anggota anggota-2">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                      <label class="myLabel">Nama Anggota 2</label>
                      <input type="text" name="nama2" id="txtNamaAnggota2" class="myTextbox width-90 @error('nama2') is-invalid @enderror"
                          placeholder="Nama Anggota 2" value="{{ old('nama2') }}">
                          @error('nama2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp2" id="txtNoHpAnggota2" class="myTextbox width-90 @error('no_hp2') is-invalid @enderror"
                          placeholder="081123456789" value="{{ old('no_hp2') }}">
                           @error('no_hp2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email2" id="txtEmailAnggota2" class="myTextbox width-90 @error('email2') is-invalid @enderror"
                          placeholder="Email" value="{{ old('email2') }}">
                           @error('email2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="image2"
                          id="KartuPelajarAnggota2 formFileMultiple"
                          class="myInputFile width-90 @error('image2') is-invalid @enderror" style="color:navy;">
                          @error('image2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                          <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                  </div>

                  <button class="btn myBtn width-90 mt-5 text-light" style="background: red !important; color: white !important;" type="submit">Register</button>
              </form>
          </div>
      </div>
  </div>
</div>
</section>

@endsection
