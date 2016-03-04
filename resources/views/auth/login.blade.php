@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<body class="login">
    <div class="se-pre-con">
    </div>
    <div class="container">
        <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <input type="text" name="code" value="0" style="visibility:hidden"/>
            <div class="form-signin-heading" style="text-align:center;">
                <img src="assets/img/logo.png" class="logo-big"/>
            </div>
            @if (session('error'))
                                    <br/>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{!!session('error')!!}</li> 
                                        </ul>
                                    </div>
                                @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h4 class="form-signin-heading">
                Login to Vocomfest
            </h4>
            <label for="inputEmail" class="sr-only">
                Email
            </label>
            <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Ketua" required autofocus value="{{old('email')}}" />
            <label for="inputPassword" class="sr-only">
                Password
            </label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required/>
            <label for="inputPassword" class="sr-only">
                Category
            </label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" @if(old('remember')) checked @endif />
                    Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block btn-login" type="submit">
                LOG IN
            </button>
            <p class="text-center">
                Forgot password?
                <a href="{{url('/password/reset')}}">
                    Click here!
                </a>
            </p>
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
