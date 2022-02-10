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
      <div class="table-responsive" style="height: 500px;">
    <table class="table">
      <thead>
        <tr>
          <th>Имя статьи</th>
          <th>Категория</th>
          <th>Кол.просмотров</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Test Article</td>
          <td>Принтеры</td>
          <td>15 просмотров</td>
        </tr>
        <tr>
          <td>Test Article</td>
          <td>Принтеры</td>
          <td>15 просмотров</td>
        </tr>
        <tr>
          <td>Test Article</td>
          <td>Принтеры</td>
          <td>15 просмотров</td>
        </tr>
        <tr>
          <td>Test Article</td>
          <td>Принтеры</td>
          <td>15 просмотров</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



@endsection
