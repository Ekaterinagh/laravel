@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="col-md-6">
            @if($pierc->picture)
                <img class="thumbnail" src="{{asset('/uploads/'.$pierc->picture)}}" title="{{$pierc->name}}" alt="{{$pierc->name}}"/>
            @endif
        </div>
        <div class="col-md-6">
                <form method="post" action="{{asset('pierc')}}">
                    <h2 ALIGN="center">{{$pierc->name}}</h2>
                    </br>
                    <div>{!!$pierc->body!!}</div>
                    </br>
                    <div class="form-group">
                        <label for="salon">Salon of piercing</label>
                        <select class="form-control" name="salon">
                            @foreach($salons as $one)
                                <option value="{{$one->id}}">{{$one->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="price">
                        <label>Prix:</label>
                        <span>{{$pierc->price}}</span> euro
                    </div>
                    </br>
                    <div ALIGN="right">
                        <button type="submit" class="btn-my btn-primary btn-lg">Order</button>
                    </div>
                </form>
        </div>
    </div>
@endsection