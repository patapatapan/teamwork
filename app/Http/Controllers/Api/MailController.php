<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->all();

        //Laravel Mail 使用方法可參考：https://laravel.com/docs/5.1/mail#sending-mail
        Mail::send('email.mail', $data, function ($message) use ($data) {
            $message->from(env('MAIL_USERNAME', 'teamwork.lily@gmail.com'), $data['name']);
            $message->to(env('MAIL_SUPPORT', 'teamwork.lily@gmail.com'))->subject('Feedback Mail');
        });
        return "success";
    }
}
