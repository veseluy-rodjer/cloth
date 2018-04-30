<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;

class ContactController extends Controller
{

    public function index()
    {
        $date = ['title' => 'Контакты'];
        return view('contact', $date);
    }
    
    public function store(StoreContact $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $message = wordwrap($message, 70, "\r\n");
        $headers = 'From: nikolay@ukrainian-clothes.kl.com.ua' . "\r\n" . $email . "\r\n";
        if (mail('mukataev@gmail.com', $subject, $message, $headers)) {
            $report = 'Ваше письмо успешно отправлено';
        }
        else {
            $report = 'Неудалось отправить письмо, что-то не так...';
        }        
        $date = ['title' => 'Сайты-визитки. Контакты', 'report' => $report];
        return view('report', $date);
    }
}
