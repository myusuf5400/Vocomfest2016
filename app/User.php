<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'notelp', 'code', 'idteam', 'level',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accountIsActive($code)
    {
        $user = User::where('code', '=', $code)->first();
        if ($user) {
            $user->code = 1;
            if ($user->save()) {
                \Auth::login($user);
                return true;
            }
        }

        return false;
    }
}
