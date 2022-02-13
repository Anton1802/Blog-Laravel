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
    @if (Session::has('success'))
    <div class="alert alert-success text-center">
      {{ Session::get('success') }}
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
          <th style="width: 100px; @if(!Auth::user()->isAdmin()) display:none; @endif">Действия</th>
        </tr>
      </thead>
      <tbody>
        @if(!Auth::user()->isAdmin())
        @foreach($user_article as $article)
        <tr>
          <td class="text-truncate">{{ $article->title }}</td>
          <td>{{ $article->find($article->id_category)->nameCategory()->first()['name'] }}</td>
          <td>{{ $article->views }}</td>
          </th>
        </tr>
        @endforeach
        @elseif(Auth::user()->isAdmin())
        @foreach($all_article as $article)
        <tr>
          <td class="text-truncate">{{ $article->title }}...</td>
          <td>{{ $article->find($article->id_category)->nameCategory()->first()['name'] }}</td>
          <td>{{ $article->views }}</td>
          <th>
            <div class="sl" style="width:120px">
              <div class="slide">
                <a class="btn btn-primary btn-sm" href="dashboard/edit/{{ $article->id }}">Редактир</a>
              </div>
              <div class="slide">
                  <a class="btn btn-danger btn-sm" href="dashboard/del/{{ $article->id }}">Удалить</a>
              </div>
              @if($article->watch_ready == false)
              <div class="slide">
                  <a class="btn btn-success btn-sm" href="dashboard/ready/{{ $article->id }}">Опубликовать</a>
              </div>
              @endif
              <div class="slide">
                  <a class="btn @if($article->recommended == true) btn-success @else btn-danger @endif btn-sm" href="dashboard/recommend/{{ $article->id }}">Р</a>
              </div>
          </div>
        </th>
        @endforeach
        @endif
          </tr>
          </tbody>
        </table>
      </div>
      @endsection
