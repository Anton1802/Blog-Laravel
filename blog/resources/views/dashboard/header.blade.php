<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img class="me-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Check_green_icon.svg/215px-Check_green_icon.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#">Панель управления</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Блог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Добавить статью</a>
        </li>
      </ul>
        <div>
        Привет {{ Auth::user()->name }}!
        <a class="btn btn-sm btn-primary ms-3" href="{{ route('logout') }}">Выйти</a>
        </div>
    </div>
  </div>
</nav>