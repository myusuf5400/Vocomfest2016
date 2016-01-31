@extends('welcome')
@section('navbar')
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
                                <a href="register">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href="login">
                                    LOGIN
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @endsection