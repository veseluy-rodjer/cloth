@extends('layouts/template')
@section('content')

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
<img src={{ $edit->picture }} width="30%" alt="">
<form action="{{  route('mainDelPicture', [$edit->id])  }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить фото"></p>
</form>
<form enctype="multipart/form-data" action="{{ route('update', [$edit->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<p><input type="hidden" name="MAX_FILE_SIZE" value="9024000"></p>
<p>Загрузить фото: <input name="picture" type="file" accept="image/*"></p>
<p>ФИО: <textarea rows="3" cols="45" wrap="soft" name="title" required>{{ $edit->title }}</textarea></p>
<p>Должность: <textarea rows="10" cols="45" wrap="soft" name="news" required>{{ $edit->news }}</textarea></p>
<p><input type="submit"></p>
</form>

@endsection
