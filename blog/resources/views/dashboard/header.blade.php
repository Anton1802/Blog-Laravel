<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img class="me-2" src="{{ asset('favicon.ico') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Панель управления</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Блог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard_add') }}">Добавить статью</a>
        </li>
      </ul>
        <div class="text-end">
        Привет {{ Auth::user()->name }}!
        <a class="btn btn-sm btn-primary ms-3" href="{{ route('logout') }}">Выйти</a>
        </div>
    </div>
  </div>
</nav>
