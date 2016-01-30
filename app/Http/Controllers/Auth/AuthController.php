<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Validator;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
     */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namaketua'              => 'required|max:60',
            'emailketua'             => 'required|email|max:60|unique:users,email',
            'notelp'                 => 'required|max:14|unique:users',
            'password'               => 'required|confirmed|min:6',
            'password_confirmation ' => 'min:6',
            'kategori'               => 'required',
            'namateam'               => 'required|max:60|unique:teams',
            'institusi'              => 'required|max:60',
            'anggota.0.nama'         => 'max:60',
            'anggota.0.email'        => 'email|max:60|unique:users,email|required_with:anggota.0.nama',
            'anggota.0.notelp'       => 'max:14|unique:users,notelp|required_with:anggota.0.nama,anggota.0.email',
            'anggota.1.nama'         => 'max:60',
            'anggota.1.email'        => 'email|max:60|unique:users,email|required_with:anggota.1.nama',
            'anggota.1.notelp'       => 'max:14|unique:users,notelp|required_with:anggota.1.nama,anggota.1.email',
            'anggota.2.nama'         => 'max:60',
            'anggota.2.email'        => 'email|max:60|unique:users,email|required_with:anggota.2.nama',
            'anggota.2.notelp'       => 'max:14|unique:users,notelp|required_with:anggota.2.nama,anggota.2.email',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Team::create([
            'namateam'  => $data['namateam'],
            'kategori'  => $data['kategori'],
            'institusi' => $data['institusi'],
        ]);

        $team = Team::where('namateam', $data['namateam'])->first();

        if($data['kategori']==0){
            $max = 2;
        }else{
            $max = 3;
        }

        $anggota = $data['anggota'];

        for ($i=0; $i <= $max; $i++) {
            if ($anggota[$i]['nama'] != null) {
                User::create([
                    'nama'   => $anggota[$i]['nama'],
                    'email'  => $anggota[$i]['email'],
                    'notelp' => $anggota[$i]['notelp'],
                    'idteam' => $team['id'],
                ]);
            }else{
                $i = $max;
            }
        }

        return User::create([
            'nama'     => $data['namaketua'],
            'email'    => $data['emailketua'],
            'password' => bcrypt($data['password']),
            'notelp'   => $data['notelp'],
            'code'     => str_random(30),
            'idteam'   => $team['id'],
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required', 'code' => 'required'
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        //Menambahkan kondisi di login yaitu status
        
        $credentials['code'] = 1;       

        if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        print_r(Auth::guard($this->getGuard())->getLastAttempted());
    }
}
