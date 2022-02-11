@extends('dashboard.index')

@section('title')
Панель управления
@endsection

@section('content')

<div class="container mt-3">
  <div class="row align-items-center pb-5">
    <div class="col-12">
<div class="card bg-info">
  <div class="card-body">
    <h5 class="card-title">Комментарии:</h5>
    <p class="card-text">Вы оставили {{ $count_comments }} комментарий(ев).</p>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card bg-info mt-2">
            <div class="card-body">
              <h5 class="card-title">Статьи:</h5>
              <p class="card-text">Вы написали {{ $user_article->count() }} статья(ей).</p>
            </div>
        </div>
      </div>
    </div>
    @if (Session::has('warning'))
    <div class="alert alert-danger text-center">
      {{ Session::get('warning') }}
    </div>
    @endif
    <div class="col-auto">
      @if(!Auth::user()->isAdmin())
      <h5 class="text-center">Мои статьи</h5>
      @elseif(Auth::user()->isAdmin())
      <h5 class="text-center">Управление статьями</h5>
      @endif
      <div class="table-responsive" style="height: 700px;">
    <table class="table text-center table-info table-bordered">
      <thead>
        <tr>
          <th>Имя статьи</th>
          <th>Категория</th>
          <th>Кол.просмотров</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        @if(!Auth::user()->isAdmin())
        @foreach($user_article as $article)
        <tr>
          <td>{{ $article->title }}</td>
          <td>{{ $article->find($article->id_category)->nameCategory()->first()['name'] }}</td>
          <td>{{ $article->views }}</td>
          <th>
            <div class="row justify-content-center">
              <div class="col-auto mt-2">
              <a class="btn btn-primary btn-sm" href="dashboard/edit/{{ $article->id }}">Редактир</a>
              </div>
              <div class="col-auto mt-2">
              <a class="btn btn-danger btn-sm" href="dashboard/del/{{ $article->id }}">Удалить</a>
              </div>
              @if($article->watch_ready == false)
              <div class="col-auto mt-2">
              <a class="btn btn-success btn-sm" href="dashboard/ready/{{ $article->id }}">Опубликовать</a>
              </div>
              @endif
            </div>
          </th>
        </tr>
        @endforeach
        @elseif(Auth::user()->isAdmin())
        @foreach($all_article as $article)
        <tr>
          <td>{{ $article->title }}</td>
          <td>{{ $article->find($article->id_category)->nameCategory()->first()['name'] }}</td>
          <td>{{ $article->views }}</td>
          <th>
            <div class="row justify-content-center">
              <div class="col-auto mt-2">
              <a class="btn btn-primary btn-sm" href="dashboard/edit/{{ $article->id }}">Редактир</a>
              </div>
              <div class="col-auto mt-2">
              <a class="btn btn-danger btn-sm" href="dashboard/del/{{ $article->id }}">Удалить</a>
              </div>
              @if($article->watch_ready == false)
              <div class="col-auto mt-2">
              <a class="btn btn-success btn-sm" href="dashboard/ready/{{ $article->id }}">Опубликовать</a>
              </div>
              @endif
            </div>
          </th>
        </tr>
        @endforeach
        @endif
          </tbody>
        </table>
      </div>

@endsection
