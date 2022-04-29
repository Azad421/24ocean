<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\SingUpMail;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendSignUpEmail($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new SingUpMail($data));
    }
    public static function ContactMail($name, $email, $message){
        $data = [
            'email' => $email,
            'name' => $name,
            'message' => $message
        ];
        Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));
    }
//    public static function sendEmail($name, $email, $verification_code){
//        $data = [
//            'name' => $name,
//            'verification_code' => $verification_code,
//            'email' => $email,
//        ];
//        Mail::to($email)->send(new VerifyEmail($data));
//    }
}
