<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Widget;

use Str;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $title ="Agenda";   
    $agendas = Agenda::latest()->paginate(10);
        return view('admin.page.agenda.index', compact('agendas','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $title = "Create New Agendas";
       return view('admin.page.agenda.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'content'=>'required'
        ]);

        $agenda = new Agenda;
        $agenda->name = $request->name;
        $agenda->date = $request->date;
        $agenda->location = $request->location;
        $agenda->content = $request->content;
        $agenda->slug= Str::slug($request->name,'-');
        $agenda->save();
         return redirect()->route('agenda.index')->with(['title'=>'Agenda Update', 'showModal'=> 'Data has been saved successfully!']);  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function updatewidget(Request $request, string $id)
    {
       $request->validate([
            'url'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('image') == "") {
$widget = Widget::findOrFail($id);            
$widget->update([
                
                'url'=>$request->url
                
            ]);
         return redirect()->back()->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        } else {
           $widget = Widget::findOrFail($id);            
            if($widget->image==""){
            $imagePath = $request->file('image')->store('img/widget','public');           
            $widget->update([
                'image' => $imagePath,
                'url'=>$request->url
                               
            ]);
               return redirect()->back()->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }else{
            $imagePath = public_path('storage/' . $widget->image);
             unlink($imagePath);
             $widget->update([
                'image' => $request->file('image')->store('img/widget','public'),
                'url'=>$request->url
                               
            ]);
               return redirect()->back()->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $title ="Agenda";
    $agenda = Agenda::findOrFail($id);
    return view('admin.page.agenda.edit', compact('title','agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate([
    'name'=>'required',
        ]);
        Agenda::findOrFail($id)->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'date'=>$request->date,
            'location'=>$request->location,
            'content'=>$request->content
        ]);
         return redirect()->route('agenda.index')->with(['title'=>'Agenda Update', 'showModal'=> 'Data has been updated successfully!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
         return redirect()->back()->with(['title'=>'Agenda Delete', 'showModal'=> 'Data has been deleted successfully!']);  
    }
}
