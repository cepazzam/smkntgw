<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $set = Sekolah::first();
        return view('admin.page.dashboard', compact('title','set'));
    }
}
