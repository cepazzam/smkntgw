<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Widget;

class WidgetController extends Controller
{
    
    public function index()
    {
        $title = 'Widget';
        $widgets = Widget::latest()->get();
        return view('admin.page.widget.index', compact('title','widgets'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/widget','public');
        }

        $widget = Widget::create([
            'image' => $imagePath,
            'url' => $request->input('url'),
            'kategori' => $request->input('kategori')

        ]);
        //assign tags
        $widget->save();
     
            //redirect dengan pesan sukses
            return redirect()->route('list-info',$request->kategori)->with(['title'=>'Widget Saved', 'showModal'=> 'Data has been saved successfully!']);  
    
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/widget','public');
        }

        $widget = Widget::create([
            'image' => $imagePath,
            'url' => $request->input('url'),
            'kategori' => $request->input('kategori')

        ]);
        //assign tags
        $widget->save();
     
            //redirect dengan pesan sukses
            return redirect()->route('dashboard')->with(['title'=>'Widget Saved', 'showModal'=> 'Data has been saved successfully!']);  
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
         return redirect()->route('list-info',$request->kategori)->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        } else {
           $widget = Widget::findOrFail($id);            
            if($widget->image==""){
            $imagePath = $request->file('image')->store('img/widget','public');           
            $widget->update([
                'image' => $imagePath,
                'url'=>$request->url
                               
            ]);
               return redirect()->route('list-info',$request->kategori)->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }else{
            $imagePath = public_path('storage/' . $widget->image);
             unlink($imagePath);
             $widget->update([
                'image' => $request->file('image')->store('img/widget','public'),
                'url'=>$request->url
                               
            ]);
               return redirect()->route('list-info',$request->kategori)->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }
        }
    }

     public function updateWidgetUser(Request $request, string $id)
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
         return redirect()->route('dashboard')->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        } else {
           $widget = Widget::findOrFail($id);            
            if($widget->image==""){
            $imagePath = $request->file('image')->store('img/widget','public');           
            $widget->update([
                'image' => $imagePath,
                'url'=>$request->url
                               
            ]);
               return redirect()->route('dashboard')->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }else{
            $imagePath = public_path('storage/' . $widget->image);
             unlink($imagePath);
             $widget->update([
                'image' => $request->file('image')->store('img/widget','public'),
                'url'=>$request->url
                               
            ]);
               return redirect()->route('dashboard')->with(['title'=>'Widget Update', 'showModal'=> 'Data has been saved successfully!']);  

        }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(Widget $widget)
    {
        
         $imagePath = public_path('storage/' . $widget->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $widget->delete();
               return redirect()->back()->with(['title'=>'Widget Delete', 'showModal'=> 'Data has been deleted successfully!']);  
    }
}
