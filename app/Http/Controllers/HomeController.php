<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsDataRequest;
use Mail;
use \Swift_Mailer;
use \Swift_SmtpTransport as SmtpTransport;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendEmail()
    {
        // Backup your default mailer
        $backup = Mail::getSwiftMailer();
		// Setup your gmail mailer
        $transport = SmtpTransport::newInstance('rongkop.idwebhost.com', 465, 'ssl');
        $transport‐>setUsername('admin@vocomfest.com');
        $transport‐>setPassword('.DzLVfbIhfnb');
		// Any other mailer configuration stuff needed...
        $gmail = new Swift_Mailer($transport);
		// Set the mailer as gmail
        Mail::setSwiftMailer($gmail);
		// Send your message
		$config['subject'] = "Aktivasi Email";
        $config['email'] = "wdc@vocomfest.com";
        $config['nama']  = "Registrasi WDC";
        Mail::send('emails.activateAccount', ['code' => "dsd"], function ($message) use ($config) {
            $message->from($config['email'], $config['nama']);
            $message->subject($config['subject']);
            $message->to('admin@vocomfest.com');
        });
		// Restore your original mailer
        Mail::setSwiftMailer($backup);
    }

}
