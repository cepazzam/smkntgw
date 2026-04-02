<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Publikasi;
use App\models\Post;
use App\models\Info;
use App\models\Hero;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        $sambutan = Publikasi::where('kategori','sambutan')->orderBy('id','desc')->first();
        $sambutan->content = Str::words($sambutan->content, 150,'...');
        $posts = Post::where('status',1)->orderBy('id','desc')->limit(3)->get();
        $promo = Publikasi::where('kategori','pengumuman')->orderBy('id','desc')->first();
        return view('page.home', compact('sambutan','posts','promo'));
    }
     public function sambutan(String $slug){
        $read = Publikasi::where('slug', $slug)->first();
        $title ="Sambutan";
        return view('page.publikasi.sambutan', compact('title','read'));

}

public function cari(Request $request)
	{
		$title="Hasil Pencarian";
		$cari = $request->cari;
		$result = Info::where('content','like',"%".$cari."%")->paginate(2)->withQueryString();
	    $result->appends($request->except('page'));
        return view('page.pencarian',compact('result','title','cari'));
 
	}



    
}
