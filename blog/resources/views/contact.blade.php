
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
			        <h3 class="c-head">contact-us</h3>
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" action="">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
			     <div class="contact_grid span_2_of_contact_right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						  Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
						   1-25-2568-897
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="mailto:example@gmail.com">info(at)company.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
		    </div>
		    <div class="map">
		    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630" frameborder="0" style="border:0"></iframe>
		    </div>
			</div>
		</div>
	</div>
@endsection
