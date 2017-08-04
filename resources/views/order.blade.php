@extends('layouts.main')
@section('scripts')
@parent
<script>
    $(function(){
        $('#size').change(function(){
            var size=$('#size').val();
            var price=size*{{$style->min_price}};
            $(".price span").text(price);
        })
    })
</script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-8">
            @if($style->picture)
                <img class="thumbnail" src="{{asset('/uploads/'.$style->picture)}}" title="{{$style->name}}" alt="{{$style->name}}"/>
            @endif
        </div>
        <div class="col-md-4">
            <form method="post" action="{{asset('order')}}">
                <h2 ALIGN="center">{{$style->name}}</h2>
                </br>
                <div>{!!$style->body!!}</div>
                </br>
                <div class="form-group">
                    <label for="size">Size of tatto</label>
                    <select class="form-control" id="size" name="size">
                        <option value="1">10x10 cm</option>
                        <option value="2">10x20 cm</option>
                        <option value="3">10x30 cm</option>
                        <option value="4">20x20 cm</option>
                        <option value="6">20x30 cm</option>
                        <option value="9">30x30 cm</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salon">Salon of tatto</label>
                    <select class="form-control" name="salon">
                        @foreach($salons as $one)
                            <option value="{{$one->id}}">{{$one->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="price">
                    <label>Prix:</label>
                    <span font-weight="bold">{{$style->min_price}}</span> euro
                </div>
                </br>
                <div ALIGN="right">
                <button type="submit" class="btn-my btn-primary btn-lg">Order</button>
                </div>
            </form>
        </div>
    </div>
@endsection