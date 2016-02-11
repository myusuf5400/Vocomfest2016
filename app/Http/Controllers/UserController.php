<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Controllers\Controller;
use Auth;
use transloadit\Transloadit;
use App\Jobs\DownloadFileFromTransloadit;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    public function getAkun()
    {
        return view('user.akun')
            ->with('user', Auth::user());
    }

    public function getUploadProposal()
    {
        $config = $this->getTransloaditConfig();
        $server = $this->getServer();
        $auth   = config('services.transloadit')[$server];

        $form = [
            'server' => $server,
            'tipe'   => 1,
        ];

        $transloadit = new transloadit($auth);

        return view('user.uploadProposal')
            ->with('transloadit', $transloadit->createAssemblyForm($config))
            ->with($form);
    }

    public function redirectUpload()
    {
        $respon = Transloadit::response()->data['results']['upload'][0];
        $server = Transloadit::response()->data['fields']['server'];
        $tipe   = Transloadit::response()->data['fields']['tipe'];
        $file = File::create([
            'namafile' => $respon['name'],
            'size'     => $respon['size'],
            'url'      => $respon['url'],
            'server'   => $server,
            'status'   => 0,
            'tipe'     => $tipe,
        ]);
        
        $job = $this->dispatch(new DownloadFileFromTransloadit($file));

        return redirect('user');
    }

    public function getUpload()
    {
        $config = $this->getTransloaditConfig();
        $server = $this->getServer();
        $auth   = config('services.transloadit')[$server];

        $transloadit = new transloadit($auth);

        return view('user.upload')
            ->with('transloadit', $transloadit->createAssemblyForm($config))
            ->with('server', $server);
    }

    public function getServer()
    {
        $server = 0;
        while (File::where('server', '=', $server)->sum('size') >= 1500000000) {
            $server++;
        }

        return $server;

    }

    public function getTransloaditConfig()
    {
        return [
            'params' => [
                'steps'        => [
                    'upload' => [
                        'robot' => '/file/filter',
                    ],
                ],
                'redirect_url' => 'http://vocomfest.io/user/upload/redirect',
            ],
        ];
    }
}
