<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{

    public function pay()
    {
        $date = ['title' => 'Оплата'];
        return view('pay', $date);
    }

    public function success()
    {
        $date = ['title' => 'Оплата'];
        return view('success', $date);
    }
    
    public function fail()
    {
        $date = ['title' => 'Оплата'];
        return view('fail', $date);
    }
}
