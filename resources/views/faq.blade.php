@extends('layouts.mainweb')

@section('title')
ICF 2022 - FAQ
@endsection
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
<!-- END TITLE SECTION -->

<!-- FAQ SECTION -->
<div class="faq-section">
<section>
<html>
    <head>
        <title> FAQ</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="acordion-container">
            <div class="accordion">
                <div class="contentBx">
                    <div class="label">
                        <p>Apa itu CEG 2022?</p> 
                    </div>
                    <div class="content">
                       <p> Chemical Engineering Games merupakan lomba tahunan yang diadakan oleh program studi Teknik Kimia Universitas Surabaya yang ditujukan untuk siswa/i SMA/sederajat se-Indonesia yang dikemas dalam bentuk games yang seru dan unik.
                    </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>CEG 2022 akan diadakan secara offline atau online?</p>
                    </div>
                    <div class="content">
                       <p>CEG 2022 akan dilaksanakan secara online. </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label">
                        <p>Apa saja babak dalam CEG 2022? </p>
                    </div>
                    <div class="content">
                       <p>CEG 2022 terdiri dari empat babak yaitu Rally Games, Game besar, Semi Final, dan Final. Selain itu terdapat pula babak Pre-Event</p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label">
                        <p>Apakah CEG 2022 merupakan lomba yang bersifat akademis (seperti mengerjakan soal-soal pelajaran)?</p>
                    </div>
                    <div class="content">
                       <p>CEG 2022 bersifat akademis namun dikemas dalam permainan yang seru dan menarik. </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label">
                        <p>Apakah pelajaran yang diujikan hanya mengenai pelajaran kimia?</p>
                    </div>
                    <div class="content">
                       <p>Pelajaran yang diujikan tidak hanya tentang kimia saja, tetapi juga mengenai matematika, fisika, biologi, teknik kimia, dan pengetahuan umum yang sesuai dengan pengetahuan siswa/i SMA/sederajat.  </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label">
                        <p>Bagaimana saya dapat mendaftar menjadi peserta CEG 2022?</p>
                    </div>
                    <div class="content">
                       <p>Mekanisme dan persyaratan pendaftaran CEG 2022 dapat dilihat di website; cegubaya.com dan instagram; @ceg.ubaya  </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Kapan lomba CEG 2022 dilaksanakan?</p>
                    </div>
                    <div class="content">
                       <p>Technical Meeting    : 16 April 2022
                        Main Event        : 22-24 April 2022 </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Apa saja yang perlu disiapkan untuk mengikuti CEG 2022?</p>
                    </div>
                    <div class="content">
                       <p>Masing–masing peserta CEG 2021 harus mempunyai minimal 1 laptop/komputer dan 1 gadget (smartphone/tablet/laptop/komputer/dan lainnya) yang memiliki kamera  dan mempunyai koneksi internet yang cukup serta memadai. </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Apakah terdapat batasan jumlah tim yang diperbolehkan untuk mendaftar (dari setiap sekolah)?</p>
                    </div>
                    <div class="content">
                       <p>Tidak ada batasan tim yang diperbolehkan untuk mendaftar dari setiap sekolah </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Di mana saya dapat memperoleh informasi terkait CEG 2022?</p>
                    </div>
                    <div class="content">
                      <p>Informasi terkait CEG 2022 akan dibagikan melalui instagram @ceg.ubaya dan <p> website: cegubaya.com </p>
                     <p>Untuk informasi lebih lanjut, para peserta juga dapat menghubungi CP:</p>
                     <p>OA Line: @bgt6574p</p>
                    <p>Kevin: 087780882836 (WA)</p>
                    <p>Clarissa: 089699768576 (WA)</p>
                    </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Dimana saya dapat melihat kisi-kisi perlombaan CEG 2022?</p>
                    </div>
                    <div class="content">
                       <p>Untuk kisi-kisi CEG 2022, dapat dilihat di instagram dan website CEG 2022 setelah Technical Meeting dilaksanakan. </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Apakah wajib mengikuti Technical Meeting?</p>
                    </div>
                    <div class="content">
                       <p>Setiap tim wajib mengirimkan satu perwakilan saat Technical Meeting berlangsung. Akan tetapi, seluruh anggota diperbolehkan untuk hadir </p> 
                    </div>
                </div>
                <div class="contentBx">
                    <div class="label"> 
                        <p>Kapan batas akhir pendaftaran lomba CEG 2022?</p>
                    </div>
                    <div class="content">
                       <p>Pendaftaran CEG 2022 dibuka dari 11 Januari 2022 hingga 8 April 2022 </p> 
                    </div>
                </div>
            </div>
        </div>
        <script>
           const accordion = document.getElementsByClassName('contentBx');
           for (i = 0; i <accordion.length; i++){
               accordion[i].addEventListener('click', function() {this.classList.toggle('active')
            })
           }
        </script>
    </body>
</html>
</section>
</div>
<!-- FAQ SECTION -->