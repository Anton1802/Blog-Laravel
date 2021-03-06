<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Konstructs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- header-section-starts -->
<div class="header">
  <div class="container">
    <div class="logo">
      <a href="/"><h1>electronics</h1></a>
    </div>
    <div class="pages">
      <ul>
        <li><a class="active" href="/">Статьи</a></li>
        <!-- <li><a href="3dprinting.html">3D Printers</a></li> -->
        <!-- <li><a href="404.html">Tutorials</a></li> -->
      </ul>
    </div>
    <div class="navigation">
      <ul>
        <li><a href="/contact">Контакты</a></li>
        @if(!Auth::check())
        <li><a href="{{ route('login') }}">Войти</a></li>
        <li><a class="active" href="{{ route('register') }}">Регистрация</a></li>
        @endif
        @if(Auth::check())
        <li><a href="{{ route('dashboard') }}">Панель управления</a></li>
        <li><a href="{{ route('logout') }}">Выйти</a></li>
        @endif
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
@if(Route::is('home') || Route::is('cat'))
<div class="container">
  @if(!$categories->count() == 0)
  <div class="header-bottom">
        <div class="type">
      <h5>Категории</h5>
    </div>
    <span class="menu"></span>
    <div class="list-nav">
      <ul>
        @foreach($categories as $category)
        <li><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>|
        @endforeach
      </ul>
    </div>
    @endif
    @endif
    <!-- script for menu -->
      <script>
      $( "span.menu" ).click(function() {
        $( ".list-nav" ).slideToggle( "slow", function() {
          // Animation complete.
        });
      });
    </script>
    <!-- script for menu -->
