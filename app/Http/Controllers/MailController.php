<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function sendEmail()
    {
        $data = [];

        Mail::send('emails.example', $data, function ($message) {
            $message->from('jack@example.com', 'Laravel');

            $message->to('myusuf5400@gmail.com');
        });
        echo "Mail send";
    }
}
