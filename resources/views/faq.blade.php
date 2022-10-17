@extends('layouts.mainweb')

@section('title')
    ICF 2022 - FAQ
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/faq.css') }}">
@endsection



@section('content')
    <header class="full-screen d-lg-flex jumbotron jumbotron-fluid">
        <div class="container-fluid text-center">
            <div class="wavy">
                <span style="--i:1;">F</span>
                <span style="--i:2;">A</span>
                <span style="--i:3;">Q</span>
            </div>
            <p class="lead pb-4 faq-text">Frequently Asked Questions</p>
        </div>
    </header>
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">

        <div class="container mt-5">
            <div class="accordion" id="accordionPanelsStayOpenExample">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12 d-flex">

                            <div class="timeline-faq">
                                {{-- FAQ Umum --}}
                                <div class="timeline-wrapper">
                                    <div class="timeline-yr">
                                        <span>1</span>
                                    </div>
                                    <div class="timeline-info">
                                        <h3><span>Umum</span></h3>
                                        <p><b>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Apa itu ICF 2022 ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>
                                                                <strong>ICF (Informatics Creative Festival)</strong>
                                                                merupakan acara tahunan yang diadakan oleh Teknik
                                                                Informatika, Universitas Surabaya. Tahun ini, ICF kembali
                                                                hadir dengan berbagai macam acara yang seru; ada
                                                                seminar-seminar, lomba-lomba, dan berbagai macam pameran
                                                                karya mahasiswa. Salah satu lomba yang diadakan adalah
                                                                Competitive Programming. Lomba ini mengundang seluruh siswa
                                                                SMA/ sederajat untuk menyelesaikan berbagai macam soal
                                                                pemrograman. Adapun topik yang diangkat di setiap seminar
                                                                juga menarik karena membahas tentang kebutuhan jaman now
                                                                yang disampaikan oleh narasumber-narasumber yang ahli di
                                                                bidangnya. Tidak hanya itu, pada ICF 2022 juga akan
                                                                menampilkan berbagai macam karya Tugas Akhir dari alumni
                                                                mahasiswa Teknik Informatika UBAYA. Acara ini juga
                                                                dimeriahkan dengan mengajak setiap pengunjung untuk mencoba
                                                                Virtual Reality secara langsung! ICF2022? Technology for
                                                                Humanity!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="accordion-item faq-radialGradient">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button
                                                                class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Apa tema yang diangkat dalam ICF 2022 ini ?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div
                                                                class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                                <p>
                                                                    <strong>Technology For Humanity</strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="accordion-item faq-radialGradient">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button
                                                                class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Apakah acara dan lomba dalam ICF 2022 ini ditarik biaya ?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div
                                                                class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                                <p>
                                                                    Semua acara dan lomba dalam ICF 2022 dapat di ikuti
                                                                    secara gratis
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="accordion-item faq-radialGradient">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button
                                                                class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                Ada kegiatan apa saja di ICF 2022 ?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div
                                                                class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                                <p>
                                                                    Terdapat seminar-seminar tentang teknologi dan juga
                                                                    lomba-lomba seru
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="accordion-item faq-radialGradient">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button
                                                                class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                Kenapa harus ikut ICF 2022 ?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFive"
                                                            data-bs-parent="#accordionExample">
                                                            <div
                                                                class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                                <p>
                                                                    Acaranya banyak, ada seminar teknologi, lomba nya juga
                                                                    seru-seru, dan banyak hadiah menarik. Dan kamu bisa ikut
                                                                    secara gratis
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="accordion-item faq-radialGradient">
                                                        <h2 class="accordion-header" id="headingSix">
                                                            <button
                                                                class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSix" aria-expanded="false"
                                                                aria-controls="collapseSix">
                                                                Manfaat apa yang akan didapatkan jika mengikut ICF 2022 ?

                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse"
                                                            aria-labelledby="headingSix"
                                                            data-bs-parent="#accordionExample">
                                                            <div
                                                                class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                                <p>
                                                                    Kamu akan dapat banyak ilmu terkait teknologi Artificial
                                                                    Intelligence, Data, Human Computer Interaction, dan
                                                                    masih banyak lagi. Selain itu kamu juga bisa seru-seruan
                                                                    dengan ikut berbagai lomba-lomba yang tersedia seperti
                                                                    Mobile Legends: Bang Bang Competition, Competitive
                                                                    Programming, Tiktok, dan juga Comic Strip
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </p></b>

                                    </div>

                                </div>
                                {{-- End FAQ Umum --}}

                                {{-- FAQ Seminar --}}
                                <div class="timeline-wrapper">

                                    <div class="timeline-yr">

                                        <span>2</span>

                                    </div>

                                    <div class="timeline-info">

                                        <h3><span>Seminar</span></h3>
                                        <p><b>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingSeven">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                                            aria-controls="collapseSeven">
                                                            Bagaimana cara saya mendaftar untuk acara seminar ICF 2022 ini ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>Untuk pendaftaran kamu bisa mengaksesnya dengan meng-scan
                                                                barcode berikut</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingEight">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEight" aria-expanded="false"
                                                            aria-controls="collapseEight">
                                                            Kapan batas akhir pendaftaran acara seminar ICF 2022 ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>Untuk seminar, pendaftaran terakhir tanggal 3 November ya</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingNine">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseNine" aria-expanded="false"
                                                            aria-controls="collapseNine">
                                                            Siapa saja yang dapat berpartisipasi ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseNine" class="accordion-collapse collapse"
                                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>
                                                                Untuk seminar dan juga lomba (Mobile Legends: Bang Bang
                                                                Competition, Tiktok, dan juga Comic Strip), dapat diikuti
                                                                oleh peserta secara umum. Sedangkan khusus untuk lomba
                                                                Competitive Programming hanya boleh diikuti oleh siswa SMA
                                                                (atau sederajat) aktif yang akan menjadi perwakilan sekolah.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingTen">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTen" aria-expanded="false"
                                                            aria-controls="collapseTen">
                                                            Kapan dan dimana acara seminar ICF 2022 akan berlangsung ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>ICF 2022 akan dilaksanakan di Atrium East Coast, Surabaya.
                                                                Dari tanggal 4-6 November 2022.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingEleven">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEleven" aria-expanded="false"
                                                            aria-controls="collapseEleven">
                                                            Apakah saya akan mendapatkan sertifikat sebagai peserta ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEleven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEleven"
                                                        data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>Setiap peserta lomba dan seminar akan mendapatkan sertifikat
                                                                peserta maupun sertifikat pemenang bagi pemenang lomba</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="accordion-item faq-radialGradient">
                                                    <h2 class="accordion-header" id="headingTwelve">
                                                        <button
                                                            class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwelve" aria-expanded="false"
                                                            aria-controls="collapseTwelve">
                                                            Apa saja topik yang ada dalam acara seminar ICF 2022 ini ?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwelve" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwelve"
                                                        data-bs-parent="#accordionExample">
                                                        <div
                                                            class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                            <p>Ada 3 topik seminar dalam ICF 2022 ini, di bidang data ada
                                                                “Machine vs Human” dan “Data for the Future”, dalam bidang
                                                                UI/UX ada” Human Computer Interaction in Everyday Live”, dan
                                                                dalam bidang multimedia ada “Toward Metaverse: Challenge and
                                                                Opportunities” serta “Augmented Reality vs Virtual Reality”
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </b></p>

                                    </div>

                                </div>
                                {{-- End FAQ Seminar --}}

                                {{-- FAQ Competition --}}
                                <div class="timeline-wrapper">

                                    <div class="timeline-yr">

                                        <span>3</span>

                                    </div>

                                    <div class="timeline-info">
                                        <h3><span>Mobile Legends: Bang Bang Competition</span></h3>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTigaBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTigaBelas" aria-expanded="false"
                                                    aria-controls="collapseTigaBelas">
                                                    Kenapa lomba MLBB dilaksanakan terlebih dahulu di tanggal 24 Oktober
                                                    2022 ?
                                                </button>
                                            </h2>
                                            <div id="collapseTigaBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingTigaBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    Lomba MLBB dilaksanakan terlebih dahulu karena terdapat beberapa tahapan
                                                    seleksi awal, sehingga terdapat 4 tim yang akan maju sebagai semifinalis
                                                    dan akan lomba secara offline.
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingEmpatBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEmpatBelas" aria-expanded="false"
                                                    aria-controls="collapseEmpatBelas">
                                                    Siapa saja yang dapat berpartisipasi dalam lomba MLBB ?
                                                </button>
                                            </h2>
                                            <div id="collapseEmpatBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingEmpatBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba MLBB ini dapat di ikuti oleh UMUM, pelajar dan mahasiswa juga
                                                        dapat berpartisipasi mengikuti lomba MLBB ini</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingLimaBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseLimaBelas" aria-expanded="false"
                                                    aria-controls="collapseLimaBelas">
                                                    Siapa saja yang dapat berpartisipasi dalam lomba MLBB?
                                                </button>
                                            </h2>
                                            <div id="collapseLimaBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingLimaBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba MLBB ini dapat diikuti oleh peserta secara umum, pelajar dan
                                                        mahasiswa juga dapat berpartisipasi mengikuti lomba MLBB ini
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingEnamBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEnamBelas" aria-expanded="false"
                                                    aria-controls="collapseEnamBelas">
                                                    Bagaimana cara mendaftar lomba MLBB ?
                                                </button>
                                            </h2>
                                            <div id="collapseEnamBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingEnamBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pendaftaran dapat dilakukan melalui Website ICF 2022.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTujuhBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTujuhBelas" aria-expanded="false"
                                                    aria-controls="collapseTujuhBelas">
                                                    Berapa jumlah orang dalam satu tim?
                                                </button>
                                            </h2>
                                            <div id="collapseTujuhBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingTujuhBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Satu tim berjumlah 5 orang, dan diperbolehkan tambahan 1 orang lagi
                                                        sebagai cadangan/coach.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDelapanBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDelapanBelas" aria-expanded="false"
                                                    aria-controls="collapseDelapanBelas">
                                                    Bagaimana tahapan kompetisi lomba MLBB?
                                                </button>
                                            </h2>
                                            <div id="collapseDelapanBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingDelapanBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Peserta lomba MLBB akan mengikut rangkaian tahapan kompetisi mulai
                                                        dari babak penyisihan, seminal dan juga final.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDelapanBelasSatu">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDelapanBelasSatu" aria-expanded="false"
                                                    aria-controls="collapseDelapanBelasSatu">
                                                    Seperti apa hadiah bagi pemenang lomba MLBB ?
                                                </button>
                                            </h2>
                                            <div id="collapseDelapanBelasSatu" class="accordion-collapse collapse"
                                                aria-labelledby="headingDelapanBelasSatu"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Terdapat total hadiah jutaan rupiah bagi pemenang lomba MLBB dan juga
                                                        sertifikat pemenang
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDelapanBelasDua">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDelapanBelasDua" aria-expanded="false"
                                                    aria-controls="collapseDelapanBelasDua">
                                                    Apa saja hal yang dapat membuat peserta didiskualifikasi ?
                                                </button>
                                            </h2>
                                            <div id="collapseDelapanBelasDua" class="accordion-collapse collapse"
                                                aria-labelledby="headingDelapanBelasDua"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat waktu
                                                        pada jadwal lomba yang sudah ditentukan panitia, melakukan SARA dan
                                                        ujaran kebencian dalam bentuk apapun, dan melanggar tata tertib/
                                                        peraturan lomba (tertera pada modul).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDelapanBelasTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDelapanBelasTiga" aria-expanded="false"
                                                    aria-controls="collapseDelapanBelasTiga">
                                                    Siapa yang dapat saya hubungi jika masih memiliki pertanyaan ?
                                                </button>
                                            </h2>
                                            <div id="collapseDelapanBelasTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingDelapanBelasTiga"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Bisa hubungi di nomor 082228860862 a.n. Ansa
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>



                                <div class="timeline-wrapper">
                                    <div class="timeline-yr">

                                        <span>4</span>

                                    </div>

                                    <div class="timeline-info">

                                        <h3><span>Competitive Programming Competition</span></h3>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingNineBelas">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNineBelas" aria-expanded="false"
                                                    aria-controls="collapseNineBelas">
                                                    Siapa saja yang dapat berpartisipasi dalam lomba Competitive Programming
                                                    ?
                                                </button>
                                            </h2>
                                            <div id="collapseNineBelas" class="accordion-collapse collapse"
                                                aria-labelledby="headingNineBelas" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba Competitive Programming hanya dapat diikuti oleh Pelajar
                                                        SMA/Sederajat yang masih aktif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingNineBelasSatu">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNineBelasSatu" aria-expanded="false"
                                                    aria-controls="collapseNineBelasSatu">
                                                    Bagaimana cara mendaftar lomba Competitive Programming?
                                                </button>
                                            </h2>
                                            <div id="collapseNineBelasSatu" class="accordion-collapse collapse"
                                                aria-labelledby="headingNineBelasSatu" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pendaftaran dapat dilakukan melalui Website ICF 2022.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingNineBelasDua">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNineBelasDua" aria-expanded="false"
                                                    aria-controls="collapseNineBelasDua">
                                                    Berapa jumlah orang dalam satu tim?
                                                </button>
                                            </h2>
                                            <div id="collapseNineBelasDua" class="accordion-collapse collapse"
                                                aria-labelledby="headingNineBelasDua" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Setiap tim dapat berjumlah maksimal 3 orang dan minimal 2 orang
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingNineBelasTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNineBelasTiga" aria-expanded="false"
                                                    aria-controls="collapseNineBelasTiga">
                                                    Apabila 1 tim hanya terdiri dari 1 orang, apakah bisa berpartisipasi ?
                                                </button>
                                            </h2>
                                            <div id="collapseNineBelasTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingNineBelasTiga" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Tidak bisa ya, jumlah anggota tiap tim minimal 2 orang
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTiga" aria-expanded="false"
                                                    aria-controls="collapseDuaTiga">
                                                    Bagaimana metode kompetisi lomba Competitive Programming ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTiga" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba akan dilaksanakan secara offline pada jadwal yang sudah
                                                        ditentukan
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTigaSatu">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTigaSatu" aria-expanded="false"
                                                    aria-controls="collapseDuaTigaSatu">
                                                    Apa bahasa pemrograman yang digunakan dalam lomba Competitive
                                                    Programming ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTigaSatu" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTigaSatu" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Tidak ada batasan dalam menggunakan bahasa pemrograman dalam
                                                        menyelesaikan soal, jadi bebas ya
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTigaDua">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTigaDua" aria-expanded="false"
                                                    aria-controls="collapseDuaTigaDua">
                                                    Seperti apa hadiah bagi pemenang lomba Competitive Programming ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTigaDua" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTigaDua" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pemenang lomba Competitive Programming akan mendapatkan total hadiah
                                                        jutaan rupiah dan sertifikat pemenang
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTigaTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTigaTiga" aria-expanded="false"
                                                    aria-controls="collapseDuaTigaTiga">
                                                    Apa saja hal yang dapat membuat peserta didiskualifikasi ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTigaTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTigaTiga" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat waktu
                                                        pada jadwal lomba yang sudah ditentukan panitia, melakukan SARA dan
                                                        ujaran kebencian dalam bentuk apapun, dan melanggar tata tertib/
                                                        peraturan lomba (tertera pada modul).
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTigaEmpat">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTigaEmpat" aria-expanded="false"
                                                    aria-controls="collapseDuaTigaEmpat">
                                                    Apa saja kriteria penilaian untuk lomba Competitive Programming ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTigaEmpat" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTigaEmpat" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Kriteria penilaian dalam lomba Competitive Programming: kesesuaian
                                                        output yang di inginkan, ketepatan jawaban dan kecepatan waktu
                                                        pengerjaan
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingDuaTigaLima">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseDuaTigaLima" aria-expanded="false"
                                                    aria-controls="collapseDuaTigaLima">
                                                    Siapa yang dapat saya hubungi jika masih memiliki pertanyaan ?
                                                </button>
                                            </h2>
                                            <div id="collapseDuaTigaLima" class="accordion-collapse collapse"
                                                aria-labelledby="headingDuaTigaLima" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Bisa hubungi di nomor 081235655927 a.n. Andrew
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="timeline-wrapper">

                                    <div class="timeline-yr">

                                        <span>5</span>

                                    </div>

                                    <div class="timeline-info">

                                        <h3><span>Comic Strip Competition</span></h3>

                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentyEmpat">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyEmpat" aria-expanded="false"
                                                    aria-controls="collapseTwentyEmpat">
                                                    Siapa saja yang dapat berpartisipasi dalam lomba Comic Strip ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyEmpat" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentyEmpat" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba Comic Strip dapat diikuti oleh peserta secara umum
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentyLima">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyLima" aria-expanded="false"
                                                    aria-controls="collapseTwentyLima">
                                                    Bagaimana cara mendaftar lomba Comicstrip ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyLima" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentyLima" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pendaftaran dapat dilakukan melalui Website ICF 2022.</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentyEnam">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyEnam" aria-expanded="false"
                                                    aria-controls="collapseTwentyEnam">
                                                    Berapa jumlah maksimal peserta dalam 1 tim ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyEnam" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentyEnam" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Satu tim maksimal 2 orang
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentyTujuh">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyTujuh" aria-expanded="false"
                                                    aria-controls="collapseTwentyTujuh">
                                                    Apabila 1 tim hanya terdiri dari 1 orang, apakah bisa berpartisipasi?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyTujuh" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentyTujuh" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Bisa, lomba bisa dilakukan secara individu
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentyDelapan">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyDelapan" aria-expanded="false"
                                                    aria-controls="collapseTwentyDelapan">
                                                    Apa format warna yang digunakan dalam lomba Comic Strip?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyDelapan" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentyDelapan" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>color/ BW/ grayscale</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilan">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilan" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilan">
                                                    Peralatan apa saja yang disediakan panitia untuk lomba Comic Strip ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilan" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilan"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Panitia tidak menyediakan peralatan menggambar, termasuk kertas untuk
                                                        media komik. Panitia akan menyediakan template file yang <b>harus di
                                                            print</b> oleh setiap peserta pada kertas A4. </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilanSatu">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilanSatu" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilanSatu">
                                                    Bagaimana metode kompetisi lomba Comic Strip?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilanSatu" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilanSatu"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba Comic Strip akan dilakukan secara offline. Selain membuat
                                                        komik, peserta juga akan mempresentasikan hasil karyanya di depan
                                                        juri. Setiap hasil karya diharapkan memiliki dialog yang jelas dan
                                                        sesuai dengan tata tertib (peraturan lomba) yang sudah ditentukan..
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilanDua">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilanDua" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilanDua">
                                                    Seperti apa hadiah bagi pemenang lomba Comic Strip ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilanDua" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilanDua"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pemenang lomba Comic Strip akan mendapatkan total hadiah jutaan
                                                        rupiah dan sertifikat pemenang
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilanTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilanTiga" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilanTiga">
                                                    Apa saja hal yang dapat membuat peserta didiskualifikasi ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilanTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilanTiga"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Melanggar tata tertib yang sudah ditetapkan
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilanEmpat">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilanEmpat" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilanEmpat">
                                                    Apa saja kriteria penilaian untuk lomba Comic Strip ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilanEmpat" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilanEmpat"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Kesesuaian Tema, Kerapian, dan Kemenarikan sesuai alur cerita.
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingTwentySembilanLima">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentySembilanLima" aria-expanded="false"
                                                    aria-controls="collapseTwentySembilanLima">
                                                    Siapa yang dapat saya hubungi jika masih memiliki pertanyaan ?
                                                </button>
                                            </h2>
                                            <div id="collapseTwentySembilanLima" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwentySembilanLima"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Bisa hubungi di nomor 08525139788 a.n. Jennie
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="timeline-wrapper">
                                    <div class="timeline-yr">

                                        <span>6</span>

                                    </div>

                                    <div class="timeline-info">

                                        <h3><span>Tiktok Challenges Competition</span></h3>

                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrity">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrity" aria-expanded="false"
                                                    aria-controls="collapseThrity">
                                                    Siapa saja yang dapat berpartisipasi dalam lomba Tiktok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrity" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrity" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Lomba tiktok dapat di ikuti oleh umum</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityOne">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityOne" aria-expanded="false"
                                                    aria-controls="collapseThrityOne">
                                                    Bagaimana cara mendaftar lomba Tiktok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pendaftaran dapat dilakukan melalui Website ICF 2022.</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrity">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrity" aria-expanded="false"
                                                    aria-controls="collapseThrity">
                                                    Apa tema video lomba Tiktok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrity" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrity" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Technology for humanity</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThritySatu">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThritySatu" aria-expanded="false"
                                                    aria-controls="collapseThritySatu">
                                                    Berapa jumlah peserta dalam setiap tim ?
                                                </button>
                                            </h2>
                                            <div id="collapseThritySatu" class="accordion-collapse collapse"
                                                aria-labelledby="headingThritySatu" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Setiap tim dapat berjumlah 1-5 orang</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityDua">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityDua" aria-expanded="false"
                                                    aria-controls="collapseThrityDua">
                                                    Berapa maksimal jumlah dan durasi video yang boleh di kumpulkan ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityDua" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityDua" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Setiap tim hanya boleh mengirim 1 video dengan durasi minimum 1 menit
                                                        dan maksimum 3 menit</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityTiga">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityTiga" aria-expanded="false"
                                                    aria-controls="collapseThrityTiga">
                                                    Bagaimana metode kompetisi lomba Tiktok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityTiga" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityTiga" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Peserta wajib upload video tiktok di akun pribadi dan upload mirror
                                                        di instagram reels dengan caption berupa ajakan literasi digital
                                                        atau teknologi jaman now, sertakan juga hashtag #icfubaya2022
                                                        #lombavideotiktokubaya dan mention @icfubaya2022 dan
                                                        @informatika.ubaya</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityEmpat">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityEmpat" aria-expanded="false"
                                                    aria-controls="collapseThrityEmpat">
                                                    Seperti apa hadiah bagi pemenang lomba Tiktok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityEmpat" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityEmpat" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Pemenang lomba hackaton akan mendapatkan total hadiah jutaan rupiah
                                                        dan sertifikat pemenang</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityLima">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityLima" aria-expanded="false"
                                                    aria-controls="collapseThrityLima">
                                                    Apa saja hal yang dapat membuat peserta didiskualifikasi ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityLima" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityLima" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat waktu
                                                        pada jadwal lomba yang sudah ditentukan panitia, melakukan SARA dan
                                                        ujaran kebencian dalam bentuk apapun, dan melanggar tata tertib/
                                                        peraturan lomba (tertera pada modul).</p>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityEnam">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityEnam" aria-expanded="false"
                                                    aria-controls="collapseThrityEnam">
                                                    Apa saja kriteria penilaian untuk lomba TikTok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityEnam" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityEnam" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <ul>
                                                        <li>Kreativitas konten video</li>
                                                        <li>Orisinalitas konten video</li>
                                                        <li>Pengambilan angle. momen, dan pencahayaan</li>
                                                        <li>Kesesuaian tema</li>
                                                        <li>Kekuatan pesan dari video tiktok tersebut</li>
                                                        <li>Kompleksitas konten video menggunakan fitur di tiktok</li>
                                                        <li>Banyaknya like dan comment akan menjadi pertimbangan dari dewan
                                                            juri</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="accordion-item faq-radialGradient">
                                            <h2 class="accordion-header" id="headingThrityTujuh">
                                                <button
                                                    class="accordion-button collapsed color-title-faq faq-radialGradient-title"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThrityTujuh" aria-expanded="false"
                                                    aria-controls="collapseThrityTujuh">
                                                    Apa saja kriteria penilaian untuk lomba TikTok ?
                                                </button>
                                            </h2>
                                            <div id="collapseThrityTujuh" class="accordion-collapse collapse"
                                                aria-labelledby="headingThrityTujuh" data-bs-parent="#accordionExample">
                                                <div class="accordion-body color-inside-faq faq-radialGradient-inside">
                                                    <p>
                                                        Bisa hubungi di nomor 082253749916 a.n. Jennie
                                                    </p>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
@endsection
