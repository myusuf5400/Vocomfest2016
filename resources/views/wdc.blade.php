@extends('layouts.app')
@section('title', 'Web Design Competition')
@section('content')
<div class="se-pre-con">
</div>
<header>
    <nav id="main-nav" class="navbar navbar-default def-style">
        @include('navbar')
    </nav>
</header>
<div class="container event-details">
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/')}}">
                Home
            </a>
        </li>
        <li>
            <a href="{{url('/#events')}}">
                Events
            </a>
        </li>
        <li class="active">
            Web Design Competition
        </li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div id="tabnya">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#desc" aria-controls="home" role="tab" data-toggle="tab" class="klik" id="de">
                            Deskripsi
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#term" aria-controls="profile" role="tab" data-toggle="tab" class="klik" id="te">
                            Syarat dan Ketentuan
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#time" aria-controls="messages" role="tab" data-toggle="tab" class="klik" id="ti">
                            Jadwal Alur Perlombaan
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#mark" aria-controls="settings" role="tab" data-toggle="tab" class="klik" id="ma">
                            Kriteria Penilaian
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#alur" aria-controls="settings" role="tab" data-toggle="tab" class="klik" id="al">
                            Alur Pendaftaran Lomba
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="desc">
                        <h1>
                            DESKRIPSI PERLOMBAAN
                        </h1>
                        <p>
                            Web Design Competition merupakan rangkaian acara VOCOMFEST 2016 yang pertama dimana mengangkat tema “Smart E-Government for Indonesian People”. Kompetisi ini ditujukan untuk siswa SMA/SMK sederajat yang sudah bisa maupun masih belajar mengembangkan website. Dengan mengangkat tema diatas, harapannya dari kompetisi ini dapat membantu pemerintah dalam mengembangkan website kedinasan agar lebih informatif dan interaktif kepada masyarakat.
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="term">
                        <h1>
                            SYARAT DAN KETENTUAN PELOMBAAN
                        </h1>
                        <h4>
                            Syarat Peserta
                        </h4>
                        <ol>
                            <li>
                                Peserta Web Design Competition adalah satu tim yang terdiri dari maksimal 3 orang.
                            </li>
                            <li>
                                Peserta merupakan siswa SMA/SMK sederajat dan masih berstatus pelajar.
                            </li>
                            <li>
                                Setiap Sekolah diperbolehkan untuk mendaftarkan lebih dari satu tim.
                            </li>
                            <li>
                                Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda.
                            </li>
                            <li>
                                Satu tim harus berasal dari sekolah yang sama.
                            </li>
                            <li>
                                Tim mendaftar secara online di website <a href="{{url('/register')}}">www.vocomfest.com/register</a> atau mendaftar pada stand di lobby KPTU Sekolah Vokasi Universitas Gadjah Mada Sekip Unit I Yogyakarta.
                            </li>
                            <li>
                                Peserta harus melunasi biaya pendaftaran sebesar Rp 75.000,00.
                            </li>
                            <li>
                                Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.
                            </li>
                        </ol>
                        <h4>
                            Ketentuan Web
                        </h4>
                        <ol>
                            <li>
                                Bentuk web yang dibuat merupakan sebuah web statis tetapi peserta diperkenankan untuk membuat dalam bentuk web dinamis selama seluruh syarat lainnya terpenuhi.
                            </li>
                            <ul>
                                <li>
                                    Web Statis
                                    <br/>
                                    Web statis adalah website yang mana pengguna tidak bisa mengubah konten dari web tersebut secara langsung menggunakan browser. Interaksi yang terjadi antara pengguna dan server hanyalah seputar pemrosesan link saja. Halaman-halaman web tersebut tidak memiliki database, data dan informasi dalam web statis tidak berubah-ubah kecuali diubah syntaxnya.
                                </li>
                                <li>
                                    Web Dinamis
                                    <br/>
                                    Dalam web dinamis, yang terjadi pada antara pengguna dan server sangat kompleks. Seseorang dapat mengubah konten dari halaman tertentu dengan menggunakan browser. Web dinamis memiliki data dan informasi yang berbeda-beda tergantung include apa yang disampaikan.
                                </li>
                            </ul>
                            Dengan kriteria penilaian seperti yang tercantum dibawah, peserta sudah cukup mengirim web statis saja.
                        </li>
                        <li>
                            Teknik pembuatan web bebas.
                        </li>
                        <li>
                            Dilarang menggunakan framework css (bootstrap, foundation, less framework, amazium, skeleton, dan lain-lain) maupun template dari orang lain.
                        </li>
                        <li>
                            Website yang dibuat  oleh peserta harus interaktif dan informatif.
                        </li>
                        <li>
                            Design sesuai dengan tema.
                        </li>
                        <li>
                            Website yang diikut sertakan dalam lomba belum pernah diikut sertakan pada kompetisi manapun.
                        </li>
                        <li>
                            Panitia VOCOMFEST 2016 berhak mendiskualifikasi peserta jika diketahui Hak Atas Kekayaan Intelektualnya diragukan, sedang dalam sengketa, mengambil karya orang lain, atau  mendapat klaim dari pihak lain.
                        </li>
                        <li>
                            Website yang diperlombakan menjadi hak milik peserta.
                        </li>
                        <li>
                            Konten website
                            <br/>
                            <ul>
                                <li>
                                    Home
                                    <br/>
                                    Informasi umum website.
                                </li>
                                <li>
                                    Berita
                                    <br/>
                                    Berisi tentang seputar kegiatan yang bersangkutan dengan informasi apapun mengenai kedinasan yang akan dipilih, Kedinasan yang dipilih bebas. Contoh dinas pendidikan berisi tentang berita seputar beasiswa dan bantuan operasional sekolah.
                                </li>
                                <li>
                                    Profil
                                    <br/>
                                    Profil tersebut berisi tentang Visi dan Misi, Tugas dan Fungsi, Unit Kerja, Struktur Organisasi yang ada pada kedinasan tersebut.
                                    <li>
                                        Lain-lain
                                        <br/>
                                        Peserta dapat menambahkan sendiri konten yang dibutuhkan sesuai dengan website kedinasan yang diambil.
                                    </li>
                                </ul>
                                <li>
                                    Fitur website
                                    <ul>
                                        <li>
                                            Dapat melakukan pelayanan terhadap masyarakat sesuai dengan kedinasan yang dipilih.
                                        </li>
                                        <li>
                                            Dapat menampilkan program kerja atau agenda kegiatan kedinasan yang dipilih.
                                        </li>
                                        <li>
                                            Dapat menambahkan sendiri fitur yang dibutuhkan sesuai dengan website kedinasan yang diambil.
                                        </li>
                                    </ul>
                                    <li>
                                        Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="time">
                                        <h1>
                                            JADWAL DAN ALUR PERLOMBAAN
                                        </h1>
                                        <ol>
                                            <li>
                                                Peserta mengisi formulir pendaftaran yang ada di web <a href="{{url('/register')}}">www.vocomfest.com/register</a> atau mendaftar pada stan di KPTU Sekolah Vokasi Universitas Gadjah Mada Sekip Unit I Yogyakarta.
                                            </li>
                                            <li>
                                                Pendaftaran paling lambat tanggal 10 Maret 2016.
                                            </li>
                                            <li>
                                                Pembayaran untuk pendaftaran online silahkan transfer ke nomor rekening bank mandiri : 171 00 0078594 2, atas nama Nurul Puspa Dewi.
                                            </li>
                                            <li>
                                                Peserta mengirimkan  scan bukti pembayaran dan kartu pelajar ke email :wdc@vocomfest.com dengan subject validasi pembayaran wdc (Nama Tim).
                                            </li>
                                            <li>
                                                Sebelum mengirimkan bukti pembayaran, akun peserta tidak dapat login ke website www.vocomfest.com, pembayaran akan diverifikasi terlebih dahulu lalu peserta dapat login di website <a href="{{url('/login')}}">www.vocomfest.com/login</a> dengan email ketua dan password saat registrasi.
                                            </li>
                                            <li>
                                                Hasil karya dikirimkan melalui website <a href="{{url('/user/upload')}}">www.vocomfest.com</a> dengan nama folder: WDC_nama tim_nama website kedinasan yang digunakan, contoh : WDC_Doa Anak_Pariwisata Bali.
                                            </li>
                                            <li>
                                                Yang harus disertakan dalam pengumpulan hasil karya:
                                            </li>
                                            <ul>
                                                <li>
                                                    Screenshoot website
                                                </li>
                                                <li>
                                                    File website disimpan dalam satu folder dengan nama folder WDC_nama tim_nama website kedinasan yang digunakan, kemudian dikompres dengan format zip
                                                </li>
                                            </ul>
                                            <li>
                                                Hasil karya paling lambat diterima oleh panitia pada tanggal 24 Maret 2016 pukul 21.00 WIB.
                                            </li>
                                            <li>
                                                Pengumuman peserta yang masuk babak final pada 28 Maret 2016
                                            </li>
                                            <li>
                                                Peserta yang lolos seleksi ke babak final mengikuti technical meeting yang diadakan pada tanggal 16 April 2016.
                                            </li>
                                            <li>
                                                Peserta yang lolos seleksi ke babak final, wajib mengikuti seleksi final dengan metode presentasi karya yang akan dilaksanankan pada tanggal 17 April 2016 di Hall Perpustakaan Sekolah Vokasi UGM.
                                            </li>
                                            <li>
                                                Pengumuman pemenang akan dilakukan langsung setelah presentasi selesai.
                                            </li>
                                        </ol>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="mark">
                                        <h1>
                                            KRITERIA PENILAIAN PERLOMBAAN
                                        </h1>
                                        <h3>
                                            Kriteria Penilaian
                                        </h3>
                                        <ol>
                                            <li>
                                                Desain interface web,  layout dan  navigasi
                                            </li>
                                            <li>
                                                Fitur dan inovasi web
                                            </li>
                                            <li>
                                                Kecepatan akses
                                            </li>
                                            <li>
                                                Kesesuaian tema
                                            </li>
                                            <li>
                                                Konten website
                                            </li>
                                            <li>
                                                Estetika
                                            </li>
                                            <li>
                                                Fungsionalitas
                                            </li>
                                        </ol>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="alur">
                                        <h1>
                                            ALUR PENDAFTARAN LOMBA
                                        </h1>
                                        <ol>
                                            <li>
                                                Peserta melakukan pendaftaran di <a href="{{url('/register')}}">www.vocomfest.com/register</a>
                                            </li>
                                            <li>
                                                Peserta mengisi form registrasi yang tersedia dengan data yang sebenarnya-benarnya.
                                            </li>
                                            <li>
                                                Setelah selesai melakukan registrasi, peserta melakukan pembayaran sebesar Rp. 75.000,00 ke rekening Mandiri 171 00 0078594 2 atas nama Nurul Puspa Dewi.
                                            </li>
                                            <li>
                                                Peserta mengirimkan scan bukti pembayaran dan kartu pelajar ketua dan anggota ke email wdc@vocomfest.com dengan Subyek “Bukti Pembayaran dan Scan Kartu Pelajar WDC (Nama Tim)”.
                                            </li>
                                            <li>
                                                Setelah selesai mengirimkan bukti pembayaran dan scan kartu pelajar, peserta mengkonfirmasi di nomor 089639704303 bahwa kelompok tersebut telah mengirim bukti pembayaran dan scan kartu pelajar.
                                            </li>
                                            <li>
                                                Akun peserta akan diaktifasi oleh panitia setelah peserta mengirimkan bukti pembayaran dan scan kartu pelajar.
                                            </li>
                                            <li>
                                                Setelah akun diaktifasi, peserta dapat melakukan login di <a href="{{url('/login')}}">www.vocomfest.com/login</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /container -->
                <footer class="footer-bottom">
                    <div class="copy">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 pd-bt-5">
                                    <p class="text-center copyright">
                                        Vocomfest &copy; 2016. Built with love by Vocomfest Technical Support
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                @endsection
@section('script')
    <!-- JS Here -->
    <script type="text/javascript" src="{{url('assets/js/vocomfest.js')}}"></script>
@endsection

@section('stylesheet')
<!-- CSS Here -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest.css')}}">
@endsection