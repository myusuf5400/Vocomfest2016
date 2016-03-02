<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Auth;
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
            // 'username'               => 'required|max:60|unique:users',
            'password'               => 'required|confirmed|min:6',
            'password_confirmation ' => '',
            'kategori'               => 'required',
            'namateam'               => 'required|max:60|unique:teams',
            'instansi'               => 'required|max:60',
            'alamatinstansi'         => 'required|max:60',
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
            'instansi'       => $data['instansi'],
            'alamatinstansi' => $data['alamatinstansi'],
        ]);

        $team = Team::where('namateam', $data['namateam'])->first();

        if ($data['kategori'] == 0) {
            $max   = 2;
            $level = 0;
        } else {
            $max   = 3;
            $level = 0;
        }

        if (isset($data['anggota'])) {
            $max     = (count($data['anggota']) > $max) ? $max : count($data['anggota']);
            $anggota = $data['anggota'];
            for ($i = 0; $i < $max; $i++) {

                User::create([
                    'nama'   => $anggota[$i]['nama'],
                    'email'  => $anggota[$i]['email'],
                    'notelp' => '62' . $anggota[$i]['notelp'],
                    'idteam' => $team['id'],
                ]);
            }
        }

        $user = User::create([
            'nama'     => $data['namaketua'],
            'email'    => $data['emailketua'],
            'password' => bcrypt($data['password']),
            'notelp'   => '62' . $data['notelp'],
            'code'     => str_random(30),
            'level'    => $level,
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

            $this->sendEmail($user);
        }

        return redirect('/register/success')
            ->with('message', 'Tim anda telah terdaftar, silahkan verifikasi email dengan dengan mengakses alamat yang sudah dikirim ke ' . $user['email'] . ' maksimal 2x24 Jam');

    }

    public function getMessagaPage()
    {
        if (session('message')) {
            return view('auth.message');
        }

        return redirect($this->redirectTo);
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
                    return redirect('/register')
                        ->with('error', 'Kode aktivasi sudah tidak berlaku, silahkan registrasi ulang!');
                }

                $user->code = 1;
               	if ($user->save()) {
                    if ($user->team->kategori == 0) {
                        return redirect('/register/success')
                        ->with('message', 'Email anda sudah terverifikasi, silahkan mengirimkan bukti pembayaran dan scan kartu pelajar maksimal 1 minggu ke wdc@vocomfest.com atau tim akan di hapus.'); 
                    }else{
                        return redirect('/register/success')
                            ->with('message', 'Email anda sudah terverifikasi, silahkan mengirimkan scan KTM ke madc@vocomfest.com untuk bisa login.');
                    }  
                }
            }
        }
        return redirect('/register')
            ->with('error', 'Kode aktivasi salah');
    }

    public function sendEmail(User $user)
    {

        $config['subject'] = "Aktivasi Email";
        if ($user['kategori'] == 0) {
            $config['email'] = "wdc@vocomfest.com";
            $config['nama']  = "Registrasi WDC";
        } else {
            $config['email'] = "madc@vocomfest.com";
            $config['nama']  = "Registrasi MADC";
        }

        $content = [
            'code' => $user['code'],
        ];

        Mail::queue('emails.activateAccount', $content, function ($message) use ($config, $user) {
            $message->from($config['email'], $config['nama']);
            $message->subject($config['subject']);
            $message->to($user['email']);
        });
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if (Auth::user()->code != 1) {
        	
            Auth::logout();
 		
            return redirect()
                ->back()
                ->with('error','Email belum terverifikasi');
        }
        
        if (Auth::user()->level == 0) {
            $error;

            if(Auth::user()->team->kategori==0){
                $error =  'Maaf, tim belum terverifikasi <br/>Silahkan mengirimkan bukti pembayaran dan scan kartu pelajar ke wdc@vocomfest.com';
            }else{
                $error =  'Maaf, tim belum terverifikasi <br/>Silahkan mengirimkan scan KTM ke madc@vocomfest.com ';
            }
            Auth::logout();
            return redirect()
                ->back()
                ->with('error',$error);
        }

        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }

        return redirect()->intended($this->redirectPath());
    }
}