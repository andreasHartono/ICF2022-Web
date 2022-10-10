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
                    <form method="POST" action="{{ url('/registertiktok') }}" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tiktokId" value="7">
                        <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                        <div class="data-tim">
                            <Label class="myLabel">Tiktok Account</Label>
                            <input type="text" name="akuntiktok" id="txtAkunTiktok"
                                class="myTextbox width-90 @error('akuntiktok') is-invalid @enderror" placeholder="@">
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
                                <li> Lomba Tiktok ICF 2022 merupakan lomba untuk membuat video tiktok yang bertemakan
                                    Technology for Humanity.
                                    Video yang dibuat sesuai dengan kreativitas peserta dan wajib dengan latar belakang
                                    acara ICF 2022.
                                    Peserta yang mengikuti lomba ini wajib hadir pada hari Minggu, 6 November 2022 untuk
                                    pengunguman pemenang.
                                    Peserta yang menang namun tidak hadir dianggap mengundurkan diri dan hadiah akan
                                    diberikan kepada peserta lainnya.
                                    Berikut syarat dan ketentuan lomba Tiktok ICF 2022.
                                    <ul>
                                        <li class="ketentuan">Lomba dapat dilakukan secara individu maupun kelompok (maksimal 5 orang).</li>
                                        <li class="ketentuan">Video harus sesuai dengan tema yang diberikan dan wajib menampilkan background / acara ICF 2022 di dalamnya.</li>
                                        <li class="ketentuan">Durasi video minimal 1 menit dan maksimal 3 menit.</li>
                                        <li class="ketentuan">Karya tidak melanggar hak cipta & menyinggung pihak lainnya.</li>
                                        <li class="ketentuan">Setiap peserta hanya boleh mengirimkan 1 video.</li>
                                        <li class="ketentuan">Peserta diharapkan membawa perlengkapan masing-masing yang dibutuhkan untuk membuat video.</li>
                                        <li class="ketentuan">Konten dilarang mengandung unsur SARA, melanggar etika, pornografi, dan politik.</li>
                                        <li class="ketentuan">Peserta lomba wajib follow akun instagram 
                                            (<u><a class="hyperlink" href="https://www.instagram.com/icfubaya2022/">@icfubaya2022</a></u>)  dan 
                                            akun tiktok (<u><a class="hyperlink" href="https://www.tiktok.com/@informatika.ubaya">@informatika.ubaya</a></u>)</li>
                                        <li class="ketentuan">Peserta wajib upload video tiktok tersebut di akun pribadi dan upload mirror di instagram reels dengan caption 
                                            berupa ajakan literasi digital atau teknologi jaman now, sertakan juga hashtag #icfubaya2022 #lombavideotiktokubaya dan 
                                            mention @icfubaya2022 dan @informatik.ubaya</li>
                                        <li class="ketentuan">Kriteria penilaian: kesesuaian tema, kreativitas, kemenarikan video dan, pemilihan lagu.</li>
                                        <li class="ketentuan">DKeputusan juri dan panitia tidak dapat diganggu gugat.</li>
                                        <li class="ketentuan">Peserta yang melakukan kecurangan dalam bentuk apapun akan didiskualifikasi.</li>
                                        <li class="ketentuan">Peserta diharuskan menaati setiap butir yang ada pada peraturan, 
                                            panitia dapat menambahkan peraturan sewaktu - waktu jika diperlukan tanpa pemberitahuan, apabila melanggar maka akan diskualifikasi.</li>
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
