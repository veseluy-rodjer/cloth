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
<form action="{{ route('update', [$edit->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<p>Введите название категории: <textarea rows="3" cols="45" wrap="soft" name="category" required>{{ $edit->category }}</textarea></p>
<p><input type="submit"></p>
</form>

@endsection
