@extends('layouts.main')

@section('content')
<div class="col-md-6 banner-bottom-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="banner-bottom-left1">
<h3>{{$text->name}}</h3>
	{!!$text->body!!}

					<!--
					<div class="more">
						<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div class="banner-bottom-left1-pos">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
					</div>-->
				</div>
			</div>
			<div class="col-md-6 banner-bottom-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<ul id="sti-menu" class="sti-menu">
					<li data-hovercolor=red>
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">réserver tatouage</h4>
							<span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
						</a>
					</li>
					<li data-hovercolor=red>
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">résrver piercing</h4>
							<span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
						</a>
					</li>
				</ul>	
					<script type="text/javascript" src="js/jquery.iconmenu.js"></script>
					<script type="text/javascript">
						$(function() {
							$('#sti-menu').iconmenu({
								animMouseenter	: {
									'mText' : {speed : 400, easing : 'easeOutExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeOutExpo', delay : 280, dir : -1},
									'icon'  : {speed : 400, easing : 'easeOutExpo', delay : 0, dir : -1}
								},
								animMouseleave	: {
									'mText' : {speed : 400, easing : 'easeInExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeInExpo', delay : 0, dir : -1},
									'icon'  : {speed : 400, easing : 'easeInExpo', delay : 280, dir : -1}
								}
							});
						});
					</script>
			</div>
			<div class="clearfix"> </div>
@stop
