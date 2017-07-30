@if($curent_page== '/')
<!-- banner -->
	<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
		<section class="slider"> 
				<div class="flexslider">
				<ul class="slides">
				@foreach($salons as $salon)
				<li><div class="banner-info">	
					<div class="col-md-8 banner-info-left">
						<h3 value="{{$salon->id}}"> American body Art </br> {{$salon->name}}</h3>
						<p value="{{$salon->id}}">{{$salon->address}} 
												{{$salon->telephone}}
							<a href="{{asset('')}}">{{$salon->email}}</a>
												{{$salon->description}}</p>
					<ul class="social-networks square spin-icon">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
					</div>
					<div class="col-md-4 banner-info-right">
					<img src="images/salon_innocents.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div></li>
				@endforeach
				</ul>
				</div>
					</section>
						<!--FlexSlider-->
								<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script defer src="js/jquery.flexslider.js"></script>
								<script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!--End-slider-script-->
				</div>
			<!-- //banner -->
@endif