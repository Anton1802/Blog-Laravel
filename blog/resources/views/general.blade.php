
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
  @if(Route::is('home') && $articles != "")
  @foreach($articles as $article)
  <div class="article">
    <h6></h6>
    <a class="title" href="single.html">{{ $article->title}}</a>
    <a href="single.html"><img src="{{ asset($article->path_img) }}" alt="" /></a>
    <p>{{ $article->text }}</p>
  </div>
  @endforeach
  @endif
</div>
<div class="col-md-5 content-right">
<h5 class="head">популярные</h5>
@if(Route::is('home'))
<div class="content-right-top">
  @foreach($popular_articles as $article)
  <a href="single.html">
    <div class="editor text-center">
      <h3>{{ $article->title }}</h3>
      <p>{{ Str::substr($article->text, 0, 55)}}...</p>
      <label>2 Days Ago</label>
      <span></span>
    </div>
@endforeach
@endif
  <!-- </a> -->
  <!-- <a class="active" href="single.html">
    <div class="editor text-center">
      <h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
      <p>3D Printing, 3D Software</p>
      <label>3 Days Ago</label>
      <span></span>
    </div>
  </a>
  <a href="single.html">
    <div class="editor text-center">
      <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
      <p>A new cheap ass 3D Printer worth checking out</p>
      <label>2 Days Ago</label>
      <span></span>
    </div>
  </a>
  <a href="single.html">
    <div class="editor text-center">
      <h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
      <p>3D Printing, 3D Software</p>
      <label>3 Days Ago</label>
      <span></span>
    </div> -->
  <!-- </a> -->
  </div>
  <div class="editors-pic-grids">
    <h5>рекомендуемые</h5>
    <div class="editors-pic">
      <div class="e-pic">
        <a href="single.html"><img src="{{ asset('images/ep1.jpg') }}" alt="" /></a>
      </div>
      <div class="e-pic-info">
        <a href="single.html">MarkerBot Announces the ‘Replicator 2x’  For the Experimental</a>
        <span></span>
        <label>2 Days Ago</label>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="editors-pic">
      <div class="e-pic">
        <a href="single.html"><img src="{{ asset('images/ep2.jpg') }}" alt="" /></a>
      </div>
      <div class="e-pic-info">
        <a href="single.html">3D Printed Record – the next revolution?</a>
        <span></span>
        <label>2 Days Ago</label>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="editors-pic">
      <div class="e-pic">
        <a href="single.html"><img src="{{ asset('images/ep3.jpg') }}" alt="" /></a>
      </div>
      <div class="e-pic-info">
        <a href="single.html">MarkerBot Announces the ‘Replicator 2x’  For the Experimental</a>
        <span></span>
        <label>2 Days Ago</label>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="editors-pic">
      <div class="e-pic">
        <a href="single.html"><img src="{{ asset('images/ep4.jpg') }}" alt="" /></a>
      </div>
      <div class="e-pic-info">
        <a href="single.html">3D Printed Record – the next revolution?</a>
        <span></span>
        <label>2 Days Ago</label>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</div>
</div>
@endsection
