@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
		<div class="container">	
		<div class="contact">	
			<h2>CONTACT</h2>		
			<div class="contact-grids">
				<div class="top-contact">
					<div class=" col-md-3 contact-right">
				     	<h3>Company Information</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info@mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				    </div>	
					<div class="col-md-8 contact-form">
							<h3>Contact me</h3>
          
          <form action="{{ route('contact.store') }}" method="post" role="form" class="contactForm">
          {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ваш email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Сообщение"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Отправить</button></div>
          </form>
          
					</div>	
					<div class="clearfix"> </div>
				</div>	
			</div>
		</div>
	</div>

@endsection
