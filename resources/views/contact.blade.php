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
                        <div class="col-md-6">
                            <form role="form" action="{{url('send')}}" method="POST">
                            {!! csrf_field() !!}
                                <div class="form-group">
                                    <div class="col-md-12 pd-bt-5">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 pd-bt-5">
                                        <input type="text" class="form-control contact-form" id="name" name="nama" placeholder="Your name" value="{{old('nama')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 pd-bt-5">
                                        <input type="email" class="form-control contact-form" id="email" name="email" placeholder="Your email" value="{{old('email')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 pd-bt-5">
                                        <input type="text" class="form-control contact-form" id="subject" name="subject" placeholder="Subject" value="{{old('subject')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 pd-bt-5">
                                        <textarea class="form-control msg contact-form" name="message" id="subject" placeholder="Your message">{{old('message')}}</textarea>
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
                                                Gedung SV UGM, Sekip Unit 1,
                                                <br/>
                                                Catur Tunggal, Depok,
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
                                                (+62)89639704303
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
                                    <div class="col-md-12 social-center">
                                        <div class="col-md-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-11">
                                            <a href="http://facebook.com/vocomfest" target="_blank">
                                                <img class="social" src="assets/img/facebook.png" alt="Facebook" title="Facebook Page"/>
                                            </a>
                                            <a href="http://twitter.com/vocomfest" target="_blank">
                                                <img class="social" src="assets/img/twitter.png" alt="Twitter" title="Twitter Account"/>
                                            </a>
                                            <a href="https://www.instagram.com/vocomfest/">
                                                <img class="social" src="assets/img/instagram.png" alt="Instagram" title="Instagram Account"/>
                                            </a>
                                            <a href="http://line.me/ti/p/~@ipe9770i">
                                                <img class="social" src="assets/img/line.png" alt="Line" title="Line Account"/>
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