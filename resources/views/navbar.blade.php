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
							@if(Auth::guest())
								<li>
									<a href="{{url('/register')}}">
										REGISTER
									</a>
								</li>
								<li>
									<a href="{{url('/login')}}">
										LOGIN
									</a>
								</li>
							@else
								<li><a href="#">PROFILE</a></li>
								<li>
									<a href="{{url('/logout')}}">
										LOGOUT
									</a>
								</li>
							@endif
                        </ul>
                    </div>
                </div>
            </nav>