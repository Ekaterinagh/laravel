@extends('layouts.main')
@section('content')
<div class="col-md-6 mail-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
	<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms">Sur la carte</h3>
	<p>Vouz pouvez voir notre salons sur la carte.</p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167997.3498781121!2d2.207466606089678!3d48.8589999947611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2z0J_QsNGA0LjQtiwg0KTRgNCw0L3RhtC40Y8!5e0!3m2!1sru!2sby!4v1500484165082" width="540" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col-md-6 mail-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
	<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms">Contactez nous</h3>
	<p>Vous pouvez nous envoyer un message.</p>
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
			<select class="my-control" name='salons_id'>
				@foreach($salons as $salon)
					<option value="{{$salon->id}}">{{$salon->name}}</option>
				@endforeach
			</select>
			@if ($errors->has('salons_id'))
			<span class="help-block">
				<strong>{{ $errors->first('salons_id') }}</strong>
			</span>
			@endif
		<textarea name='message' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
		<input type="submit" value="Submit" >
	</form>
</div>
@stop