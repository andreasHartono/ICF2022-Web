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
              <h5 class="fs-1 myTitle">Comic Strip Competition</h5>
              <div class="d-flex justify-content-center">
                  <button class="btn myBtn" style="width: 400px; max-width: 90%;" data-bs-toggle="modal"
                      data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
              </div>
              <form method="POST" action="{{ url('/registercomic') }}" class="mt-5"
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
                      {{-- <label class="myLabel"></label>
                      <input type="text" name="email" id="txtemail"
                          class="myTextbox width-90  @error('email') is-invalid @enderror" placeholder="email"
                          >
                      @error('email')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror --}}
                      {{-- <label class="myLabel">Password</label>
                      <input type="password" name="password" id="txtPassword"
                          class="myTextbox width-90 @error('password') is-invalid @enderror" placeholder="Password"
                          >
                      @error('password')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <div class="d-flex align-items-center" style="margin-left: 5%; position: relative;">
                          <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()">
                          <span class="checkmark"></span>
                          <span class="chkText">Show Password</span>
                      </div> --}}
                  </div>

                  <div class="data-anggota ketua">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua Tim</h5>
                      <label class="myLabel">Nama Ketua Tim</label>
                      <input type="text" name="name" id="txtNamaKetua"
                          class="myTextbox width-90 @error('name') is-invalid @enderror" placeholder="Nama Ketua Tim" value="{{ old('name') }}"
                          >
                      @error('name')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="phone_number" id="txtNoHpKetua"
                          class="myTextbox width-90 @error('phone_number') is-invalid @enderror"
                          placeholder="Nomor HP" value="{{ old('phone_number') }}">
                      @error('phone_number')
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
                      <input type="text" name="name1" id="txtNamaAnggota1" class="myTextbox width-90"
                          placeholder="Nama Anggota 1" value="{{ old('name1') }}">
                      @error('name1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="phone_number1" id="txtNoHpAnggota1" class="myTextbox width-90"
                          placeholder="08919124914" value="{{ old('phone_number1') }}">
                          @error('phone_number1')
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
                  <button class="btn myBtn width-90 mt-5 text-light" style="background: #red !important;" type="submit">Register</button>
              </form>
          </div>
      </div>
  </div>


  <!-- Modal -->
    <div class="modal fade" id="modalPendaftaran" tabindex="-1" aria-labelledby="modalPendaftaranLabel"
    aria-hidden="true">
        <link rel="stylesheet" href="{{ asset('assets/css/popup.css') }}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPendaftaranLabel">Mekanisme Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3 class="text-center">Alur Pendaftaran Online</h3>
                        <ol>
                            <li>Peserta melakukan pendaftaran pada website ICF 2022 (<u><a class="hyperlink"
                                        href="https://icfubaya2022.com">icfubaya2022.com</a></u>).</li>
                            <li>
                                Lomba Comic Strip ICF 2022 merupakan lomba untuk membuat komik yang bertemakan
                                Technology for Humanity yang diadakan pada hari Minggu, 6 November 2022.
                                Media komik adalah kertas berukuran A4 dengan template yang sudah disediakan. Berikut
                                syarat dan ketentuan lomba Tiktok ICF 2022:
                                <ul>
                                    <li class="ketentuan">Lomba boleh dilaksanakan secara individu atau berkelompok
                                        (maksimal 2 orang).</li>
                                    <li class="ketentuan">Peserta boleh membuat komik sebanyak-banyaknya, namun juga
                                        harus membuat karya komik paling sedikit 1 lembar.</li>
                                    <li class="ketentuan">Format pewarnaan komik adalah full colour / BW / Grayscale.
                                    </li>
                                    <li class="ketentuan">Kertas yang digunakan adalah kertas A4.</li>
                                    <li class="ketentuan">Menggunakan kertas template yang berwarna (template akan
                                        disediakan oleh panitia) dan di cetak serta dibawa saat lomba.</li>
                                    <li class="ketentuan">Komik yang dibuat dilarang mengandung unsur SARA, melanggar
                                        etika, pornografi, dan politik.</li>
                                    <li class="ketentuan">Dialog yang ditulis dengan tangan harap ditulis dengan
                                        keterbacaan yang baik dan jelas.</li>
                                    <li class="ketentuan">Dialog sesuai EYD dan tidak disingkat-singkat.</li>
                                    <li class="ketentuan">Karya tidak mengandung merk dagang, logo, ciptaan yang
                                        dilindungi hak cipta, atau hak kekayaan intelektual dalam bentuk milik pihak
                                        lain.</li>
                                    <li class="ketentuan">Peserta wajib membawa peralatan menggambar sendiri.</li>
                                    <li class="ketentuan">Dispensasi keterlambatan hanya 15 menit. Lebih dari itu maka
                                        tim tersebut dianggap mengundurkan diri.</li>
                                    <li class="ketentuan">Peserta diharuskan menaati setiap butir yang ada pada
                                        peraturan, panitia dapat menambahkan peraturan sewaktu - waktu jika diperlukan
                                        tanpa pemberitahuan, apabila melanggar maka akan diskualifikasi.</li>
                                </ul>
                            </li>
                        </ol>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
