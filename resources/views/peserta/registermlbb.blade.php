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
              <h5 class="fs-1 myTitle">Mobile Legend Competition</h5>
              <div class="d-flex justify-content-center">
                  <button class="btn myBtn" style="width: 400px; max-width: 90%;" data-bs-toggle="modal"
                      data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
              </div>
              <form method="POST" action="{{ url('/register') }}" class="mt-5"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="data-tim">
                      <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                      <Label class="myLabel">Nama Tim</Label>
                      <input type="text" name="nama_tim" id="txtNamaTim"
                          class="myTextbox width-90 @error('nama_tim') is-invalid @enderror" placeholder="Nama Tim"
                          >
                      @error('nama_tim')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nama Instansi</label>
                      <input type="text" name="instansi" id="txtinstansi"
                          class="myTextbox width-90 @error('instansi') is-invalid @enderror"
                          placeholder="Nama Instansi" >
                      @error('instansi')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="data-anggota ketua">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua Tim</h5>
                      <label class="myLabel">Nama Ketua Tim</label>
                      <input type="text" name="name" id="txtNamaKetua"
                          class="myTextbox width-90 @error('name') is-invalid @enderror" placeholder="Nama Ketua Tim"
                          >
                      @error('name')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp" id="txtNoHpKetua"
                          class="myTextbox width-90 @error('no_hp') is-invalid @enderror"
                          placeholder="Nomor HP" >
                      @error('no_hp')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email" id="txtEmailKetua"
                          class="myTextbox width-90 @error('email') is-invalid @enderror" placeholder="Email"
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
                      <label class="myLabel">ID Mobile Legend Ketua</label>
                      <input type="text" name="idgame" id="txtidgameKetua"
                          class="myTextbox width-90 @error('idgame') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                      @error('idgame')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="data-anggota anggota-1">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 1</h5>
                      <label class="myLabel">Nama Anggota 1</label>
                      <input type="text" name="name1" id="txtNamaAnggota1" class="myTextbox width-90"
                          placeholder="Nama Anggota 1">
                      @error('name1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                      @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp1" id="txtNoHpAnggota1" class="myTextbox width-90"
                          placeholder="Nomor HP">
                          @error('no_hp1')
                          <div class="invalid-feedback text-center">
                              {{ $message }}
                          </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email1" id="txtEmailAnggota1" class="myTextbox width-90"
                          placeholder="Email">
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
                          <label class="myLabel">ID Mobile Legend Anggota 1</label>
                          <input type="text" name="idgame1" id="txtidgameAnggota1"
                          class="myTextbox width-90 @error('idgame1') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                            @error('idgame1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                  </div>

                  <div class="data-anggota anggota-2">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                      <label class="myLabel">Nama Anggota 2</label>
                      <input type="text" name="name2" id="txtNamaAnggota2" class="myTextbox width-90 @error('name2') is-invalid @enderror"
                          placeholder="Nama Anggota 2">
                          @error('name2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp2" id="txtNoHpAnggota2" class="myTextbox width-90 @error('no_hp2') is-invalid @enderror"
                          placeholder="Nomor HP">
                           @error('no_hp2')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email2" id="txtEmailAnggota2" class="myTextbox width-90 @error('email2') is-invalid @enderror"
                          placeholder="Email">
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
                          <label class="myLabel">ID Mobile Legend Anggota 2</label>
                          <input type="text" name="idgame2" id="txtidgameAnggota2"
                          class="myTextbox width-90 @error('idgame2') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                            @error('idgame2')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                  </div>

                  <div class="data-anggota anggota-2">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 3</h5>
                      <label class="myLabel">Nama Anggota 3</label>
                      <input type="text" name="name3" id="txtNamaAnggota3" class="myTextbox width-90 @error('name3') is-invalid @enderror"
                          placeholder="Nama Anggota 3">
                          @error('name3')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp3" id="txtNoHpAnggota3" class="myTextbox width-90 @error('no_hp3') is-invalid @enderror"
                          placeholder="Nomor HP">
                           @error('no_hp3')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email3" id="txtEmailAnggota3" class="myTextbox width-90 @error('email3') is-invalid @enderror"
                          placeholder="Email">
                           @error('email3')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="image3"
                          id="KartuPelajarAnggota3 formFileMultiple"
                          class="myInputFile width-90 @error('image3') is-invalid @enderror" style="color:navy;">
                          @error('image3')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                          <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                          <label class="myLabel">ID Mobile Legend Anggota 3</label>
                          <input type="text" name="idgame3" id="txtidgameAnggota3"
                          class="myTextbox width-90 @error('idgame3') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                            @error('idgame3')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                  </div>
                  <div class="data-anggota anggota-2">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 4</h5>
                      <label class="myLabel">Nama Anggota 4</label>
                      <input type="text" name="name4" id="txtNamaAnggota4" class="myTextbox width-90 @error('name4') is-invalid @enderror"
                          placeholder="Nama Anggota 4">
                          @error('name4')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hp4" id="txtNoHpAnggota4" class="myTextbox width-90 @error('no_hp4') is-invalid @enderror"
                          placeholder="Nomor HP">
                           @error('no_hp4')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="email4" id="txtEmailAnggota4" class="myTextbox width-90 @error('email4') is-invalid @enderror"
                          placeholder="Email">
                           @error('email4')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="image4"
                          id="KartuPelajarAnggota4 formFileMultiple"
                          class="myInputFile width-90 @error('image4') is-invalid @enderror" style="color:navy;">
                          @error('image4')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                          <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                          <label class="myLabel">ID Mobile Legend Anggota 4</label>
                          <input type="text" name="idgame4" id="txtidgameAnggota4"
                          class="myTextbox width-90 @error('idgame4') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                            @error('idgame4')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                  </div>

                  <div class="data-anggota anggota-2">
                      <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota Cadangan</h5>
                      <label class="myLabel">Nama Anggota Cadangan</label>
                      <input type="text" name="namacadangan" id="txtNamaAnggotacadangan" class="myTextbox width-90 @error('namacadangan') is-invalid @enderror"
                          placeholder="Nama Anggota cadangan">
                          @error('namacadangan')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Nomor HP</label>
                      <input type="text" name="no_hpcadangan" id="txtNoHpAnggotacadangan" class="myTextbox width-90 @error('no_hpcadangan') is-invalid @enderror"
                          placeholder="Nomor HP">
                           @error('no_hpcadangan')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Email</label>
                      <input type="email" name="emailcadangan" id="txtEmailAnggotacadangan" class="myTextbox width-90 @error('emailcadangan') is-invalid @enderror"
                          placeholder="Email">
                           @error('emailcadangan')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                      <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                      <input type="file" accept="application/pdf,image/*" name="imagecadangan"
                          id="KartuPelajarAnggotacadangan formFileMultiple"
                          class="myInputFile width-90 @error('imagecadangan') is-invalid @enderror" style="color:navy;">
                          @error('imagecadangan')
                           <div class="invalid-feedback text-center">
                              {{ $message }}
                           </div>
                          @enderror
                          <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                          <label class="myLabel">ID Mobile Legend Anggota Cadangan</label>
                          <input type="text" name="idgamecadangan" id="txtidgameAnggotacadangan"
                          class="myTextbox width-90 @error('idgamecadangan') is-invalid @enderror" placeholder="123456789(1234)"
                          >
                            @error('idgamecadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                  </div>

                  <button class="btn myBtn width-90 mt-5 btn-navy" type="submit">Register</button>
              </form>
          </div>
      </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="modalPendaftaran" tabindex="-1" aria-labelledby="modalPendaftaranLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
              <div class="modal-header" style="background-color: navy; color: #ECEECA; border: none">
                  <h5 class="modal-title" id="modalPendaftaranLabel">Catatan Pendaftaran</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: #ECEECA; color: navy;">
                  <div class="container">
                      <h3 class="text-center">Alur Pendaftaran Online</h3>
                      <ol>
                          <li>Peserta melakukan pendaftaran pada website MANIAC XI (<a
                                  href="https://maniac.ifubaya.id">maniac.ifubaya.id</a>).</li>
                          <li>
                              Peserta wajib mengisi kelengkapan data untuk pendaftaran, meng-<i>upload scan</i> kartu
                              pelajar. <br>
                              Data-data yang perlu diisi adalah sebagai berikut: <br>
                              <ul>
                                  <li>Nama Kelompok</li>
                                  <li>Asal Sekolah</li>
                                  <li>Username</li>
                                  <li>Password</li>
                                  <li>Alamat Lengkap Sekolah</li>
                                  <li>No. Telepon Sekolah</li>
                                  <li>Nama Ketua Kelompok, No. HP (Whatsapp), Email</li>
                                  <li>Nama Anggota Kelompok, No. HP (Whatsapp), Email</li>
                                  <li>Scan kartu pelajar per-anggota pada bagian yang sudah disiapkan</li>
                              </ul>
                              Apabila belum memiliki kartu pelajar, dapat dilakukan upload scan surat keterangan aktif
                              dengan mengetahui tanda tangan dari kepala sekolah, berkas harus dalam bentuk PDF dengan
                              format nama Nama Tim_Nama Anggota.
                          </li>
                          <li>Harap perhatikan kelengkapan data yang diperlukan untuk pendaftaran.</li>
                          <li>Tim akan dikonfirmasi telah terdaftar sebagai peserta MANIAC XI melalui email yang akan
                              dikirimkan oleh panitia kepada ketua tim dalam jangka waktu maksimal 1 minggu setelah
                              peserta melakukan pendaftaran di website.</li>
                          <li>Apabila dalam jangka waktu 1 minggu peserta belum mendapatkan email konfirmasi, maka
                              dapat menghubungi nomor Whatsapp 087855956985 (Ian Wahyudi)</li>
                      </ol>
                      <br>

                      <h3 class="text-center">Persyaratan Peserta MANIAC XI</h3>
                      <ol>
                          <li>Satu tim terdiri dari 3 siswa/siswi aktif (maksimal kelas XI di Tahun Ajaran 2021/2022)
                              Sekolah Menengah Atas (SMA)/Sekolah Menengah Kejuruan (SMK)/sederajat yang berasal dari
                              sekolah yang sama <b>(boleh berasal dari jenjang dan peminatan yang berbeda).</b></li>
                          <li>Dikarenakan Babak Final MANIAC XI diadakan secara luring/offline. Peserta diharapkan
                              untuk bersedia dalam mengikuti seluruh rangkaian acara mulai dari Babak Penyisihan
                              hingga Babak Final</li>
                          <li>Registrasi dilakukan oleh salah satu perwakilan TIM.</li>
                          <li>Tim yang sudah terdaftar dapat mengganti anggota tim <b>paling lambat hingga
                              2 minggu sebelum diadakannya <i>Technical Meeting</i> Babak Penyisihan.</b></li>
                          <li>Setiap peserta MANIAC XI harus mempunyai minimal 1 laptop/komputer dan 1 <i>gadget</i>
                              (<i>smartphone</i>/tablet/laptop/komputer/dan lainnya), dan mempunyai koneksi internet
                              yang cukup dan memadai. <br> Catatan: <i>Gadget</i> harus memiliki kamera yang dapat
                              digunakan saat bergabung pada Zoom meeting.</li>
                          <li>Peserta diwajibkan mengisi data pendaftaran secara lengkap dan sesuai. Pendaftaran
                              dilakukan secara <i>online</i> melalui <a
                                  href="https://maniac.ifubaya.id">maniac.ifubaya.id</a>.</li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section>

@endsection
