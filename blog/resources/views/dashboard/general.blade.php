@extends('dashboard.index')

@section('title')
Панель управления
@endsection

@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-auto">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Комментарии:</h5>
    <p class="card-text">Вы оставили 9 комментарий(ев).</p>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Статьи:</h5>
              <p class="card-text">Вы написали 9 статья(ей).</p>
        </div>
      </div>
    </div>
    <div class="col-auto">
      <h5 class="text-center">Мои статьи</h5>
      <div class="table-responsive" style="height: 500px;">
    <table class="table text-center">
      <thead>
        <tr>
          <th>Имя статьи</th>
          <th>Категория</th>
          <th>Кол.просмотров</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user_article as $article)
        <tr>
          <td>{{ $article->title }}</td>
          <td>{{ $article->find($article->id_category)->nameCategory()->first()['name'] }}</td>
          <td>{{ $article->views }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>



@endsection
