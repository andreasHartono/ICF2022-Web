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
                      data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
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
                                        href="https://icf2022.com">icfubaya2022.com</a></u>).</li>
                            <li>
                                Competitive Programming akan dilakukan secara offline. Target peserta adalah anak SMA/
                                SMK/ sederajat seluruh Indonesia yang masih merupakan siswa aktif dari sekolah yang
                                sama.
                                Perlombaan dilaksanakan antar tim yang berisi 2-3 anggota.
                                Lomba secara online adalah dengan mengerjakan soal coding pada website Hackerrank (atau
                                sejenis) dilakukan pada tanggal 24 Oktober - 2 November 2022.
                                Lomba offline (mengerjakan 50 soal) pada tanggal 4 November 2022. Berikut penjelasannya:
                                <ul>
                                    <li class="ketentuan">Peraturan Umum
                                        <ol>
                                            <li class="ketentuan">Tim yang terpilih akan mengikuti lomba secara offline
                                                yang diadakan di Atrium 1 Pakuwon City Mall
                                                pada pukul … WIB (tim wajib hadir di lokasi lomba 30 menit sebelumnya).
                                            </li>
                                            <li class="ketentuan">Jika anggota tim tidak lengkap, tetap boleh mengikuti
                                                lomba dengan konsekuensi ditanggung oleh tim tersebut.</li>
                                            <li class="ketentuan">Peserta hanya diperkenankan ke toilet sebelum dan
                                                sesudah mengerjakan soal.</li>
                                            <li class="ketentuan">Dilarang menggunakan alat komunikasi dalam bentuk
                                                apapun.</li>
                                            <li class="ketentuan">Dilarang menggunakan alat menghitung dalam bentuk
                                                apapun.</li>
                                            <li class="ketentuan">Kendala internet, jaringan putus, kesalahan teknis
                                                dalam bentuk apapun menjadi tanggung jawab peserta.</li>
                                            <li class="ketentuan">Tim yang tidak hadir saat lomba dianggap mengundurkan
                                                diri.</li>
                                            <li class="ketentuan">Tim yang melakukan tindak kecurangan dalam bentuk
                                                apapun, akan di diskualifikasi.</li>
                                            <li class="ketentuan">Peserta diharuskan menaati setiap butir yang ada pada
                                                peraturan,
                                                panitia dapat menambahkan peraturan sewaktu - waktu jika diperlukan
                                                tanpa pemberitahuan, apabila melanggar maka akan diskualifikasi.</li>
                                            <li class="ketentuan">Keputusan juri dan panitia bersifat mutlak dan tidak
                                                dapat diganggu gugat.</li>
                                        </ol>
                                    </li>
                                    <li class="ketentuan">Peraturan Khusus
                                        <ol>
                                            <li class="ketentuan">Lomba akan dilaksanakan dengan 2 sesi, dengan break 30 menit.
                                            </li>
                                            <li class="ketentuan">Dispensasi keterlambatan hanya 15 menit. Lebih dari itu maka tim tersebut dianggap mengundurkan diri.</li>
                                            <li class="ketentuan">Jumlah soal yang dikerjakan sebanyak 50 nomor (20 easy, 20 medium, 10 hard) yang harus dikumpulkan pada website ICF 2022.</li>
                                            <li class="ketentuan">Hanya diperkenankan membawa 2 lembar cheat sheet berukuran A4 (4 halaman).</li>
                                            <li class="ketentuan">Hanya diperkenankan menggunakan 3 lembar buram A4 (6 halaman) beserta maksimal 3 alat tulis tiap tim.</li>
                                            <li class="ketentuan">Hanya diperkenankan menggunakan 1 laptop untuk mengerjakan soal.</li>
                                            <li class="ketentuan">Peserta disarankan mengumpulkan lembar cheat sheet, buram, dan jawaban 15 menit sebelumnya untuk menghindari kendala yang kemungkinan terjadi.</li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
