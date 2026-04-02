<?php

namespace App\Http\Controllers;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
   
    
    public function read(String $kategori, String $slug){
        $title ='Pengumuman';
        $list = Publikasi::where('kategori',$kategori)->orderBy('id', 'desc')->get();
        $read = Publikasi::where(['kategori'=>$kategori,'slug'=>$slug])->first();
        return view('page.pengumuman.read', compact('title','list','read'));
    }
   
}
