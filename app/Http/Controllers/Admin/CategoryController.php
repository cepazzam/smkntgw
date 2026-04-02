<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Category';
        $categories = Category::latest()->paginate(10);
        return view('admin.page.berita.kategori.index', compact('title','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
       
     $category = Category::findOrFail($id);            
     $category->update(['name'=>$request->name]);
         return redirect()->back()->with(['title'=>'Category Update', 'showModal'=> 'Data has been updated successfully!']);  

    }

     public function show(string $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //
         $request->validate([
            'name' => 'required|unique:categories'
        ],[
            'required.name'=>'nama harus diisi',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-') 
        ]);

       
        return redirect()->back()->with(['title'=>'Category','showModal'=> 'Data has been saved successfully!']);  
       
    }
    public function destroy(Category $category)    {    
        $category->delete();
        return redirect()->back()->with(['title'=>'Category','showModal'=> 'Data has been deleted successfully!']);  
    }

   
}
