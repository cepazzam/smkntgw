<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Publikasi;
use Hash;

class PublikasiController extends Controller
{
    public function index(String $kategori)
    {
        $title ="Publikasi";
        $publish = Publikasi::where('kategori',$kategori)->paginate(5);       
        return view('admin.page.publikasi.index', compact('title', 'publish','kategori'));
    }
    public function create(String $kategori)
    {
        $title = "Publikasi";
        return view('admin.page.publikasi.create', compact('title','kategori'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/publikasi','public');
        }

        $publish = Publikasi::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'kategori' => $request->input('kategori'),
            'content' => $request->input('content'),
            'penulis' => $request->penulis,
            'jabatan' => $request->jabatan,

        ]);
        //assign tags
        $publish->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('publikasi',$request->kategori)->with(['title'=>'Data Saved', 'showModal'=> 'Data has been saved successfully!']);  
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Publikasi $publikasi)
    {
        $title = "Publikasi"; 
        return view('admin.page.publikasi.show', compact('publikasi','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        $title = "Publikasi";
        return view('admin.page.publikasi.edit', compact(
            'publikasi',
            'title'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        $imagePath = null;
        if ($request->hasFile('image') == "") {
            $publish = Publikasi::findOrFail($publikasi->id);
            $publish->update([
                'title' => $request->input('title'),
                'kategori' => $request->input('kategori'),
                'content' => $request->input('content'),
                'slug' => Str::slug($request->input('title'), '-'),
                'penulis' => $request->penulis,
                'jabatan' => $request->jabatan,

            ]);
    return redirect()->route('publikasi',$publikasi->kategori)->with(['title'=>'Data Updated', 'showModal'=> 'Data has been updated successfully!']);

        } else {
             $publish = Publikasi::findOrFail($publikasi->id);
            if($publish->image==""){
                 $imagePath = $request->file('image')->store('img/publikasi','public');
           
            $publish->update([
                'image' => $imagePath,
                'title' => $request->title,
                'kategori' => $request->kategori,
                'content' => $request->content,
                'slug' => Str::slug($request->input('title'), '-'),
                'penulis' => $request->penulis,
                'jabatan' => $request->jabatan,

                
            ]);
    return redirect()->route('publikasi',$publikasi->kategori)->with(['title'=>'Data Updated', 'showModal'=> 'Data has been updated successfully!']);

        }
       
            
            $imagePath = public_path('storage/' . $publikasi->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/publikasi','public');
            $publish = Publikasi::findOrFail($publikasi->id);
            $publish->update([
                'image' => $imagePath,
                'title' => $request->title,
                'kategori' => $request->input('kategori'),
                'content' => $request->content,
                'slug' => Str::slug($request->input('title'), '-'),
                'penulis' => $request->penulis,
                'jabatan' => $request->jabatan,

                
            ]);
            
        }
    return redirect()->route('publikasi',$publikasi->kategori)->with(['title'=>'Data Updated', 'showModal'=> 'Data has been updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $publish = Publikasi::findOrFail($id);
      if($publish->image==NULL){
        $publish->delete();
                     return redirect()->route('publikasi',$publish->kategori)->with(['title'=>'Data Deleted', 'showModal'=> 'Data has been deleted successfully!']);

      }else{
         $imagePath = public_path('storage/' . $publish->image);
          unlink($imagePath);
        $publish->delete();
      return redirect()->route('publikasi',$publish->kategori)->with(['title'=>'Data Deleted', 'showModal'=> 'Data has been deleted successfully!']);


      }
       
    }

}