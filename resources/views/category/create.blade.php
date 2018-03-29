@extends('layouts/template')
@section('content')

<div class="banner banner-in">
</div>

<br>
<br>
<br>
<br>
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form action="{{ route('store') }}" method="post">
{{ csrf_field() }}
<p>Введите название категории: <textarea rows="3" cols="45" wrap="soft" name="category" required></textarea></p>
<p><input type="submit"></p>
</form>

@endsection
