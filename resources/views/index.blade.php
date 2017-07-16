@extends('layouts.main')

@section('content')
<h3>{{$text->name}}</h3>
	{!!$text->body!!}
@stop
