<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use illuminate\Support\Facades\Storage;


class SekolahController extends Controller
{
    public function dataskl(){
        $skl = Sekolah::first();
        $title ="Pengaturan";
        $subtitle ="Website";
        return view('admin.page.setting.sekolah', compact('skl','title','subtitle'));
    }


     public function update(Request $request, String $id){
        $request->validate([
            'nm_skl'=>'required',
        ]);
         $skl = Sekolah::where('id',$id)->first();
         $skl->update([
               
                'nm_skl'=> $request->nm_skl,
                'alamat'=>$request->alamat,
                'pos'=>$request->pos,
                'npsn'=>$request->npsn,
                'telp_fax'=>$request->telp_fax,
                'email'=>$request->email,
                'website'=>$request->website,
                'kepsek'=>$request->kepsek,
                'nip'=>$request->nip,
                'tagline'=>$request->tagline
                
            ]);
    return redirect()->back()->with(['title'=>'Setting', 'showModal'=> 'Data has been updated successfully!']);  
     }

    public function logo(Request $request, String $id)
    {
         $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logo') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logo' => null,
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logo==""){
                 $imagePath = $request->file('logo')->store('img/sekolah','public');
           
            $skl->update([
                'logo' => $imagePath,
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logo')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logo' => $imagePath,
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }

    //logo web
    public function logoweb(Request $request, String $id)
    {
         $request->validate([
            'logoweb' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logoweb') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoweb' => null,
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logoweb==""){
                 $imagePath = $request->file('logoweb')->store('img/sekolah','public');
           
            $skl->update([
                'logoweb' => $imagePath,
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logoweb);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logoweb')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoweb' => $imagePath,
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','logoweb updated successfully');
    }
// banner

     public function banner(Request $request, String $id)
    {
         $request->validate([
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('banner') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'banner' => null,
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->banner==""){
                 $imagePath = $request->file('banner')->store('img/sekolah','public');
           
            $skl->update([
                'banner' => $imagePath,
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->banner);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('banner')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'banner' => $imagePath,
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Banner updated successfully');
    }
    public function logofb(Request $request, String $id)
    {
         $request->validate([
            'logofb' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logofb') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logofb' => null,
                'urlfb'=>$request->urlfb
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logofb==""){
                 $imagePath = $request->file('logofb')->store('img/sekolah','public');
           
            $skl->update([
                'logofb' => $imagePath,
                'urlfb'=>$request->urlfb
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logofb);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logofb')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logofb' => $imagePath,
                'urlfb'=>$request->urlfb
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }
    public function logotiktok(Request $request, String $id)
    {
         $request->validate([
            'logotiktok' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logotiktok') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logotiktok' => null,
                'urltiktok'=>$request->urltiktok
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logotiktok==""){
                 $imagePath = $request->file('logotiktok')->store('img/sekolah','public');
           
            $skl->update([
                'logotiktok' => $imagePath,
                'urltiktok'=>$request->urltiktok
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logotiktok);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logotiktok')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logotiktok' => $imagePath,
                'urltiktok'=>$request->urltiktok
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }

    public function logoig(Request $request, String $id)
    {
         $request->validate([
            'logoig' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logoig') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoig' => null,
                'urlig'=>$request->urlig
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logoig==""){
                 $imagePath = $request->file('logoig')->store('img/sekolah','public');
           
            $skl->update([
                'logoig' => $imagePath,
                'urlig'=>$request->urlig
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logoig);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logoig')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoig' => $imagePath,
                'urlig'=>$request->urlig
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }

    //youtube
    public function logoyt(Request $request, String $id)
    {
         $request->validate([
            'logoyt' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logoyt') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoyt' => null,
                'urlyt'=>$request->urlyt
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logoyt==""){
                 $imagePath = $request->file('logoyt')->store('img/sekolah','public');
           
            $skl->update([
                'logoyt' => $imagePath,
                'urlyt'=>$request->urlyt
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logoyt);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logoyt')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logoyt' => $imagePath,
                'urlyt'=>$request->urlyt
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }
}