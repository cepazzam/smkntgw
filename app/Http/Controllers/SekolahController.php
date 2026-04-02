<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Info;
use App\Models\Widget;
class SekolahController extends Controller
{
    public function index(){
        $title = 'Profil';
        $first = Info::where('kategori','skl')->orderBy('id','asc')->first();
        $list = Info::where('kategori','skl')->orderBy('id','asc')->latest()->get();
        $widget = Widget::where('kategori','skl')->first();
        return view('page.profil.sekolah.index', compact('title','list','widget','first'));
    }
     public function read(String $slug){
       $title = 'Profil';
        $read = Info::where(['kategori'=>'skl', 'slug'=>$slug])->first();
        $list = Info::where('kategori','skl')->orderBy('id','asc')->latest()->get();
        $widget = Widget::where('kategori','skl')->first();
        return view('page.profil.sekolah.read', compact('title','list','widget','read'));
    }
     public function kontak(){
        $title = 'Kontak';
        $skl = Sekolah::first();
        return view('page.profil.sekolah.kontak', compact('title','skl'));
    }
}
