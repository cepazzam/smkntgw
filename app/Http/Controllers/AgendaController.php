<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Widget;

class AgendaController extends Controller
{
   
    public function index(){
        $title ='Agenda';
        $active = Agenda::orderBy('id','desc')->first();
        $agendas = Agenda::orderBy('id','desc')->skip('1')->take(10)->get();
        $widget = Widget::where('kategori','agenda')->first();
        return view('page.agenda.index', compact('title','agendas','active','widget'));
    }
}
