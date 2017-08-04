<div class="col-md-1"><a href="{{asset('/uploads/'.$picture->picture)}}"><</a> </div>
<div class="col-md-10">
    <p align="center">
         <img data_id="{{$picture->id}}" class="img-thumbnail" src="{{asset('/uploads/'.$picture->picture)}}"
              title="{{$picture->name}}" alt="{{$picture->name}}"/>
     </p>
 </div>
<div class="col-md-1"><a href="#">></a> </div>

