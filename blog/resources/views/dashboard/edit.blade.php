@section('title')
Редактирование статьи
@endsection

@extends('dashboard.index')

@section('content')

<div class="container pt-5">
  <form action="", method="POST">
    @csrf
    <p class="form-label">Фото:</p>
    <img src="{{ asset($article->path_img) }}" class="img-thumbnail" style=" width:400px; height: 200px;">
    <div class="form-group pt-1">
    <label class="form-label">Заголовок</label>
    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
    </div>
    <div class="form-group">
    <label class="form-label">Текст</label>
    <textarea name="text" class="form-control" rows="15">{{ $article->text }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Редактировать</button>
  </form>
</div>

@endsection
