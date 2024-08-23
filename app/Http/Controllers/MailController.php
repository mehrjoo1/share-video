<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailController extends Controller
{
    public function test(){
        try {
            $emaolAddress = 'he@gmail.com';
            $welcomeMassage = 'test sen email';
            Mail::to($emaolAddress)->send(new VerifyEmail($welcomeMassage));
            echo 'Email sent successfully';
        } catch (TransportExceptionInterface $e) {
            echo 'Failed to send email: ' . $e->getMessage();
        }
    }
}
