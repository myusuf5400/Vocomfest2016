<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function index()
    {
        return view('home');
    }

    public function getUpload()
    {
        $config = $this->getTransloaditConfig();

        return view('upload')
            ->with('transloadit', $this->preUpload()->createAssemblyForm($config));
    }

    public function doUpload(Request $request){
        return print_r($request);
    }

    public function preUpload()
    {
        $auth   = $this->getTransloaditKey()[0];
       

        $transloadit = new transloadit($auth);

        return $transloadit;
    }

    public function getTransloaditKey()
    {
        return [
            [
                'key'    => '346447c0be4b11e58822ad144396c0a2',
                'secret' => '184c2bd432dca7a9c32d9b4907e939dd281ca58c',
            ],
        ];
    }

    public function getTransloaditConfig()
    {
        return [
            'params' => [
                'steps' => [
                    'upload' => [
                        'robot' => '/file/filter',
                    ]
                ],
                'notify_url' => 'http://vocomfest.io/user/upload',
                'redirect_url'=> 'http://vocomfest.io/user/upload'
            ],
        ];
    }
}
