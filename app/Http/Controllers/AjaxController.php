<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Galleries;

class AjaxController extends Controller
{
    public function getGallery(){
        $pic_id=$_GET['id'];
        $picture=Galleries::find($pic_id);
        echo "<div><p align='center'><img data_id=\"{{$picture->id}}\" class=\"img-thumbnail\" src=\"{{asset('/uploads/thumb/'.$picture->picture)}}\"
                title=\"{{$picture->name}}\" alt=\"{{$picture->name}}\"/></p></div>";
    }
}
