@extends('layouts.main')
@section('content')
    @foreach($styles as $one)
        <div class="col-md-4" ALIGN="center">
            <h3 class="name">{{$one->name}}</h3>
            @if($one->picture)
                <a href="{{asset('order/'.$one->id)}}">
                    <img width="300px" class="thumbnail" src="{{asset('/uploads/'.$one->picture)}}" title="{{$one->name}}" alt="{{$one->name}}"/>
                </a>
            @endif
        </div>
    @endforeach
    <div class="clearfix"></div>
@stop
