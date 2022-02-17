@section('title')
Добавление статьи
@endsection

@extends('dashboard.index')

<!-- // Форма добавления статьи - доступна всем
// Поля: Фото, категория, заголовок, текст,
// Кнопка: Отправить на рассмотрение -->
@section('content')

<div class="container pt-5">
  @if($errors->any())
  @include('errors.error')
  @endif
  <h5>Добавление статьи</h5>
  <form action="{{ route('dashboard_add_process') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label class="form-label">Фото:</label>
    <input class="form-control-file" id="img" name="image" type="file">
  </div>
  <div class="form-group mt-1">
    <label class="form-label">Категория:</label>
    <select class="form-select" name="category" aria-label="Категория:">
      @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group mt-1">
    <label class="form-label">Заголовок</label>
    <input class="form-control" type="text" id="title" name="title" aria-label="default input example">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="form-label">Текст:</label>
     <textarea id="text" class="form-control" name="text" id="exampleFormControlTextarea1" rows="12"></textarea>
  </div>
  <button type="submit" class="btn btn-success mt-3">Отправить на модерацию</button>
  </form>
</div>

@endsection
