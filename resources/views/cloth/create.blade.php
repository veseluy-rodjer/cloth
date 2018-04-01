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
<form enctype="multipart/form-data" action="{{  route('cloth.store', [$id])  }}" method="post">
{{ csrf_field() }}
<p><input type="hidden" name="MAX_FILE_SIZE" value="9024000"></p>
<p>Загрузить фото: <input name="picture" type="file" accept="image/*"></p>
<p>Наименование: <textarea rows="3" cols="45" wrap="soft" name="name" required></textarea></p>
<p>Описание: <textarea rows="10" cols="45" wrap="soft" name="description" required></textarea></p>
<p><input type="submit"></p>
</form>

@endsection
