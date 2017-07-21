@extends('layouts.main')
@section('content')
<div class="col-md-12">
	@foreach($gal as $one)
	<h3 class="name">{{$one->name}}	</h3>
		@if($one->picture)
			<img src="{{asset('/uploads/'.$one->picture)}}" title="{{$one->name}}" alt="{{$one->name}}" />
		@endif
	@endforeach
	<p align="center">
	{!!$gal->links()!!} <!--paginate links-->
	</p>
</div>
<div class="clearfix"></div>
@stop
