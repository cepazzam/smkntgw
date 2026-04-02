<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Publikasi;
class BeritaController extends Controller
{
    public function index(){
        $title='Berita';
        $list = Post::latest()->paginate(8);
        return view('page.berita.index', compact('title','list'));
    }
    public function read(String $slug){
        $title ='Berita';
        $list = Post::where('slug','<>',$slug)->limit(5)->get();
        $read = Post::where('slug',$slug)->first();
        $artikel = Publikasi::where('kategori','artikel')->orderBy('id','desc')->limit(5)->get();

        return view('page.berita.read', compact('title','read','list','artikel'));
    }
     public function postcategory(String $id){
        $title ='Berita';
        $read = Post::where('category_id',$id)->first();
        $artikel = Publikasi::where('kategori','artikel')->orderBy('id','desc')->limit(5)->get();
        $list = Post::where('category_id',$id)->paginate(5);
        return view('page.berita.postcategory', compact('title','list','artikel','read'));
    }

}
