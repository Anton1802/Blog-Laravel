
@section('title')
Главная
@endsection

@extends('index')
@section('content')
<div class="clearfix"></div>
  </div>
</div>
<div class="container">
<div class="content">
<div class="col-md-7 content-left">
  <h5 class="head">последние новости</h5>
  @foreach($articles as $article)
  <div class="article">
    <h6></h6>
    <a class="title" href="/single/{{ $article->id }}">{{ $article->title}}</a>
    <a href="/single/{{ $article->id }}"><img src="{{ asset($article->path_img) }}" alt="" /></a>
    <p>{{ strip_tags(html_entity_decode(Str::substr($article->text, 0, 300))) }}...</p>
    <p><b>{{ $article->views }} просмотр(ов)</b></p>
    <p>
      <b>Автор статьи: {{ $article->author['name'] }}</b>
    </p>
  </div>
  @endforeach
  {{ $articles->links('inc.pagination') }}
</div>
<div class="col-md-5 content-right">
<h5 class="head">популярные</h5>

<div class="content-right-top">
  @foreach($popular_articles as $article)
  <a href="/single/{{ $article->id }}">
    <div class="editor text-center">
      <h3>{{ $article->title }}</h3>
      <p id="replace">{{ Str::substr($article->text, 0, 55)}}...</p>
      <label>{{ $article->pastDate() }}</label>
      <span></span>
    </div>
  </a>
@endforeach
</div>


  <div class="editors-pic-grids">
    <h5>рекомендуемые</h5>
    @foreach($rec_articles as $article)
    <div class="editors-pic">
      <div class="e-pic">
        <a href="/single/{{ $article->id }}"><img src="{{ asset($article->path_img) }}" alt="" /></a>
      </div>
      <div class="e-pic-info">
        <a href="/single/{{ $article->id }}">{{ Str::substr($article->title, 0, 20)}}</a>
        <span></span>
        <label>{{ $article->pastDate() }}</label>
      </div>
      <div class="clearfix"></div>
    </div>
    @endforeach
    <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</div>

<script>
$('#replace').each(function(){
	var $this = $(this);
	var t = $this.text();
	$this.html(t.replace('&lt','<').replace('&gt', '>'));
});
</script>

@endsection
