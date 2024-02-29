<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Flash;
use Response;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use Illuminate\Support\Facades\Input;

class PushNotifController extends Controller
{
    public function home()
    {
    	return view('push_notification.home');
    }

    public function sendEmail()
    {
        // Variable data ini yang berupa array ini akan bisa diakses di dalam "view".

        $data = ['from' => 'no-reply@skill-link.net',
                'to' => \Request::get('to'), 
                'subject' => \Request::get('subject') ];
     
        // "emails.hello" adalah nama view.
        Mail::send('push_notification.content', $data, function ($mail)
        {
          // Email dikirimkan ke address "momo@deviluke.com" 
          // dengan nama penerima "Momo Velia Deviluke"
          $mail->from('no-reply@skill-link.net', 'Skill Link');
          $mail->to(\Request::get('to'));
     
          // Copy carbon dikirimkan ke address "haruna@sairenji" 
          // dengan nama penerima "Haruna Sairenji"
          //$mail->cc('dangridho17@gmail.com', 'Haruna Sairenji');
     
          $mail->subject(\Request::get('subject'));
        });

      Flash::success('Image saved failed.');
    	return view('push_notification.home');
    }
}
