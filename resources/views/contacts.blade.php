@extends('layouts.main')

@section('content')
			<div class="col-md-6 mail-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms">View On Map</h3>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.968159538635!2d-74.10367368464232!3d40.82866303840723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f8bfccce9f9b%3A0x6feca65d6e89eff7!2sService+Plus+Travel+Inc!5e0!3m2!1sen!2sin!4v1455341290029" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 mail-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms">Contact Info</h3>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<form action={{asset('contacts')}} method='POST'>
					{!!csrf_field()!!}
					                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
					<input type="text" name='name' value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}" required="">
					                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					<input type="email" name='email' value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">
					                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
					<input type="text" name='subject' value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}" required="">
					                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
					<textarea name='message' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
@stop