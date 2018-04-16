<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBooking;
use App\Cloth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Cloth::edit($id);
        if (session()->exists('cart') === false) {
            session(['cart' => []]);
        }
        session()->push('cart', $item);
        return response(session('cart'));
    }

    public function booking(StoreBooking $request, $id)
    {
        $item = Cloth::edit($id);
        $subject = 'Заказ';
        $message = 'Id: ' . $id . 'Наименование: ' . $item->name . 'Размер: ' . $request->size . 'Количество: ' . $request->number;
        $message = wordwrap($message, 70, "\r\n");
        $headers = 'From: nikolay@nikolay.kl.com.ua' . "\r\n";
        if (mail('mukataev@gmail.com', $subject, $message, $headers)) {
            $report = 'Ваше письмо успешно отправлено';
        }
        else {
            $report = 'Неудалось отправить письмо, что-то не так...';
        }        
        $date = ['title' => 'Отчет о доставке', 'report' => $report];
        return view('report', $date);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
