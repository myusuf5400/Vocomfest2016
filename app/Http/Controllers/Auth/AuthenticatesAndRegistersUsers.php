<?php

namespace App\Http\Controllers\Auth;

trait AuthenticatesAndRegistersUsers
{
    use AuthenticatesUsers, \Illuminate\Foundation\Auth\RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof \Illuminate\Foundation\Auth\RegistersUsers;
        AuthenticatesUsers::getGuard insteadof \Illuminate\Foundation\Auth\RegistersUsers;
    }
}
