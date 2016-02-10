<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailPostRequest;
use Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function sendEmail(SendEmailPostRequest $data)
    {
        $config = [
            'email'   => $data['email'],
            'nama'    => $data['nama'],
            'subject' => $data['subject'],
        ];
        Mail::queue('emails.contact', ['data' => $data['message']], function ($message) use ($config) {
            $message->from($config['email'], $config['nama']);
            $message->subject($config['subject']);
            $message->to('info@vocomfest.com');
        });

        return redirect('/');
    }

}
