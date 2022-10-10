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
                  <button class="btn myBtn" style="width: 400px; max-width: 90%;" data-bs-toggle="modal"
                      data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
              </div>
              <form method="POST" action="{{ url('/registertiktok') }}" class="mt-5"
                  enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="tiktokId" value="7">
                  <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                  <div class="data-tim">
                      <Label class="myLabel">Tiktok Account</Label>
                      <input type="text" name="akuntiktok" id="txtAkunTiktok"
                          class="myTextbox width-90 @error('akuntiktok') is-invalid @enderror" placeholder="@"
                          >
                      @error('akuntiktok')
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
