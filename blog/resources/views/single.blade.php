<title>{{ $article->title }}</title>
@extends('index')
@section('content')
			<div class="clearfix"></div>
        </div>
	</div>
	<div class="container">
		<div class="content">
			<div class="single-page">
				<div class="print-main">
					<!-- Category -->
					<h3>{{ $category->name }}</h3>
					<!-- Title -->
					<a href="/single/{{ $article->id }}">{{ $article->title }}</a>
					<!-- Image -->
					<img src="{{ asset($article->path_img) }}" class="img-responsive" alt="" />
					<!-- Date -->
					<!-- <p class="span">on february 14,2015</p> -->
					<p class="span">Дата публикации: {{ $article->created_at }}</p>
					<!-- Text -->
					<p class="ptext">{{ $article->text }}</p>
				</div>



			</div>
				<div class="single">
				<div class="leave">
				@if(Auth::check())
				<h4>Оставить комментарий</h4>
				@endif
				</div>

				<!-- Вывод сообщения об ошибках -->
				@if($errors->any())
				@include('errors.error')
				@endif

				@if(Auth::check())
				<form id="commentform" action="/comment" method="POST">
					@csrf
					 <p class="comment-form-url">
						<label for="url">Веб-сайт</label>
						<input id="url" name="url" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '')">
					 </p>
					 <p class="comment-form-comment">
						<label for="comment">Комментарий</label>
						<textarea name="text" ></textarea>
					 </p>
					 <div class="clearfix"></div>
					<p class="form-submit">
			           <input name="submit" type="submit" id="submit" value="Отправить">
					</p>
					<div class="clearfix"></div>
				   </form>
					 @endif

				   	<div class="comments1">
								@if($comments->isNotEmpty())
								<h4>Комментарии</h4>
								@endif
								@foreach($comments as $com)
			  				<div class="comments-main">
								 <img src="{{asset('images/avatar.jpg')}}" class="img-fluid" alt="...">
									<div class="col-md-9 cmts-main-right">
										<h5>{{ $com->username }}</h5>
										<p>{{ $com->text }}</p>
										<div class="cmts">
											<div class="col-md-6 cmnts-left">
												<p>Дата: {{ $com->created_at }}</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
											@endforeach
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						</div>
					</div>

@endsection
