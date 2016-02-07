@extends('layouts.app')
@section('title', 'Home')
@section('content')
<body>
    <div class="se-pre-con">
    </div>
    <header class="header" id="home">
        <div class="cover-overlay">
            <nav id="main-nav" class="navbar navbar-default transparent">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <img src="assets/img/logo.png" alt="Vocomfest 2016" title="Vocomfest 2016" class="logo"/>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#home">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    ABOUT
                                </a>
                            </li>
                            <li>
                                <a href="#events">
                                    EVENTS
                                </a>
                            </li>
                            <li>
                                <a href="#testimoni">
                                    TESTIMONIALS
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    CONTACT
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    LOGIN
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container capti">
                <div id="owl-example" class="owl-carousel">
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    WELCOME TO VOCOMFEST!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    Vocational Computer Festival 2016
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    Our Biggest Event This Year!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    Presented by Himakomsi UGM
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="caption-box">
                            <div class="caption pd-bt-10 pd-lr-30 pull-right">
                                <h1>
                                    Make a Great Experience!
                                </h1>
                            </div>
                        </div>
                        <div class="caption-box">
                            <div class="subcap pd-bt-5 pd-lr-10 pull-right">
                                <h3>
                                    National Seminar And Competitions
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" style="padding : 40px 0px 15px 0px ;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wow animated fadeInUp">
                        <h3 class="text-center separator">
                            ABOUT HIMAKOMSI
                        </h3>
                        <hr class="bord greeny"/>
                    </div>
                    <div class="row wow animated fadeInDown">
                        <div class="col-md-4 pull-right">
                            <img src="assets/img/logo-hima.png" class="logo-med center-block pd-bt-20"/>
                        </div>
                        <div class="col-md-8 pd-bt-20 pull-right">
                            <p class="content">
                                HIMAKOMSI (Himpunan Mahasiswa Komputer dan Sistem Informasi) merupakan sebuah wadah bagi mahasiswa Komputer dan Sistem Informasi (KOMSI) yang ingin mengembangkan pengetahuannya dibidang organisasi. Himakomsi sendiri dibentuk pada tahun 2010, setelah berpisah dengan Himakom (Himpunan Mahasiswa Ilmu Komputer). Kegiatan Himakomsi UGM dituangkan dalam bentuk program-program kerja yang bertujuan mendukung Tri Dharma Perguruan Tinggi yang terdiri atas Pendidikan dan Pengajaran, Penelitian, dan Pengabdian kepada Masyarakat.
                            </p>
                            <p class="content">
                                Himakomsi memiliki 5 divisi, yaitu Event Organizer and Network (EON), Talent Entertainment and Art (TEA), Entrepreneurship (EPS), Administrasi Publikasi dan Advokasi (ADPA), dan Study Intra Scientica (SIS). Himakomsi berlokasi di Sekolah Vokasi UGM.
                            </p>
                            <p class="content">
                                Pada kesempatan kali ini Himakomsi menyelenggarakan Vocomfest.
                                <strong>
                                    Vocomfest (Vocational Computer Festival)
                                </strong>
                                merupakan serangkaian acara yang dilakasanakan oleh Himpunan Mahasiswa Komputer dan Sistem Informasi Sekolah Vokasi UGM yang bertujuan untuk mempersiapkan generasi penerus bangsa dalam menghadapi perkembangan teknologi yang semakin canggih.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="events" class="pd-bt-15">
        <div class="col-md-12">
            <div class="col-md-12 pd-bt-15 wow animated fadeInUp">
                <h3 class="text-center separator">
                    THE EVENTS
                </h3>
                <hr class="bord greeny"/>
            </div>
            <div class="row wow animated fadeInLeft">
                <div class="col-md-7 cvr-event">
                    <img src="assets/img/wdc_1.jpg" alt="Web Design Competition" title="Web Design Competition" class="img-event"/>
                </div>
                <div class="col-md-5 arrow-left">
                    <div class="col-md-7 pull-left">
                        <h3 class="text-left separator">
                            WEB DESIGN COMPETITION (WDC)
                        </h3>
                        <hr class="bord2-left greeny"/>
                    </div>
                    <div class="col-md-10 pull-left text-left">
                        <p class="content">
                            Web Design Competition 2015 merupakan kompetisi untuk para pengembang website di tingkat SMA/SMK sederajat. Dikarenakan melihat trend sekarang yang hamper disetiap aspek membutuhkan web sebagai sarana bersosialisasi dan berkomunikasi. Web Design Competition 2015 mengangkat tema
                            <strong>
                                “Bring Indonesia Tourism to The World”
                            </strong>
                            .
                        </p>
                        <p>
                            <a href="website.html" class="btn btn-learn">
                                Learn More
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row wow animated fadeInRight">
                <div class="col-md-7 pull-right cvr-event">
                    <img src="assets/img/madc_1.jpg" alt="Web Design Competition" title="Web Design Competition" class="img-event"/>
                </div>
                <div class="col-md-5 pull-right arrow-right">
                    <div class="col-md-9 pull-right">
                        <h3 class="text-right separator">
                            MOBILE APPS DEVELOPMENT COMPETITION (MADC)
                        </h3>
                        <hr class="bord2-right greeny"/>
                    </div>
                    <div class="col-md-10 pull-right text-right">
                        <p class="content">
                            Mobile Apps Dev Competition merupakan kompetisi berbasis platform android, tantangan yang diberikan kepada peserta adalah membuat aplikasi yang mampu membantu mengatasi permasalahan kehidupan sehari-hari untuk menjadi lebih baik. Melalui kompetisi ini, diharapkan dapat memberikan kontribusi dalam mencetak generasi baru pengembangan aplikasi.
                        </p>
                        <p>
                            <a href="madc.html" class="btn btn-learn">
                                Learn More
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row wow animated fadeInLeft">
                <div class="col-md-7 cvr-event">
                    <img src="assets/img/seminar_1.jpg" alt="Web Design Competition" title="Web Design Competition" class="img-event"/>
                </div>
                <div class="col-md-5 arrow-left">
                    <div class="col-md-7 pull-left">
                        <h3 class="text-left separator">
                            SEMINAR NASIONAL
                        </h3>
                        <hr class="bord2-left greeny"/>
                    </div>
                    <div class="col-md-10 pull-left text-left">
                        <p class="content">
                            Kegiatan ini merupakan serangkaian acara VOCOMFEST 2015 yang berbentuk Seminar Nasional yang bertemakan "Cloud Security and Big Data for Business Productivity". Kegiatan ini bertujuan untuk memberikan pemahaman terhadap big data dan cloud computing ...
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <a href="semnas.html" class="btn btn-learn">
                                Learn More
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wow animated fadeInUp">
                        <h3 class="text-center separator">
                            TIME SCHEDULE
                        </h3>
                        <hr class="bord greeny"/>
                    </div>
					<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol class="timelinee">
				
					<li><a href="#0" data-date="11/02/2016" class="selected">11 Feb</a></li>
					<li><a href="#0" data-date="10/03/2016">10 Mar</a></li>
					<li><a href="#0" data-date="20/03/2016">20 Mar</a></li>
					<li><a href="#0" data-date="21/03/2016">23 Mar</a></li>
					<li><a href="#0" data-date="27/03/2016">27 Mar</a></li>
					<li><a href="#0" data-date="28/03/2016">28 Mar</a></li>
					<li><a href="#0" data-date="31/03/2016">31 Mar</a></li>
					
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="11/02/2016">
				<h2>Registration Open!</h2>
				<em>February 10th, 2016</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="10/03/2016">
				<h2>Registration Closed!</h2>
				<em>March 10th, 2016</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>
			
			<li data-date="20/03/2016">
				<h2>Technical Meeting WDC</h2>
				<em>March 20th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="21/03/2016">
				<h2>Final Web Design Competition</h2>
				<em>March 20th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="27/03/2016">
				<h2>Technical Meeting MADC</h2>
				<em>May 20th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>
			
			<li data-date="28/03/2016">
				<h2>Final Mobile Apps Development Competition</h2>
				<em>May 20th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="31/03/2016">
				<h2>National Seminar</h2>
				<em>July 9th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>
		</ol>
	</div> <!-- .events-content -->
</section>
                </div>
            </div>
        </div>
    </section>
    <section id="testimoni" class="pd-bt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testi" class="owl-carousel">
                        <div>
                            <p class="text-center">
                                <img src="assets/img/pak-onno.jpg" class="img-testi"/>
                            </p>
                            <p class="text-center testi">
                                "Lorem Ipsum dolorsit amet ice cream is a very delicious thing I’ve ever eaten, it’s so soft, sweet, nice, cool, and I really love it. It’s just like my biggest dream come true bro. They treat me very well. Can’t wait to go there for the second time, I hope that they will remember me and treat me as good as they can do"
                            </p>
                            <p class="text-center testi">
                                - Onno W. Purbo, IT Master -
                            </p>
                        </div>
                        <div>
                            <p class="text-center">
                                <img src="assets/img/pak-wikan.jpg" class="img-testi"/>
                            </p>
                            <p class="text-center testi">
                                "Himakomsi merupakan himpunan mahasiswa yang kreatif, inovatif, berdedikasi, siap bekerja keras dalam setiap kegiatan yang dilakukan. Beberapa kegiatan yang sudah dilakukan menunjukan semangat muda yang selalu muncul dalam memperjuangkan keberhasilan kegiatan, sehingga mudah-mudahan hal ini bisa selalu dijaga dalam kegiatan kegiatan berikutnya."
                            </p>
                            <p class="text-center testi">
                                - Sigit Priyanta, Komsi Department Leader -
                            </p>
                        </div>
                        <div>
                            <p class="text-center">
                                <img src="assets/img/pak-onno.jpg" class="img-testi"/>
                            </p>
                            <p class="text-center testi">
                                Dengan semangat atitude serta kapabilitas mereka, acara atau kegiatan mereka mampu memuaskan pihak sponsor serta mampu membuktikan partisipasi stackholder untuk bekerja sama dengan Himakomsi. Saya mengajak semua pihak untuk didukung dalam belajar, berkreasi, dan berkarya untuk bangsa.
                            </p>
                            <p class="text-center testi">
                                - Wikan Sakarinto, Vocational School Vice President -
                            </p>
                        </div>
                        <div>
                            <p class="text-center">
                                <img src="assets/img/pak-wikan.jpg" class="img-testi"/>
                            </p>
                            <p class="text-center testi">
                                "Acara ini bagus, yang dateng banyak, pembicara juga bagus bagus ada bapak Ono, Bapak Andrias. Sering sering buat acara seperti ini, panitia bekerja dengan sangat profesional untuk ukuran mahasiswa seperti kalian. Saya sangat senang bekerja sama dengan Himakomsi."
                            </p>
                            <p class="text-center testi">
                                - Dondy Bappendiyanto, GM of PT Infinsys System Indonesia -
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sponsor" class="pd-bt-15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wow animated fadeInUp">
                        <h3 class="text-center separator">
                            OUR SPONSORS
                        </h3>
                        <hr class="bord greeny"/>
                    </div>
                    <div class="col-md-12 pd-bt-15 wow animated fadeInUp">
                        <img src="assets/img/bp1.png" class="sponsors"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section id="contact">
            <div class="cover-overlay2 pd-bt-15">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wow animated fadeInUp">
                                <h3 class="text-center separator-wh">
                                    GET IN TOUCH
                                </h3>
                                <hr class="bord whitey"/>
                            </div>
                            <div class="col-md-12 wow animated fadeInUp pd-bt-25">
                                <div class="col-md-5">
                                    <form role="form">
                                        <div class="form-group">
                                            <div class="col-md-12 pd-bt-5">
                                                <input type="text" class="form-control contact-form" id="name" name="name" placeholder="Your name"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 pd-bt-5">
                                                <input type="email" class="form-control contact-form" id="email" name="email" placeholder="Your email"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 pd-bt-5">
                                                <input type="text" class="form-control contact-form" id="subject" name="subject" placeholder="Subject"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 pd-bt-5">
                                                <textarea class="form-control msg contact-form" name="message" id="subject" placeholder="Your message">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 pd-bt-5">
                                                <input type="submit" value="SUBMIT" class="btn btn-contact"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 pd-bt-20">
                                    <div class="col-md-12">
                                        <div class="col-md-1 text-center">
                                            <i class="icon-light icon-map-marker icon-2x">
                                            </i>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="t-left contact-us">
                                                <span class="big strong">
                                                    Himakomsi UGM
                                                </span>
                                                <br/>
                                                Jalan Lorem Ipsum Dolorsit Amet
                                                <br/>
                                                Sleman, Daerah Istimewa Yogyakarta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-1 text-center">
                                            <i class="icon-light icon-phone icon-2x">
                                            </i>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="t-left contact-us">
                                                (+62)81234567890
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-1 text-center">
                                            <i class="icon-light icon-envelope-alt icon-2x">
                                            </i>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="t-left contact-us">
                                                info@vocomfest.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-11">
                                            <a href="http://facebook.com/vocomfest.ugm.9" target="_blank">
                                                <img class="social" src="assets/img/facebook.png" alt="Facebook" title="Facebook Page"/>
                                            </a>
                                            <a href="#">
                                                <img class="social" src="assets/img/googleplus.png" alt="Google Plus" title="Google Plus Account"/>
                                            </a>
                                            <a href="#">
                                                <img class="social" src="assets/img/youtube.png" alt="Youtube" title="Youtube Channel"/>
                                            </a>
                                            <a href="http://twitter.com/vocomfest" target="_blank">
                                                <img class="social" src="assets/img/twitter.png" alt="Twitter" title="Twitter Account"/>
                                            </a>
                                            <a href="#">
                                                <img class="social" src="assets/img/instagram.png" alt="Instagram" title="Instagram Account"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copy wow animated fadeInUp">
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
