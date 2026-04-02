<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Hero;
use App\Models\Widget;


class LayananController extends Controller
{
    public function index(){
        $title = 'Info Layanan';
        $kur =Info::where('kategori','kurikulum')->orderBy('id','asc')->first();
        $sis =Info::where('kategori','kesiswaan')->orderBy('id','asc')->first();
        $hub =Info::where('kategori','hubinmas')->orderBy('id','asc')->first();
        $sar =Info::where('kategori','sarpras')->orderBy('id','asc')->first();
        $bkk =Info::where('kategori','bkk')->orderBy('id','asc')->first();
        $bk  =Info::where('kategori','bk')->orderBy('id','asc')->first();

        return view('page.layanan.index', compact('title','kur','sis','hub','sar','bkk','bk'));
    }
    public function home(String $kategori){
        $title = 'Layanan Bidang Hubinmas';
        $first = Info::where('kategori',$kategori)->orderBy('id','asc')->first();
        $list = Info::where('kategori',$kategori)->orderBy('id','asc')->skip(1)->take(20)->get();
        $widget = Widget::where('kategori',$kategori)->first();
        $hero = Hero::where('kategori',$kategori)->first();
        $iswidget =Widget::where('kategori',$kategori)->exists();
        $ishero =Hero::where('kategori',$kategori)->exists();
        $isinfo =Info::where('kategori',$kategori)->exists();
        return view('page.layanan.home', compact('title','first','list','widget','hero','ishero','iswidget','isinfo'));
    }
    public function read(String $kategori, String $slug){
        $title = 'Layanan';
        $list = Info::where('kategori',$kategori)->orderBy('id','asc')->skip(1)->take(20)->get();
        $widget = Widget::where('kategori',$kategori)->first();
        $hero = Hero::where('kategori',$kategori)->first();
        $iswidget =Widget::where('kategori',$kategori)->exists();
        $ishero =Hero::where('kategori',$kategori)->exists();
        $read = Info::where(['kategori'=>$kategori,'slug'=>$slug])->first();
       
        return view('page.layanan.read', compact('title','read','list','widget','hero','ishero','iswidget','kategori'));
    }
     
}
