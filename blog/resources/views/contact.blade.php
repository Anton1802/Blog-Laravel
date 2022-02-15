
@section('title')
Контакты
@endsection

@extends('index')
@section('content')
<title>Contact</title>

	<div class="container">
		<div class="content">
		<div class="contact-section">
			        <h3 class="c-head">Обратная связь</h3>
							@if (session()->has('success'))
							<div class="alert alert-success text-center">
					      {{ session()->get('success') }}
					    </div>
							@endif
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" action="{{ route('contact_send') }}">
											@csrf
					    	    <p class="comment-form-author"><label for="author">Ваше Имя:</label>
					    	    	<input type="text" class="textbox" name="name" value="Введите свое имя" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свое имя';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Почта:</label>
						     	   <input type="text" class="textbox" name="email" value="Введите свою почту" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свою почту';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Сообщение:</label>
						    	  <textarea value="Введите свое сообщение" name="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свое сообщение';}">Введите свое сообщение</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Отправить">
					        </form>
								</div>
 			     </div>
 			     <div class="contact_grid span_2_of_contact_right">
 					<h3>Контакты</h3>
 				    <div class="address">
 						<i class="pin_icon"></i>
 					    <div class="contact_address">

 					    </div>
 					    <div class="clearfix"></div>
 					</div>
 					<div class="address">
 						<i class="phone"></i>
 					    <div class="contact_address">
 					        <p>Вы можете написать на почту:</p>
 					    <div class="clearfix"></div>
 					</div>
 					<div class="address">
 						<i class="mail"></i>
 					    <div class="contact_email">
 						  <a href="mailto:example@gmail.com">electronics@gmail.com</a>
 					    </div>
 					    <div class="clearfix"></div>
 					</div>
 		        </div>
 		        <div class="clearfix"></div>
 		    </div>
 		    <div class="map">
 		    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22948.528269129954!2d43.0374912!3d44.0303616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1644927082117!5m2!1sru!2sru" frameborder="0" style="border:0"></iframe>
 		    </div>
 			</div>
 		</div>
 	</div>
@endsection
