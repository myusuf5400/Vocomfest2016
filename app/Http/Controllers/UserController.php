<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Controllers\Controller;
use Auth;
use transloadit\Transloadit;
use App\Http\Requests\UploadImageRequest;


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

    public function getImageUpload()
    {
        return view('user.imageUpload');
    }

    public function postImageUpload(UploadImageRequest $request)
    {
        $image = $request->file('image');

        $nameImage = time().'.'.$image->getClientOriginalExtension();

        $nameImage = $image->move(storage_path().'/image',$nameImage);

        $team = Auth::user()->team;

        $team->imgteam = $nameImage;
        $team->save();

        return redirect()->back();
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

    public function redirectUpload()
    {
        $respon = Transloadit::response()->data['results']['upload'][0];
        $server = Transloadit::response()->data['fields']['server'];
        File::create([
            'namafile' => $respon['name'],
            'size'     => $respon['size'],
            'url'      => $respon['url'],
            'server'   => $server,
            'status'   => 0,
        ]);
        return redirect('user');
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
