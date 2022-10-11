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
                    <form method="POST" action="{{ url('/registermlbb') }}" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <div class="data-tim">
                            <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                            <Label class="myLabel">Nama Tim</Label>
                            <input type="text" name="nama_tim" id="txtNamaTim"
                                class="myTextbox width-90 @error('nama_tim') is-invalid @enderror" placeholder="Nama Tim" value="{{ old('nama_tim') }}">
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
                            <input type="text" name="name" id="txtNamaKetua"
                                class="myTextbox width-90 @error('name') is-invalid @enderror" placeholder="Nama Ketua Tim" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hp" id="txtNoHpKetua"
                                class="myTextbox width-90 @error('no_hp') is-invalid @enderror" placeholder="Nomor HP" value="{{ old('no_hp') }}">
                            @error('no_hp')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email" id="txtEmailKetua"
                                class="myTextbox width-90 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                            <input type="file" accept="application/pdf,image/*" name="image"
                                id="KartuPelajarKetua formFileMultiple"
                                class="myInputFile width-90 @error('image') is-invalid @enderror" style="color:navy;">
                            @error('image')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                            <label class="myLabel">ID Mobile Legend Ketua</label>
                            <input type="text" name="idgame" id="txtidgameKetua"
                                class="myTextbox width-90 @error('idgame') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgame') }}">
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
                                placeholder="Nama Anggota 1" value="{{ old('name1') }}">
                            @error('name1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hp1" id="txtNoHpAnggota1" class="myTextbox width-90"
                                placeholder="Nomor HP" value="{{ old('no_hp1') }}">
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
                            <label class="myLabel">ID Mobile Legend Anggota 1</label>
                            <input type="text" name="idgame1" id="txtidgameAnggota1"
                                class="myTextbox width-90 @error('idgame1') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgame1') }}">
                            @error('idgame1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                            <label class="myLabel">Nama Anggota 2</label>
                            <input type="text" name="name2" id="txtNamaAnggota2"
                                class="myTextbox width-90 @error('name2') is-invalid @enderror"
                                placeholder="Nama Anggota 2" value="{{ old('name2') }}">
                            @error('name2')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hp2" id="txtNoHpAnggota2"
                                class="myTextbox width-90 @error('no_hp2') is-invalid @enderror" placeholder="Nomor HP" value="{{ old('no_hp2') }}">
                            @error('no_hp2')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email2" id="txtEmailAnggota2"
                                class="myTextbox width-90 @error('email2') is-invalid @enderror" placeholder="Email" value="{{ old('email2') }}">
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
                                class="myTextbox width-90 @error('idgame2') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgame2') }}">
                            @error('idgame2')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 3</h5>
                            <label class="myLabel">Nama Anggota 3</label>
                            <input type="text" name="name3" id="txtNamaAnggota3"
                                class="myTextbox width-90 @error('name3') is-invalid @enderror"
                                placeholder="Nama Anggota 3" value="{{ old('name3') }}">
                            @error('name3')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hp3" id="txtNoHpAnggota3"
                                class="myTextbox width-90 @error('no_hp3') is-invalid @enderror" placeholder="Nomor HP" value="{{ old('no_hp3') }}">
                            @error('no_hp3')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email3" id="txtEmailAnggota3"
                                class="myTextbox width-90 @error('email3') is-invalid @enderror" placeholder="Email" value="{{ old('email3') }}">
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
                                class="myTextbox width-90 @error('idgame3') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgame3') }}">
                            @error('idgame3')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 4</h5>
                            <label class="myLabel">Nama Anggota 4</label>
                            <input type="text" name="name4" id="txtNamaAnggota4"
                                class="myTextbox width-90 @error('name4') is-invalid @enderror"
                                placeholder="Nama Anggota 4" value="{{ old('name4') }}">
                            @error('name4')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hp4" id="txtNoHpAnggota4"
                                class="myTextbox width-90 @error('no_hp4') is-invalid @enderror" placeholder="Nomor HP" value="{{ old('no_hp4') }}">
                            @error('no_hp4')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email4" id="txtEmailAnggota4"
                                class="myTextbox width-90 @error('email4') is-invalid @enderror" placeholder="Email" value="{{ old('email4') }}">
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
                                class="myTextbox width-90 @error('idgame4') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgame4') }}">
                            @error('idgame4')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota Cadangan</h5>
                            <label class="myLabel">Nama Anggota Cadangan</label>
                            <input type="text" name="namacadangan" id="txtNamaAnggotacadangan"
                                class="myTextbox width-90 @error('namacadangan') is-invalid @enderror"
                                placeholder="Nama Anggota cadangan" value="{{ old('namacadangan') }}">
                            @error('namacadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="no_hpcadangan" id="txtNoHpAnggotacadangan"
                                class="myTextbox width-90 @error('no_hpcadangan') is-invalid @enderror"
                                placeholder="Nomor HP" value="{{ old('no_hpcadangan') }}">
                            @error('no_hpcadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="emailcadangan" id="txtEmailAnggotacadangan"
                                class="myTextbox width-90 @error('emailcadangan') is-invalid @enderror"
                                placeholder="Email" value="{{ old('emailcadangan') }}">
                            @error('emailcadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                            <input type="file" accept="application/pdf,image/*" name="imagecadangan"
                                id="KartuPelajarAnggotacadangan formFileMultiple"
                                class="myInputFile width-90 @error('imagecadangan') is-invalid @enderror"
                                style="color:navy;">
                            @error('imagecadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                            <label class="myLabel">ID Mobile Legend Anggota Cadangan</label>
                            <input type="text" name="idgamecadangan" id="txtidgameAnggotacadangan"
                                class="myTextbox width-90 @error('idgamecadangan') is-invalid @enderror"
                                placeholder="123456789(1234)" value="{{ old('idgamecadangan') }}">
                            @error('idgamecadangan')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn myBtn width-90 mt-5 text-light" style="background: red !important;" type="submit">Register</button>
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
                                <li> Mekanisme
                                    <ul>
                                        <li class="ketentuan">Open Registration [ Awal Oktober - Pertengahan]</li>
                                        <ol>
                                            <li class="ketentuan">Pembukaan pendaftaran turnamen Mobile Legend ICF 2022.
                                            </li>
                                            <li class="ketentuan">Pendaftaran ini dilakukan secara online melalui Form /
                                                Website ICF 2022,
                                                setiap tim yang akan mendaftar wajib membayar Rp.30.000,00 dan mengirim
                                                bukti Pembayaran di dalam form / Website ICF 2022 tersebut.</li>
                                            <li class="ketentuan">Data pendaftar akan diterima oleh panitia ICF dan
                                                menginvite ke dalam grup Whatsapp Tournament ICF ML 2022.</li>
                                            <li class="ketentuan">Rencana pendaftaran akan dibuka pada awal Bulan September
                                                hingga Pertengahan Oktober.</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Technical Meeting [ H+2 Close Regist]</li>
                                        <ol>
                                            <li class="ketentuan">Pada tahap ini, seluruh peserta yang mendaftar akan
                                                diajak untuk masuk
                                                kedalam zoom dan panitia Acara (Ansa) akan menjelaskan SOP,
                                                Detail waktu, pembagian bracket dan mekanisme cara bermain di setiap
                                                timelines yang ada.
                                                Bagi peserta yang tidak bisa hadir, nanti akan diberikan recording selama
                                                Technical Meeting berlangsung.</li>
                                            <li class="ketentuan">Rencana Technical Meeting akan dilaksanakan pada
                                                pertengahan Oktober / H + 2 Setelah pendaftaran ditutup.</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Babak Penyisihan [ Akhir Oktober]</li>
                                        <ol>
                                            <li class="ketentuan">Pada tahap ini, seluruh peserta akan bertanding sesuai
                                                dengan jadwal yang
                                                sudah ditentukan pada technical meeting.
                                                Pertandingan babak penyisihan ini dilakukan secara tertutup di Discord
                                                dengan diawasi oleh panitia MLBB saat kedua tim bertanding.</li>
                                            <li class="ketentuan">Jika terdapat tim yang tidak hadir, otomatis akan
                                                dianggap gugur dan tim lawan akan maju ke bracket berikutnya.</li>
                                            <li class="ketentuan">Pertandingan babak penyisihan akan dilakukan BO3 dan
                                                berakhir ketika sudah ditentukan tim yang lolos masuk ke Semifinal.</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Semifinal + Bronze Match [ BO3 ] [ Hari H ]</li>
                                        <ol>
                                            <li class="ketentuan">Pada tahap ini, peserta datang ke acara offline dan
                                                bertanding disana.
                                                Seluruh peserta hendak membawa handphone, koneksi, dan earphone
                                                masing-masing untuk bertanding MLBB secara offline.</li>
                                            <li class="ketentuan">Pada tahap ini, akan ada komentator / caster untuk
                                                meriahkan keberlangsungan tandingan.
                                                Pertandingan akan disiarkan secara langsung di layar besar (?).</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Final Match [ BO5 ]  [ Hari H ]</li>
                                        <ol>
                                            <li class="ketentuan">Pada tahap ini, peserta datang ke acara offline dan
                                                bertanding disana.
                                                Seluruh peserta hendak membawa handphone, koneksi, dan earphone
                                                masing-masing untuk bertanding MLBB secara offline.</li>
                                            <li class="ketentuan">Pada tahap ini, akan ada komentator / caster untuk
                                                meriahkan keberlangsungan tandingan.
                                                Pertandingan akan disiarkan secara langsung di layar besar (?).</li>
                                        </ol>
                                    </ul>
                                </li>
                                <li> Peraturan
                                    <ul>
                                        <li class="ketentuan">Peraturan Umum :</li>
                                        <ol>
                                            <li class="ketentuan">Perwakilan tim yang tidak hadir dalam Technical meeting
                                                dianggap menyetujui segala peraturan yang telah dibuat oleh panitia ICF
                                                2022.</li>
                                            <li class="ketentuan">Setiap pemain WAJIB masuk ke discord yang telah dibuat
                                                oleh panitia,
                                                Komunikasi ingame juga WAJIB menggunakan discord yang telah dibuat oleh
                                                panitia. (untuk babak penyisihan).</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Regulasi perangkat :</li>
                                        <ol>
                                            <li class="ketentuan">Device yang digunakan adalah device masing masing player
                                                sendiri.</li>
                                            <li class="ketentuan">Koneksi internet yang digunakan adalah koneksi masing
                                                masing player sendiri.</li>
                                        </ol>
                                        <li class="ketentuan">
                                            Regulasi Pause :</li>
                                        <ol>
                                            <li class="ketentuan">Jumlah pause sebanyak 1x/tim.</li>
                                            <li class="ketentuan"> Pause dilakukan dengan cara mengetik "p" pada chat all,
                                                sehingga panitia akan melakukan pause.</li>
                                            <li class="ketentuan">Pause yang disengaja akan diberi penalty oleh panitia
                                                satu kali (tactical pause), seperti menggunakan pause untuk merugikan team
                                                lawan.</li>
                                            <li class="ketentuan">Pause yang digunakan maximum total 10 menit, jika sudah
                                                melebihi waktu 10 menit maka tim lawan berhak resume game tersebut.</li>
                                            <li class="ketentuan">Pause tidak boleh dilakukan pada sesi draft phase.</li>
                                        </ol>
                                    </ul>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
