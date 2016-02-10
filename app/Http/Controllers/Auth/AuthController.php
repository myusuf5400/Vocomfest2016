<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Mail;
use Response;
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
    protected $username   = 'email';

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
            'notelp'                 => 'required|max:12|unique:users',
            'username'               => 'required|max:60|unique:users',
            'password'               => 'required|confirmed|min:6',
            'password_confirmation ' => '',
            'kategori'               => 'required',
            'namateam'               => 'required|max:60|unique:teams',
            // 'instansi'               => 'required|max:60',
            // 'alamatinstansi'         => 'required|max:60',
            'anggota.0.nama'         => 'max:60',
            'anggota.0.email'        => 'email|max:60|unique:users,email|required_with:anggota.0.nama',
            'anggota.0.notelp'       => 'max:12|unique:users,notelp|required_with:anggota.0.email',
            'anggota.1.nama'         => 'max:60',
            'anggota.1.email'        => 'email|max:60|unique:users,email|required_with:anggota.1.nama',
            'anggota.1.notelp'       => 'max:12|unique:users,notelp|required_with:anggota.1.email',
            'anggota.2.nama'         => 'max:60',
            'anggota.2.email'        => 'email|max:60|unique:users,email|required_with:anggota.2.nama',
            'anggota.2.notelp'       => 'max:12|unique:users,notelp|required_with:anggota.2.email',
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
            'namateam'       => $data['namateam'],
            'kategori'       => $data['kategori'],
            // 'instansi'       => $data['instansi'],
            // 'alamatinstansi' => $data['alamatinstansi'],
        ]);

        $team = Team::where('namateam', $data['namateam'])->first();

        if ($data['kategori'] == 0) {
            $max   = 1;
            $level = 0;
        } else {
            $max   = 2;
            $level = 1;
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
            'username' => $data['username'],
            'email'    => $data['emailketua'],
            'password' => bcrypt($data['password']),
            'notelp'   => $data['notelp'],
            'code'     => str_random(30),
            'level'    => $level,
            'idteam'   => $team['id'],
        ]);

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

            $this->sendEmail($user);
        }

        return redirect('/login');
    }

    public function activateAccount($code)
    {
        if (strlen($code) == 30) {

            $user = User::where('code', '=', $code)->first();

            if ($user) {
                $now     = time();
                $expired = date(strtotime('+2 day' . $user->created_at));

                if ($now > $expired) {
                    User::where('idteam', '=', $user->idteam)->delete();
                    Team::where('id', '=', $user->idteam)->delete();
                    return redirect('register')
                        ->with('message', 'Kode aktivasi sudah tidak berlaku, silahkan registrasi ulang!');
                }

                $user->code = 1;
                if ($user->save()) {
                    if ($user->level == 1) {
                        return redirect('/login')
                            ->with('message', 'Akun sudah teraktivasi, silahkan login');
                    }
                    return redirect('/')
                        ->with('message', 'Email sudah teraktivasi');
                }
            }
        }
        return redirect('/')
            ->with('message', 'Kode aktivasi salah');
    }

    public function sendEmail(User $user)
    {

        $config['subject'] = "Aktivasi Email";
        if ($user->team->kategori == 0) {
            $config['email'] = "wdc@vocomfest.com";
            $config['nama']  = "Registrasi WDC";
        } else {
            $config['email'] = "madc@vocomfest.com";
            $config['nama']  = "Registrasi MADC";
        }

        $content = [
            'code' => $user['code'],
            'logo' => public_path().'/assets/img/logo.png',
        ];

        Mail::queue('emails.activateAccount', $content, function ($message) use ($config, $user) {
            $message->from($config['email'], $config['nama']);
            $message->subject($config['subject']);
            $message->to($user['email']);
        });
    }
}
