@extends('layouts.app')
@section('title', 'Mobile Apps Development Competition')
@section('content')
<body>
    <div class="se-pre-con">
    </div>
    <header>
        <nav id="main-nav" class="navbar navbar-default def-style">
            @include('navbar')
        </nav>
    </header>
    <div class="container">
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
                Mobile Apps Development Competition
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
                            <a href="#apps" aria-controls="profile" role="tab" data-toggle="tab" class="klik" id="pg">
                                Pengumpulan Aplikasi
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
                                Mobile Apps Development Competition (MADC) VOCOMFest 2016 merupakan kompetisi membangun aplikasi mobile yang berbasis platform Android. Kompetisi ini terbuka bagi mahasiswa seluruh universitas di Indonesia. MADC VOCOMFest 2016 ini mengusung tema "Smart Apps for Services". Melalui kompetisi ini, diharapkan mampu memberikan kontribusi yang nyata dalam mencetak generasi baru developer aplikasi mobile yang tidak hanya pintar dalam hal programming, tetapi juga mampu mengeluarkan ide-ide yang inovatif dan kreatif. Selain itu, aplikasi mobile yang dihasilkan mampu membantu masyarakat dalam memperoleh pelayanan maksimal.
                            </p>
                            <p>
                                Mobile Apps Development Competition ini dilaksanakan dalam 5 tahapan, yaitu tahap pengumpulan proposal ide aplikasi, tahap penyisihan proposal ide aplikasi, tahap pengembangan aplikasi, tahap penyisihan aplikasi, dan tahap final presentasi aplikasi.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="term">
                            <h1>
                                SYARAT DAN KETENTUAN PERLOMBAAN
                            </h1>
                            <h4>
                                Syarat Peserta
                            </h4>
                            <ol>
                                <li>
                                    Peserta merupakan mahasiswa aktif D1/D2/D3/D4/S1.
                                </li>
                                <li>
                                    Peserta harus mengisi pendaftaran dengan lengkap dan memberikan informasi yang dapat dipertanggung jawabkan.
                                </li>
                                <li>
                                    Peserta harus melakukan registrasi terlebih dahulu sebelum mengirimkan proposal ide aplikasi.
                                </li>
                                <li>
                                    Peserta merupakan tim yang beranggotakan
                                    <b>
                                        maksimal 4 orang
                                    </b>
                                    dalam satu universitas.
                                </li>
                                <li>
                                    Jumlah tim dalam satu universitas tidak dibatasi.
                                </li>
                                <li>
                                    Satu orang tidak boleh terdaftar di lebih dari 1 tim.
                                </li>
                                <li>
                                    Pergantian anggota tim selama kompetisi
                                    <b>
                                        tidak diperkenankan.
                                    </b>
                                </li>
                                <li>
                                    <b>
                                        Peraturan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.
                                    </b>
                                </li>
                            </ol>
                            <h4>
                                Syarat Dan Ketentuan Aplikasi
                            </h4>
                            <ol>
                                <li>
                                    Karya yang diajukan merupakan ide orisinil dengan tidak menjiplak aplikasi yang sudah ada.
                                </li>
                                <li>
                                    Segala bentuk plagiarisme akan menyebabkan peserta didiskualifikasi.
                                </li>
                                <li>
                                    Karya harus bisa direalisasikan menjadi bentuk aplikasi yang  mempunyai nilai artistik, imajinatif, dan inovatif.
                                </li>
                                <li>
                                    Karya belum pernah menjuarai 1/2/3 pada kompetisi manapun.
                                </li>
                                <li>
                                    Karya yang diajukan mengacu kepada tema yang telah ditentukan.
                                </li>
                                <li>
                                    Karya tidak mengandung unsur SARA (Suku, Agama, Ras, dan Antar Golongan), kejahatan, dan pornografi.
                                </li>
                                <li>
                                    Aplikasi harus dibuat untuk Platform Android dan minimal berjalan di OS 4.2 Jelly Bean.
                                </li>
                                <li>
                                    Dilarang menggunakan template.
                                </li>
                                <li>
                                    Hak cipta karya tetap menjadi milik peserta.
                                </li>
                                <li>
                                    Keputusan juri tidak dapat di ganggu gugat.
                                </li>
                                <li>
                                    Peraturan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.
                                </li>
                            </ol>
                            <h4>
                                Ketentuan Proposal Ide
                            </h4>
                            <p>
                                Proposal ide yang dikumpulkan harus berisikan, sebagai berikut :
                            </p>
                            <ol>
                                <li>
                                    Nama aplikasi.
                                </li>
                                <li>
                                    Deskripsi aplikasi>
                                    <li>
                                        Latar belakang aplikasi
                                        <br/>
                                        Ceritakan latar belakang yang mendorong anda untuk membuat aplikasi tersebut.
                                        <li>
                                            Tujuan pembuatan aplikasi
                                            <br/>
                                            Ceritakan tujuan anda membuat aplikasi tersebut.
                                        </li>
                                        <li>
                                            Teknologi yang digunakan
                                            <br/>
                                            Sebutkan teknologi (software) yang menunjang pengembangan aplikasi anda.
                                        </li>
                                        <li>
                                            Dokumentasi
                                            <br/>
                                            Dokumentasi ini bisa berupa mock up atau desain aplikasi yang akan diterapkan pada aplikasi anda.
                                        </li>
                                        <li>
                                            Penjelasan fitur yang akan digunakan
                                            <br/>
                                            Jelaskan fitur fitur apa saja yang akan anda gunakan dalam aplikasi yang anda kembangkan secara singkat.
                                        </li>
                                        <li>
                                            Proposal ide aplikasi dikumpulkan dengan format .pdf.
                                        </li>
                                    </ol>
                                    <h4>
                                        Ketentuan Video Demo
                                    </h4>
                                    <p>
                                        Sebelum pengumpulan aplikasi, peserta harus mengupload video demo ke youtube dan kirim link video demo bersamaan dengan mengirim file aplikasi tersebut. Ketentuan mengenai video demo yang akan diupload sebagai berikut :
                                    </p>
                                    <ol>
                                        <li>
                                            Video dapat di rekam dari emulator, misalnya menggunakan aplikasi screen recording seperti camstudio, Camtasia dll. Bisa juga dengan device asli menggunakan kamera.
                                        </li>
                                        <li>
                                            Video mempertunjukkan dengan singkat dan jelas penggunaan aplikasi tersebut. Disarankan untuk mendemokan semua fitur aplikasi anda dalam video.
                                        </li>
                                        <li>
                                            Dibuat semenarik mungkin.
                                        </li>
                                        <li>
                                            Format video dianjurkan yang umum digunakan seperti .avi atau .mp4.
                                        </li>
                                        <li>
                                            Durasi video maksimal 5 menit.
                                        </li>
                                        <li>
                                            Untuk diperhatikan sebagai openingnya, panitia  akan menyediakan opening video berdurasi beberapa detik untuk disematkan dalam video demo aplikasi anda.
                                        </li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="time">
                                    <h1>
                                        JADWAL DAN ALUR PERLOMBAAN
                                    </h1>
                                    <h3>
                                        Jadwal Alur Perlombaan
                                    </h3>
                                    <ol>
                                        <li>
                                            Pendaftaran dibuka dan pengumpulan proposal ide aplikasi (11 Februari 2016)
                                            <br/>
                                            Peserta melakukan pendaftaran sesuai prosedur secara GRATIS dan peserta sudah dapat mulai mengumpulkan proposal ide aplikasi melalui web :
                                            <a href="http://vocomfest.com/">
                                                www.vocomfest.com
                                            </a>
                                            .
                                            Aplikasi yang di kembangkan merupakan aplikasi yang membantu masyarakat dalam memperoleh pelayanan maksimal. Masalah yang diangkat dapat dari bidang : layanan publik, pendidikan, pariwisata, potensi daerah, kesehatan.
                                        </li>
                                        <li>
                                            Pendaftaran ditutup (10 Maret 2016)
                                            <br/>
                                            Pendaftaran ditutup tanggal 10 Maret 2016 dan peserta yang sudah mendaftar masih diberi kesempatan untuk mengumpulkan proposal ide aplikasinya.
                                        </li>
                                        <li>
                                            Batas pengumpulan proposal ide aplikasi (17 Maret 2016)
                                            <br/>
                                            Pengumpulan proposal ide aplikasi ditutup.
                                        </li>
                                        <li>
                                            Penjurian tahap I : seleksi proposal ide aplikasi (19 – 20 Maret 2016)
                                            <br/>
                                            Pada tahap penjurian ini akan dilakukan seleksi proposal ide aplikasi yang akan melanjutkan ke tahap pengembangan aplikasi.
                                        </li>
                                        <li>
                                            Pengumuman peserta yang lolos tahap penjurian proposal ide aplikasi (21 Maret 2016)
                                            <br/>
                                            Pengumuman proposal ide aplikasi yang lolos dalam penjurian  yang akan di umumkan melalui website
                                            <a href="http://vocomfest.com/">
                                                www.vocomfest.com
                                            </a>
                                            dan juga email peserta yang lolos, dan peserta yang lolos dalam tahap penjurian akan melanjutkan pengembangan aplikasi ke tahap prototype.
                                        </li>
                                        <li>
                                            Pengumpulan APK & Dokumentasi Aplikasi jadi (21 Maret – 14 April 2016)
                                            <br/>
                                            Finalis akan mengumpulkan APK ke
                                            <a href="http://vocomfest.com/">
                                                www.vocomfest.com
                                            </a>
                                            & dokumentasi pengembangan aplikasi yang berupa video teaser aplikasi via youtube masing-masing dan mengirimkan link video ke
                                            <a href="http://vocomfest.com/">
                                                www.vocomfest.com
                                            </a>
                                            .
                                        </li>
                                        <li>
                                            Penjurian tahap II : seleksi aplikasi (15 – 16 April 2016)
                                            <br/>
                                            Penjurian tahap 2 dilakukan seleksi tahap aplikasi dan yang lolos akan melanjutkan ke babak final untuk presentasi dan mini  expo.
                                        </li>
                                        <li>
                                            Pengumuman peserta yang masuk babak final dan pengumuman hari TM (18 April 2016)
                                            <br/>
                                            Pengumuman peserta yang masuk kek babak final dan pengumuman hari TM.
                                        </li>
                                        <li>
                                            Technical Meeting (23 April 2016)
                                            <br/>
                                            Finalis akan menghadiri TM untuk dijelaskan peraturan tahap presentasi aplikasi yang telah dikembangkan dan peraturan expo.
                                        </li>
                                        <li>
                                            Babak final : Presentasi aplikasi  dan mini expo (24 April 2016)
                                            <br/>
                                            Finalis akan melakukan presentasi tentang aplikasi yang telah dikembangkan, kemudian dilanjutkan menampilkan hasil karyanya dalam bentuk expo yang bertempat di Hall Gedung Perpustakaan Sekolah Vokasi UGM.
                                        </li>
                                        <li>
                                            Pengumuman juara (24 April 2016)
                                            <br/>
                                            Pengumuman pemenang Mobile Apps Development Competition Vocomfest 2016.
                                        </li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="apps">
                                    <h1>
                                        Pengumpulan Aplikasi
                                    </h1>
                                    <p>
                                        Aplikasi jadi/protype yang dikirim dalam bentuk executable file (.APK) dan dikirim melalui website
                                        <a href="http://vocomfest.com/" >
                                            www.vocomfest.com
                                        </a>
                                        dengan nama folder :
                                        <b>
                                            Nama_tim(spasi)Nama_aplikasi
                                        </b>
                                        <br/>
                                        Folder yang akan di kirimkan harus di
                                        <b>
                                            zip
                                        </b>
                                        terlebih dahulu. Yang harus ada dalam folder zip tersebut adalah :
                                    </p>
                                    <ol>
                                        <li>
                                            Executable file (.APK)
                                        </li>
                                        <li>
                                            Tutorial singkat aplikasi (format .txt .doc atau .docx)
                                        </li>
                                        <li>
                                            Screenshoot aplikasi
                                        </li>
                                        <li>
                                            Deskripsi singkat aplikasi dan target device yang akan dipakai untuk aplikasi  (format .txt .doc atau .docx)
                                        </li>
                                        <li>
                                            Link video demo apps (format .txt .do atau docx)
                                        </li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="mark">
                                    <h1>
                                        KRITERIA PENILAIAN PERLOMBAAN
                                    </h1>
                                    <ol>
                                        <li>
                                            Inovasi dan solusi
                                        </li>
                                        <li>
                                            Fitur dan desain
                                        </li>
                                        <li>
                                            Kesusuaian ide dengan aplikasi yang dibuat.
                                        </li>
                                        <li>
                                            Fungsionalitas.
                                        </li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="alur">
                                    <h1>
                                        ALUR PENDAFTARAN LOMBA
                                    </h1>
                                    <ol>
                                        <li>
                                            Peserta melakukan pendaftaran di www.vocomfest.com/register
                                            <li>
                                                Peserta mengisi form registrasi yang tersedia dengan data yang sebenarnya-benarnya.
                                            </li>
                                            <li>
                                                Setelah selesai melakukan registrasi, peserta mengirimkan scan Kartu Tanda Mahasiswa (KTM) ketua dan anggota ke email madc@vocomfest.com dengan Subyek “Scan KTM (Nama Tim)”.
                                            </li>
                                            <li>
                                                Setelah selesai mengirimkan scan Kartu Tanda Mahasiswa (KTM), peserta mengkonfirmasi di nomor 089639704303 bahwa kelompok tersebut telah mengirim scan Kartu Tanda Mahasiswa (KTM).
                                            </li>
                                            <li>
                                                Akun peserta akan diaktifasi oleh panitia, setelah peserta mengirim scan Kartu Tanda Mahasiswa (KTM).
                                            </li>
                                            <li>
                                                Setelah akun diaktifasi, peserta dapat melakukan login di www.vocomfest.com/login
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /container -->
                <footer class="kick">
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
    <script type="text/javascript" src="{{url('assets/js/jquery.1.11.1-min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/loader.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // initialize
            $("html").niceScroll({
                cursorcolor : 'rgba(0,0,0,0.5)',
                cursorwidth : '7px',
                cursorborder : 'none',
                cursorborderradius : '0px' ,
                zindex : '101'
            }) ;

            $('#de').click(function(){
                $('footer').addClass('kick') ;
            });
            $('#al').click(function(){
                $('footer').addClass('kick') ;
            });
            $('#pg  ').click(function(){
                $('footer').addClass('kick') ;
            });
            $('#ma').click(function(){
                $('footer').addClass('kick') ;
            });

            $('#te').click(function(){
                $('footer').removeClass('kick') ;
            });
            $('#ti').click(function(){
                $('footer').removeClass('kick') ;
            });
            $('#ap').click(function(){
                $('footer').removeClass('kick') ;
            });
        }) ;
    </script>
@endsection

@section('stylesheet')
<!-- CSS Here -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest-reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/vocomfest-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/loader.css')}}">

@endsection