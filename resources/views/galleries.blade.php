@extends('layouts.main')
@section('scripts')
    @parent
    <script src="{{asset('js/gallery.js')}}"></script>
@stop
@section('content')
    <h2 align="center">
        {{$serv->name}};
    </h2>
    <div>
        {!!$serv->description!!};
    </div>
    @foreach($gal as $one)
        <div class="col-md-4">
            <h3 class="name">{{$one->name}}    </h3>
            @if($one->picture)
                <img data_id="{{$one->id}}" class="img_gallery" src="{{asset('/uploads/thumb/'.$one->picture)}}"
                     title="{{$one->name}}" alt="{{$one->name}}"/>
            @endif
        </div>
    @endforeach
    <p align="center">
    {!!$gal->links()!!} <!--paginate links-->
    </p>

    <div class="clearfix"></div>
@stop
