
@section('title')
Контакты
@endsection


@extends('index')
@section('content')
<title>Contact</title>
<div class="clearfix"></div>
</div>
</div>
	<div class="container">
		<div class="content">
		<div class="contact-section">
			        <h3 class="c-head">Обратная связь</h3>
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" action="">
					    	    <p class="comment-form-author"><label for="author">Ваше Имя:</label>
					    	    	<input type="text" class="textbox" value="Введите свое имя" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свое имя';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Почта:</label>
						     	   <input type="text" class="textbox" value="Введите свою почту" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свою почту';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Сообщение:</label>
						    	  <textarea value="Введите свое сообщение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите свое сообщение';}">Введите свое сообщение</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Отправить">
					        </form>
								</div>
		        </div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630" frameborder="0" style="border:0"></iframe>
					</div>
					</div>
		        </div>
		        <div class="clearfix"></div>
	</div>
@endsection
