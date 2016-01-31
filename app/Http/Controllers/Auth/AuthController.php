<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Mail;
use Validator;

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

        if ($data['kategori'] == 0) {
            $max = 2;
        } else {
            $max = 3;
        }

        $anggota = $data['anggota'];

        for ($i = 0; $i <= $max; $i++) {
            if ($anggota[$i]['nama'] != null) {
                User::create([
                    'nama'   => $anggota[$i]['nama'],
                    'email'  => $anggota[$i]['email'],
                    'notelp' => $anggota[$i]['notelp'],
                    'idteam' => $team['id'],
                ]);
            } else {
                $i = $max;
            }
        }

        $user = User::create([
            'nama'     => $data['namaketua'],
            'email'    => $data['emailketua'],
            'password' => bcrypt($data['password']),
            'notelp'   => $data['notelp'],
            'code'     => str_random(30),
            'idteam'   => $team['id'],
        ]);

        $user['kategori'] = $data['kategori'];

        return $user;

    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if ($user = $this->create($request->all())) {
            $config['subject'] = "Aktivasi Email";
            if ($user['kategori'] == 0) {
                $config['email'] = "wdc@vocomfest.com";
                $config['nama']  = "Registrasi WDC";
            } else {
                $config['email'] = "madc@vocomfest.com";
                $config['nama']  = "Registrasi MADC";
            }

            Mail::send('emails.activateAccount', ['code' => $user['code']], function ($message) use ($config, $user) {
                $message->from($config['email'], $config['nama']);
                $message->subject($config['subject']);
                $message->to($user['email']);
            });
        }

        return redirect("/login");
    }

    public function activateAccount($code)
    {
        if (strlen($code) != 30) {
            return "Activate code sadlah";
        }

        if (User::accountIsActive($code)) {
            return Redirect::route('login');
        }

        return "Error";
    }
}
