@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<body class="login">
    <div class="se-pre-con">
    </div>
    <div class="container">
        <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->
                    all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="text" name="code" value="0" style="visibility:hidden"/>
            <div class="form-signin-heading" style="text-align:center;">
                <img src="assets/img/logo.png" class="logo-big"/>
            </div>
            <br/>
            <h4 class="form-signin-heading">
                Login to Vocomfest
            </h4>
            <label for="inputUsername" class="sr-only">
                Username
            </label>
            <input type="text" name="email" id="inputUsername" class="form-control" placeholder="Username" required="required" autofocus/>
            <label for="inputPassword" class="sr-only">
                Password
            </label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"/>
            <label for="inputPassword" class="sr-only">
                Category
            </label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"/>
                    Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block btn-login" type="submit">
                LOG IN
            </button>
            <p class="text-center">
                Don't have account?
                <a href="{{url('/register')}}">
                    Register!
                </a>
                or
                <a href="{{url('/')}}">
                    back to home?
                </a>
            </p>
        </form>
    </div>
    @endsection
