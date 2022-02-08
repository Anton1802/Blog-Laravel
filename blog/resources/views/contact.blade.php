
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
		        </div>
		        <div class="clearfix"></div>
		    </div>

				<div class="clearfix"></div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection
