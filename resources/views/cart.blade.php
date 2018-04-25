@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
		<div class="container">
		<div class="check-out">
		<h2>Ваши покупки</h2>
    	    <table >
		  <tr>
			<th>Продукт</th>
			<th>Размер</th>		
			<th>Цена</th>
			<th>Количество</th>
			<th>Сумма</th>
		  </tr>
@php $total = 0; @endphp		  
@if (!empty(session('cart.cloth')))			  
@foreach (range(0, count(session('cart.cloth')) - 1) as $i)		  
		  <tr>
			<td class="ring-in"><a style="width: 20%;" href="single.html" class="at-in"><img src="{{ asset(session('cart.cloth.' . $i)->picture) }}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>{{ session('cart.cloth.' . $i)->name }}</h5>
				<p>{{ session('cart.cloth.' . $i)->description }} </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check" style="text-align: center">{{ session('cart.size.' . $i) }}</td>		
			<td style="text-align: center">{{ session('cart.cloth.' . $i)->price }} грн.</td>
			<td style="text-align: center">{{ session('cart.number.' . $i) }}</td>
			<td style="text-align: center">{{ session('cart.cloth.' . $i)->price * session('cart.number.' . $i) }} грн.</td>
		  </tr>
{{ $total = $total + session('cart.cloth.' . $i)->price * session('cart.number.' . $i) }}
@endforeach
@endif

    <tr>
    <td style="text-align: center">Итого:</td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center">{{ $total }} грн.</td>
    </tr>
	</table>
	
<form action="{{ route('cart.booking') }}" method="post">
{{ csrf_field() }}
<p>Ваше имя: <input type="text" name="name" required></p>
<p>Укажите телефон для обратной связи в таком формате: <input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="066-111-11-11" required></p>
<br>
<p style="text-align: center"><input class=" hvr-shutter-in-horizontal" type="submit" value="Заказать"></p>
</form>	

{{-- Форма для отправки платежа --}}
@php
    //Секретный ключ інтернет-магазин
    $key = "31347774676335316d64483942544f5964747372504b5860615d4e";
 
    $fields = array(); 
 
    // Добавление полей формы в ассоциативный массив
    $fields["WMI_MERCHANT_ID"]    = "129015511317";
    $fields["WMI_PAYMENT_AMOUNT"] = $total;
    $fields["WMI_CURRENCY_ID"]    = "980";
    $fields["WMI_PAYMENT_NO"]     = "140";
    $fields["WMI_DESCRIPTION"]    = "BASE64:".base64_encode("Покупка в интернет-магазине");
    $fields["WMI_EXPIRED_DATE"]   = date('Y\-m\-d\TH\:i\:s', strtotime('+1 day'));
    $fields["WMI_SUCCESS_URL"]    = "http://ukrainian-clothes.kl.com.ua/success";
    $fields["WMI_FAIL_URL"]       = "http://ukrainian-clothes.kl.com.ua/fail.php";
    // $fields["MyShopParam1"]       = "Value1"; // Дополнительные параметры
    // $fields["MyShopParam2"]       = "Value2"; // интернет-магазина тоже участвуют
    // $fields["MyShopParam3"]       = "Value3"; // при формировании подписи!
    //Если требуется задать только определенные способы оплаты, раскоментируйте данную строку и перечислите требуемые способы оплаты.
    //$fields["WMI_PTENABLED"]      = array("UnistreamRUB", "SberbankRUB", "RussianPostRUB");
 
    //Сортировка значений внутри полей
    foreach($fields as $name => $val) 
    {
        if (is_array($val))
        {
            usort($val, "strcasecmp");
            $fields[$name] = $val;
        }
    }
 
    // Формирование сообщения, путем объединения значений формы, 
    // отсортированных по именам ключей в порядке возрастания.
    uksort($fields, "strcasecmp");
    $fieldValues = "";
 
    foreach($fields as $value) 
    {
        if(is_array($value))
            foreach($value as $v)
            {
                //Конвертация из текущей кодировки (UTF-8)
                //необходима только если кодировка магазина отлична от Windows-1251
                $v = iconv("utf-8", "windows-1251", $v);
                $fieldValues .= $v;
            }
        else
        {
            //Конвертация из текущей кодировки (UTF-8)
            //необходима только если кодировка магазина отлична от Windows-1251
            $value = iconv("utf-8", "windows-1251", $value);
            $fieldValues .= $value;
        }
    }
 
    // Формирование значения параметра WMI_SIGNATURE, путем 
    // вычисления отпечатка, сформированного выше сообщения, 
    // по алгоритму MD5 и представление его в Base64
 
    $signature = base64_encode(pack("H*", md5($fieldValues . $key)));
 
    //Добавление параметра WMI_SIGNATURE в словарь параметров формы
 
    $fields["WMI_SIGNATURE"] = $signature;
 
    // Формирование HTML-кода платежной формы
 
    print "<form action='https://wl.walletone.com/checkout/checkout/Index' method='POST' accept-charset='UTF-8'>";
 
    foreach($fields as $key => $val)
    {
        if(is_array($val))
            foreach($val as $value)
            {
                print "<input type='hidden' name='$key' value='$value'/>";
            }
        else     
            print "<input type='hidden' name='$key' value='$val'/>";
    }
 
    print "<p style='text-align: center'><input class=' hvr-shutter-in-horizontal' type='submit' value='Оплатить'></p></form>";
@endphp

	<div class="clearfix"> </div>
    	</div>
</div>

@endsection
