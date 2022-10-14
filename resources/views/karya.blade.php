@extends('layouts.mainweb')
<link rel="stylesheet" href="{{ asset('assets/css/workshop.css') }}"><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@section('title')
ICF 2022 - Daftar Karya Pameran
@endsection
<style>
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x,.75rem);
  padding-left: var(--bs-gutter-x,.75rem);
  margin-right: auto;
  margin-left: auto;
}

</style>
@section('content')
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Judul TA</th>
        <th scope="col">NRP </th>
        <th scope="col">Nama </th>
        <th scope="col">Jurusan</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Device</th>
        <th scope="col">Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Pembuatan Game Simulasi Kehidupan Mahasiswa Perantauan</td>
        <td>160418029</td>
        <td>JERICHO ANTHONY CHRISTIAN</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Deskripsi
          </button>

          <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 style="color: white">Pembuatan Game Simulasi Kehidupan Mahasiswa Perantauan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Merantau merupakan kegiatan yang sering dilakukan oleh calon mahasiswa yang ingin berkuliah di luar daerah asal mereka. Terdapat beberapa kendala yang dapat dialami oleh mahasiswa perantau, yaitu kesusahan mengatur waktu dan keuangan serta beradaptasi dengan lingkungan sekitar. Oleh karena itu, calon mahasiswa perantau memerlukan sebuah media yang dapat mengedukasi mereka mengenai dunia perantauan. Studi ini dilakukan dengan membuat game simulasi mahasiswa perantauan sebagai media pembelajaran yang cocok untuk mengedukasi calon mahasiswa perantau dalam memahami kehidupan perantauan. Guna menunjang efektivitas, game akan mengimplementasikan Decision Tree dan Goal-Oriented Action Planning sebagai metode artificial intelligence. Analisis permasalahan dilakukan dengan menyebar kuesioner kepada calon mahasiswa perantau untuk mengetahui kesiapan mereka merantau dan minat mereka bermain game. Analisis media sejenis dilakukan dengan menganalisis game lainnya yang memiliki konsep, mekanik permainan dan gameplay yang sama. Desain dari game menggunakan visual dua dimensi dan objek dalam game berbentuk pixel sprite. Aplikasi game simulasi kehidupan mahasiswa perantau akan diberi judul “Merantau” dan akan dibuat untuk platform Windows. Game dibuat dengan game engine Unity versi 2020.3.16f1, sedangkan untuk keperluan koding akan menggunakan program Microsoft Visual Studio 2019. Aset yang digunakan dalam game dibuat menggunakan aplikasi Photoshop CC 2017 dan Aseprite versi 1.2.21. Hasil uji coba dan evaluasi game menunjukan bahwa game simulasi kehidupan mahasiswa perantau yang berjudul “Merantau” ini telah berhasil memberikan edukasi kepada calon mahasiswa perantau mengenai kehidupan perantauan.
        </div>

      </div>
    </div>
  </div>

          </td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Pembuatan Game Online Multiplayer "Serang Benteng" Sebagai Media Pengenalan Permainan Tradisional</td>
        <td>160418037</td>
        <td>FASYEKH KHOIRUL MUBARROK</td>
        <td>IF</td>
        <td>Multiplayer, mohon disiapkan jaringan dan beberapa laptop terinstal</td>
        <td>Laptop</td>
        <td>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Pembuatan Game Online Multiplayer "Serang Benteng" Sebagai Media Pengenalan Permainan Tradisional</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            "Benteng-bentengan merupakan salah satu permainan tradisional yang dulunya
sering dimainkan oleh masyarakat. Namun dengan berjalannya waktu, permainan
tradisional tersebut sudah jarang dimainkan oleh masyarakat khususnya generasi Z.
Berdasarkan hasil kuesioner dengan responden generasi Z, responden cenderung tidak
mengetahui maupun memainkan permainan tradisional benteng-bentengan. Agar dapat
memperkenalkan permainan tradisional benteng-bentengan kepada generasi Z, maka
dibuatlah game 3D online multiplayer “Serang Benteng” dengan menggunakan Photon
Unity Networking sebagai pendukung fitur multiplayer agar pemain dapat berinteraksi
dengan pemain lain selayaknya seperti permainan tradisional benteng-bentengan. Proses
desain pada game “Serang Benteng” meliputi desain permainan, desain proses, desain
tampilan serta desain aset. Implementasi game menggunakan aplikasi Unity Engine,
Adobe Illustrator, Blender Serta Unity Asset Store. Evaluasi dilakukan dengan
melakukan verifikasi terhadap game “Serang Benteng” untuk terbebas dari error dan uji
coba dengan melakukan validasi melalui kuesioner kepada responden generasi Z. Setelah
dilakukan kesimpulan terhadap hasil kuesioner maka dapat dinyatakan bahwa game
“Serang Benteng” mampu mengenalkan permainan tradisional benteng-bentengan kepada
generasi Z.
"
         </div>

       </div>
     </div>
   </div></td>
      </tr>

    <tr>
        <th scope="row">3</th>
        <td>Sistem Penerjemah Bahasa Isyarat Indonesia (Bisindo) Berbasis Video Menggunakan Algoritma Convolutional Neural Network</td>
        <td>160418008</td>
        <td>Sesilia Shania</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td>   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Sistem Penerjemah Bahasa Isyarat Indonesia (Bisindo) Berbasis Video Menggunakan Algoritma Convolutional Neural Network</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Bahasa isyarat merupakan bahasa yang digunakan untuk berkomunikasi dengan memanfaatkan gerak tubuh maupun ekspresi wajah. Di Indonesia, terdapat dua bahasa isyarat, namun penelitian ini berfokus pada BISINDO yang lebih sering digunakan oleh para tuli maupun bisu. Berdasarkan survei yang telah dibagikan secara online ke berbagai daerah di Indonesia, dapat disimpulkan bahwa masih banyak yang kesulitan dalam berkomunikasi dengan para tuli dan tidak mengetahui apa itu BISINDO. Selain itu, sistem penerjemah lebih diminati masyarakat dibandingkan harus mempelajari BISINDO. Maka dari itu, tugas akhir ini akan membuat sistem penerjemah BISINDO dengan algoritma Convolutional Neural Network (CNN). Sistem penerjemah ini akan dibentuk dengan menggunakan algoritma CNN yang lebih unggul dalam pengenalan pola berbentuk gambar. Arsitektur CNN yang akan digunakan yaitu model sederhana buatan pribadi, MobileNetV2, ResNet50V2, dan Xception. Dengan diterapkannya model klasifikasi CNN, diharapkan dapat menerjemahkan 10 kosakata BISINDO yang dilatih dengan data gambar menjadi kosakata tertulis dengan akurat. Sedangkan, prediksi kosakata BISINDO akan dilakukan secara real-time menggunakan webcam. Berdasarkan hasil uji coba dan evaluasi, sebanyak 100% dari 11 responden yang merupakan para ahli BISINDO menyatakan bahwa sistem dapat menerjemahkan BISINDO dengan baik. Selain itu, sistem juga telah memberikan hasil yang baik pada uji coba dengan pendekatan interaksi antara sepasang teman tuli dan orang non-disabilitas. Beberapa percobaan dilakukan untuk menghasilkan akurasi terbaik, yaitu percobaan dengan perbedaan jumlah dataset, target fitur, maupun tambahan denoise. Dari percobaan yang telah dilakukan, didapatkan bahwa model Xception dengan 220 dataset gambar tanpa tambahan denoise menjadi yang terbaik dengan akurasinya sebesar 98,18%.
         </div>

       </div>
     </div>
   </div></td>
      </tr>

      <tr>
        <th scope="row">4</th>
        <td>Pembuatan Aplikasi Pengelola Finansial Keluarga Berbasis Android</td>
        <td>160414023</td>
        <td>WIBISONO INDRAWAN</td>
        <td>IF</td>
        <td></td>
        <td>HP</td>
        <td>  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4">
            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Pembuatan Aplikasi Pengelola Finansial Keluarga Berbasis Android</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
       <div class="">   </div>
         </div>

       </div>
     </div>
   </div>
</td>
      </tr>

      <tr>
        <th scope="row">5</th>
        <td>Analisis Sentimen Untuk Identifikasi Bantuan Pada Korban Bencana Alam di Indonesia Dengan Metode K-Means dan Naive Bayes</td>
        <td>160417054</td>
        <td>Gatum Erlangga</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal5">
            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Analisis Sentimen Untuk Identifikasi Bantuan Pada Korban Bencana Alam di Indonesia Dengan Metode K-Means dan Naive Bayes</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Media sosial sudah menjadi tempat yang umum bagi orang banyak untuk mengekspresikan diri, tidak terkecuali meminta pertolongan jika sedang mengalami musibah. Berdasarkan hal tersebut, peneliti mencari cara untuk melakukan analisis sentiment untuk menentukan bantuan yang tepat bagi korban bencana alam di Indonesia menggunakan metode K-Means dan Naïve Bayes. Pada penelitian ini, bantuan yang akan diklasifikasikan adalah pakaian, makanan, air bersih dan obat. Analisis sentimen adalah istilah yang digunakan untuk melakukan opinion mining. K-Means merupakan algoritma clustering yang sederhana dan berfungsi untuk mengelompokan data sesuai dengan kedekatannya. Sedangkan Naïve Bayes adalah algoritma untuk melakukan klasifikasi berdasarkan probabilitas. Penelitian ini akan membandingkan performa dari gabungan algoritma K-Means dan Naïve Bayes, serta algoritma Naïve Bayes saja. Metode evaluasi yang akan digunakan adalah KFold Cross Validation. Hasil penelitian menunjukan bahwa perhitungan akurasi KMeans dan Naïve Bayes tidak lebih tinggi dengan penggunaan Naïve Bayes saja. Akurasi dengan K-Fold Cross Validation algoritma Naïve Bayes mencapai 60,29%. Sedangkan, K-Means dan Naïve Bayes mencapai 59.00%. Sedangkan, hasil dengan k pada K-Means yang menghasilkan akurasi 10-Fold Cross Validation tertinggi adalah 3
         </div>

       </div>
     </div>
   </div></td>
      </tr>

      <tr>
        <th scope="row">6</th>
        <td>Pembuatan Sistem Informasi Penjualan Properti di Xavier Marks Tjandra Grande Berbasis Mobile dan Website</td>
        <td>160418071</td>
        <td>MATTHEW NOTO SISWO</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal6">
            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Pembuatan Sistem Informasi Penjualan Properti di Xavier Marks Tjandra Grande Berbasis Mobile dan Website</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Xavier Marks Tjandra Grande adalah salah satu kantor cabang yang dimiliki oleh perusahaan properti Xavier Marks Indonesia. Dalam pengelolaan data properti yang dimiliki oleh Xavier Marks Tjandra Grande ini masih belum memiliki sistemnya sendiri. Penggunaan banyak aplikasi seperti Google Mail, Microsoft Excel, Google Form, aplikasi Xmart, dan Google Notes membuat agen kesulitan dalam mengelola dan menyalurkan data properti yang ada. Dari kekurangan yang didapatkan pada kantor Xavier Marks Tjandra Grande ini, maka dibuatlah sebuah sistem informasi penjualan yang dapat membantu agen dalam mengelola dan mencari data properti melalui fitur yang sudah dibuat. Sistem informasi penjualan yang dibuat akan berbasis mobile dan website. Berbagai macam fitur seperti kalkulator, multi search, bookmark, co-broke, reminder dan laporan disediakan untuk membantu pengelolaan data yang ada di Xavier Marks Tjandra Grande. Melalui fitur multi search yang dimiliki oleh sistem ini juga sangat membantu agen dalam mencari jenis properti agar lebih detail. Berdasarkan hasil uji coba yang dilakukan di kantor Xavier Marks Tjandra Grande ini dapat disimpulkan bahwa aplikasi dan sistem yang dibuat sudah lebih membantu agen dalam mengelola data properti yang ada
         </div>

       </div>
     </div>
   </div></td>
      </tr>

      <tr>
        <th scope="row">7</th>
        <td>Pengembangan E-Learning Bahasa Inggris Berbasis Web (Diadaptasi Dari Metode Belajar Kampung Inggris)</td>
        <td>160418092</td>
        <td>ELISA NATALIA SENTOSO</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">            Deskripsi
           </button>

           <!-- Modal -->
 <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 style="color: white">Pengembangan E-Learning Bahasa Inggris Berbasis Web (Diadaptasi Dari Metode Belajar Kampung Inggris)</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Kampung Inggris adalah Kawasan wisata pendidikan yang berada di Desa Tulungrejo, Kecamatan Pare, Kabupaten Kediri, Provinsi Jawa Timur. Telah berdiri sejak tahun 1977 dan memiliki lebih dari 100 lembaga kursus, Kampung Inggris setiap tahunnya dijadikan destinasi belajar dan wisata oleh lebih dari 15.000 pengunjung yang berasal dari berbagai pulau di Indonesia dan bahkan mancanegara. Diversitas pengunjung Kampung Inggris menunjukkan bahwa banyak warga luar pulau mengakses wisata pendidikan ini. Penelitian dilakukan dengan menyebarkan kuesioner yang mengukur aksesibilitas Kampung Inggris secara kualitatif. Pertanyaan dan variabel pada kuesioner didapatkan dari hasil riset terhadap jurnal-jurnal terkait Kampung Inggris. Survei dilakukan pada 155 responden dengan latar belakang berusia produktif dan memiliki ketertarikan dengan Kampung Inggris. Lebih dari 80% pengunjung (dan calon pengunjung) Kampung Inggris merasa terbebani dengan masalah jarak dan materi yang dibutuhkan untuk mengakses pendidikan di Kampung Inggris. Tugas Akhir ini dibuat sebagai solusi masalah tersebut. Sebuah e-Learning dirancang untuk mengakomodasi kebutuhan pembelajaran Kampung Inggris yang dikemas dalam bentuk daring. E-Learning yang mengadaptasi metode belajar Kampung Inggris ini dikembangkan dalam basis web. Sistem ini diharapkan dapat membantu calon pengunjung Kampung Inggris dengan keterbatasan jarak dan materi untuk tetap menikmati Kampung Inggris. Validasi dilakukan dengan menyebarkan angket terhadap 14 orang calon pengunjung Kampung Inggris. Kesimpulan dari angket adalah calon pengunjung Kampung Inggris merasa website yang dibuat mempermudah aksesibilitas pendidikan di Kampung Inggris. Responden juga memberi saran untuk memperbaiki UI sehingga lebih menghibur.
         </div>

       </div>
     </div>
   </div></td>
      </tr>

      <tr>
        <th scope="row">8</th>
        <td>Pembuatan Game Menghadapi Skenario Terjadinya Pandemi Bagi Masyarakat</td>
        <td>160818031</td>
        <td>EMMANUELLE GERALDI WINSON</td>
        <td>IF</td>
        <td></td>
        <td>HP / Tablet</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal8">            Deskripsi
        </button>

        <!-- Modal -->
<div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="color: white">Pembuatan Game Menghadapi Skenario Terjadinya Pandemi Bagi Masyarakat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div></td>
      </tr>

      <tr>
        <th scope="row">9</th>
        <td>AR Perumpamaan Penabur</td>
        <td>160818038</td>
        <td>Jiechella Davidson</td>
        <td>IF</td>
        <td></td>
        <td>HP/Tablet</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal9">            Deskripsi
        </button>

        <!-- Modal -->
<div class="modal fade" id="modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="color: white">AR Perumpamaan Penabur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div></td>
      </tr>

      <tr>
        <th scope="row">10</th>
        <td>Aplikasi Pomodoro</td>
        <td>160818018</td>
        <td>Laurentius Jeffrey</td>
        <td>IF</td>
        <td></td>
        <td>Laptop</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal10">            Deskripsi
        </button>

        <!-- Modal -->
<div class="modal fade" id="modal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="color: white">Aplikasi Pomodoro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div></td>
      </tr>
    </tbody>
  </table>

</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
@endsection


