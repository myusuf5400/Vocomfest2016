<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Controllers\Controller;
use App\Jobs\DownloadFileFromTransloadit;
use Auth;
use transloadit\Transloadit;

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
        if (Auth::user()->team->kategori == 0) {
            return view('user.akunWDC')
                ->with('user', Auth::user());
        } else {
            return view('user.akunMADC')
                ->with('user', Auth::user());
        }
    }

    public function getUploadProposal()
    {
        $config = $this->getTransloaditConfig();
        $server = $this->getServer();
        $auth   = config('services.transloadit')[$server];

        $form = [
            'server' => $server,
        ];

        $transloadit = new transloadit($auth);

        if (Auth::user()->team->kategori == 0) {
            return view('user.uploadFileWDC')
                ->with('transloadit', $transloadit->createAssemblyForm($config))
                ->with($form);
        } else {
            return view('user.uploadProposalMADC')
                ->with('transloadit', $transloadit->createAssemblyForm($config))
                ->with($form);
        }

    }

    public function redirectUpload()
    {
        $response = Transloadit::response();
        if ($response) {
            if (!empty($response->data['results'])) {
                $respon = $response->data['results']['upload'][0];

                $server = $response->data['fields']['server'];
                $tipe   = $response->data['fields']['tipe'];
                $file   = File::create([
                    'namafile' => $respon['name'],
                    'size'     => $respon['size'],
                    'url'      => $respon['url'],
                    'server'   => $server,
                    'status'   => 0,
                    'tipe'     => $tipe,
                ]);

                $job = $this->dispatch(new DownloadFileFromTransloadit($file));

                return redirect('/user/upload')
                    ->with('message', 'Upload file berhasil');

            } else {
                return redirect('/user/upload')
                    ->with('error', 'Upload gagal, silahkan cek kembali file anda');
            }

        }

        return redirect()
            ->away(Request::url());

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
            'attributes' => [
                'class' => 'form-horizontal',
            ],
            'params'     => [
                'steps'        => [
                    'upload' => [
                        'robot'   => '/file/filter',
                        'accepts' => [
                            ['${file.ext}', '=', 'zip'],
                            ['${file.ext}', '=', 'pdf'],
                            ['${file.ext}', '=', 'rar'],
                        ],
                    ],
                ],
                'redirect_url' => url('user/upload/redirect'),
            ],
        ];
    }
}
