<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBooking;
use App\Http\Requests\StoreTel;
use App\Cloth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkId')->except('index', 'create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = ['title' => 'Карта заказа'];
        return view('cart', $date);
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
    public function update(StoreBooking $request, $id)
    {
        $item = Cloth::edit($id);
        session()->push('cart.cloth', $item);
        session()->push('cart.size', $request->size);
        session()->push('cart.number', $request->number);
        return redirect(session('oldUrl'));
    }

    public function booking(StoreTel $request)
    {
        $subject = 'Заказ';
        $message = [];
        if (!empty(session('cart.cloth'))) {
            foreach (range(0, count(session('cart.cloth')) - 1) as $i) {
                $message[] = wordwrap('Наименование: ' . session('cart.cloth.' . $i)->name . 'Размер: ' . session('cart.size.' . $i) . 'Количество: ' . session('cart.number.' . $i) . 'Телефон: ' . $request->tel, 70, "\r\n");
            }
        }
        $message = implode($message);
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
    public function destroy($i)
    {
        session()->forget('cart.cloth.' . $i);
        session()->forget('cart.size.' . $i);
        session()->forget('cart.number.' . $i);
        $arrayCloth = array_values(session('cart.cloth'));
        $arraySize = array_values(session('cart.size'));
        $arrayNumber = array_values(session('cart.number'));
        session(['cart.cloth' => $arrayCloth, 'cart.size' => $arraySize, 'cart.number' => $arrayNumber]);
        return back();
    }
}
