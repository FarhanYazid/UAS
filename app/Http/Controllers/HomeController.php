<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1915101031',
            'nama'=>'Farhan Yazid Lahji'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";
        
        return view('admin.dashboard', compact('title'));
    }
    public function tanaman(){        
        return view('admin.tanaman');
    }
    public function form(){        
        return view('admin.form');
    }
}
?>