<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Video;
class GaleriController extends Controller
{
    public function index(){
        $title = 'Galeri';
        $list = Photo::orderBy('id','desc')->skip(1)->limit(10)->get();
         $active = Photo::orderBy('id','desc')->first();
         $videos = Video::latest()->limit(12)->get();
        return view('page.galeri.index', compact('title','list','active','videos'));
    }
     
}
