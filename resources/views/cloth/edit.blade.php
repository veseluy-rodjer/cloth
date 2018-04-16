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
<img src="{{ asset($edit->picture) }}" width="30%" alt="">
<form action="{{  route('cloth.delPicture', [$edit->id])  }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить фото"></p>
</form>
<form enctype="multipart/form-data" action="{{ route('cloth.update', [$edit->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<p><input type="hidden" name="MAX_FILE_SIZE" value="9024000"></p>
<p>Загрузить фото: <input name="picture" type="file" accept="image/*"></p>
<p>Наименование: <textarea rows="3" cols="45" wrap="soft" name="name" required>{{ $edit->name }}</textarea></p>
<p>Описание: <textarea rows="10" cols="45" wrap="soft" name="description" required>{{ $edit->description }}</textarea></p>
<p>Цена: <input type="number" name="price" min="0" step="0.01" value="{{ $edit->price }}" required></p>
<p>Количество: </p>
<p>S: <input type="number" name="s" min="0" step="1"  value="{{ $edit->s }}"></p>
<p>M: <input type="number" name="m" min="0" step="1"  value="{{ $edit->m }}"></p>
<p>L: <input type="number" name="l" min="0" step="1"  value="{{ $edit->l }}"></p>
<p>XL: <input type="number" name="xl" min="0" step="1"  value="{{ $edit->xl }}"></p>
<p>XXL: <input type="number" name="xxl" min="0" step="1"  value="{{ $edit->xxl }}"></p>
<p><input type="submit"></p>
</form>

@endsection
