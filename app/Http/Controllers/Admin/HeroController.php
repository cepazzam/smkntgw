<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Heropage';
        $heroes = Hero::latest()->get();
        return view('admin.page.hero.index', compact('title','heroes'));
        
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
            $imagePath = $request->file('image')->store('img/hero','public');
        }

        $hero = Hero::create([
            'image' => $imagePath,
            'url' => $request->input('url'),
            'kategori' => $request->input('kategori'),
            'content' => $request->input('content')

        ]);
        //assign tags
        $hero->save();
     
            //redirect dengan pesan sukses
            return redirect()->route('list-info',$request->kategori)->with(['title'=>'Heropage Saved', 'showModal'=> 'Data has been saved successfully!']);  
    
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
$hero = Hero::findOrFail($id);            
$hero->update([
                
                'url'=>$request->url,
                 'content'=>$request->content
                
            ]);
         return redirect()->route('list-info',$request->kategori)->with(['title'=>'Hero Update', 'showModal'=> 'Data has been saved successfully!']);  

        } else {
           $hero = Hero::findOrFail($id);            
            if($hero->image==""){
            $imagePath = $request->file('image')->store('img/hero','public');           
            $hero->update([
                'image' => $imagePath,
                'url'=>$request->url,
                 'content'=>$request->content
                               
            ]);
               return redirect()->route('list-info',$request->kategori)->with(['title'=>'Hero Update', 'showModal'=> 'Data has been saved successfully!']);  

        }else{
            $imagePath = public_path('storage/' . $hero->image);
             unlink($imagePath);
             $hero->update([
                'image' => $request->file('image')->store('img/hero','public'),
                'url'=>$request->url,
                'content'=>$request->content
                               
            ]);
               return redirect()->route('list-info',$request->kategori)->with(['title'=>'Hero Update', 'showModal'=> 'Data has been saved successfully!']);  

        }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        
         $imagePath = public_path('storage/' . $hero->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $hero->delete();
               return redirect()->back()->with(['title'=>'Hero Delete', 'showModal'=> 'Data has been deleted successfully!']);  
    }
}
