@extends('layouts.main')
@section('content')

    @foreach($serv as $one)
        <div class="col-md-4">
            <h3 class="name">{{$one->name}}</h3>
            @if($one->picture)
                <a href="{{asset('gallery/'.$one->id)}}">
                    <img width="300px" class="thumbnail" src="{{asset('/uploads/'.$one->picture)}}" title="{{$one->name}}" alt="{{$one->name}}"/>
                </a>
            @endif
            <div>{!! $one->description !!}</div>
        </div>
    @endforeach
    <div class="clearfix"></div>
@stop
