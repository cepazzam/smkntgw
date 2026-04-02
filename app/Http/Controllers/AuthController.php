<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sekolah;

use Str;
use Hash;
use Auth;
class AuthController extends Controller
{

public function index(){
        $title = 'User list';
        $users = User::latest()->paginate(10);
        return view('auth.list',compact('title','users'));
    }
    public function login(){
        $title = 'Login Administrator';
        $skl =Sekolah::first();
        return view('auth.login',compact('title','skl'));
    }
    public function loginpost(Request $request){
        $request->validate([
            'email' =>'required',
            'password'=>'required'
        ]);
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)){
            if(Auth::User()->is_role == '2'){
                return redirect()->intended('dashboard');
            }else if(Auth::User()->is_role =='1'){
                return redirect()->intended('dashboard');
            }
            else if(Auth::User()->is_role=='0'){
                 return redirect()->intended('user/dashboard');
            }else{
                return redirect()->route('login')->with('info','data yang anda masukan tdk terdaftar');

            }
        }
        
        else{
            return redirect()->back()->with('info','masukan data anda dengan benar');
        }
    }
    public function registrasi(){
        return view('auth.registrasi');
    }

    public function registrasipost(Request $request){
     $request->validate([
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required',
        'confirm_password'=>'required_with:password|same:password|min:6'
     ]);
     $user = new User;
     $user->name = trim($request->name);
     $user->email = trim($request->email);
     $user->password = Hash::make($request->password);
     $user->is_role = trim($request->is_role);
     $user->remember_token = Str::random(50);
     $user->save();


    return redirect()->back()->with(['title'=>'User Saved', 'showModal'=> 'Data has been saved successfully!']);  
    
    }

     public function editpassword()
    {
    $title ="";
    return view('auth.editpassword', compact('title'));
    }

    public function repassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
#Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
    return redirect()->back()->with(['bg'=>'danger','title'=>'Ganti Password', 'showModal'=> 'Password gagal diperbaharui']);  
        }
#Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
    return redirect()->route('dashboard')->with(['title'=>'User Password', 'showModal'=> 'Password updated successfully!']);  
}
   
    
    


    public function userlist(){

        $user = User::latest()->paginate(5);
        return view('auth.userlist', compact('user'));
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
    return redirect()->back()->with(['title'=>'User Delete', 'showModal'=> 'Data has been deleted successfully!']);  

    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}
