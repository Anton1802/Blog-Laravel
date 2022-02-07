@extends('index')
@section('content')
<title></title>
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
			<!-- <div class="col-md-7 single-content-left">
				<div class="features-list">
					<h3>Features</h3>
						<ul>
							<li><a href="#">Fused Filament Fabrication (FFF) using 1.75 mm filament</a></li>
							<li><a href="#">100 micron layer resolution capability</a></li>
							<li><a href="#">9″ diameter x 11″ tall build envelope (approximate)</a></li>
							<li><a href="#">Heated build platform (optional)</a></li>
							<li><a href="#">Efficient footprint to build envelope ratio</a></li>
							<li><a href="#">Printed object viewable from 360 degrees</a></li>
							<li><a href="#">Rigid aluminum extrusion construction</a></li>
							<li><a href="#">Utilizes open source software tool chain</a></li>
						</ul>
				</div> -->
				<div class="single">
				<div class="leave">
				<h4>Оставить комментарий</h4>
				</div>
				<form id="commentform" action="#" method="POST">
					@csrf
				     <p class="comment-form-author-name"><label for="author">Ваше имя</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
					 </p>
					 <p class="comment-form-email">
						<label for="email">Почта</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
					 </p>
					 <p class="comment-form-url">
						<label for="url">Веб-сайт</label>
						<input id="url" name="url" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '')">
					 </p>
					 <p class="comment-form-comment">
						<label for="comment">Комментарий</label>
						<textarea></textarea>
					 </p>
					 <div class="clearfix"></div>
					<p class="form-submit">
			           <input name="submit" type="submit" id="submit" value="Отправить">
					</p>
					<div class="clearfix"></div>
				   </form>
				   	<div class="comments1">
								<h4>комментарии</h4>
			  				<div class="comments-main">
									<div class="col-md-3 cmts-main-left">
										<img src="{{asset('images/avatar.jpg')}}" alt="">
									</div>
									<div class="col-md-9 cmts-main-right">
										<h5>TOM BROWN</h5>
										<p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
										<div class="cmts">
											<div class="col-md-6 cmnts-left">
												<p>On April 14, 2014, 18:01</p>
											</div>
											<div class="col-md-6 cmnts-right">
												<a href="#">Reply</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- <div class="col-md-5 content-right content-right-top">
			<h5 class="head">Popular</h5>
				<a href="single.html">
					<div class="editor text-center">
						<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
						<p>A new cheap ass 3D Printer worth checking out</p>
						<label>2 Days Ago</label>
						<span></span>
					</div>
				</a>
				<a class="active" href="single.html">
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
					</div>
				</a>
				<div class="editors-pic-grids">
					<h5>Editors Pick</h5>
					<div class="editors-pic">
						<div class="e-pic">
							<a href="single.html"><img src="images/ep1.jpg" alt="" /></a>
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
							<a href="single.html"><img src="images/ep2.jpg" alt="" /></a>
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
							<a href="single.html"><img src="images/ep3.jpg" alt="" /></a>
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
							<a href="single.html"><img src="images/ep4.jpg" alt="" /></a>
						</div>
						<div class="e-pic-info">
							<a href="single.html">3D Printed Record – the next revolution?</a>
							<span></span>
							<label>2 Days Ago</label>
						</div> -->

@endsection
