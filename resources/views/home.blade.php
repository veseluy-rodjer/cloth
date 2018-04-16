@extends('layouts.app')

@section('content')
<div class="container">
    <p style="text-align:right; font-weight:700"><a href="{{ route('create') }}" >Добавить категорию</a></p>

@foreach($listing as $i)
@php $n = 0; @endphp
{{ $i->category }}
<a href="{{ route('edit', [$i->id]) }}" >&#160;&#160;Переименовать категорию</a>
<form action="{{ route('destroy', [$i->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить категорию"></p>
</form>
<a href="{{ route('cloth.create', [$i->id]) }}" >&#160;&#160;Внести продукт в категорию</a>
<table>
    <tr><th>№</th><th>Фото</th><th>Наименование</th><th>Описание</th>><th>Цена</th><th>s</th><th>m</th><th>l</th><th>xl</th><th>xxl</th><th>Редактировать</th><th>Удалить</th></tr>
    
    @foreach($i->clothes as $y)
        <tr>
        <td style="width: 5%;">{{ $n += 1 }}</td>
        <td style="width: 15%;"><img src="{{ asset($y->picture) }}" width="100%" alt=""></td>
        <td style="width: 10%;"><p>{{ $y->name }}</p></td>
        <td style="width: 20%;"><p>{{ $y->description }}</p></td>
        <td style="width: 5%;"><p>{{ $y->price }}</p></td>
        <td style="width: 5%;"><p>{{ $y->s }}</p></td>
        <td style="width: 5%;"><p>{{ $y->m }}</p></td>
        <td style="width: 5%;"><p>{{ $y->l }}</p></td>
        <td style="width: 5%;"><p>{{ $y->xl }}</p></td>
        <td style="width: 5%;"><p>{{ $y->xxl }}</p></td>
        <td style="width: 10%;"><a href="{{ route('cloth.edit', [$y->id]) }}" >Редактировать</a></td>
        <td style="width: 10%;">
<form action="{{ route('cloth.destroy', [$y->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить"></p>
</form>        
        </td>
        </tr>        
    @endforeach
    
</table>
@endforeach

</div>

@endsection
