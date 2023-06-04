<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UangController extends Controller
{
    public function index()
    {
        //$data = uang::all();
        $data = user::orderBy('jumlah_uang', 'asc')->paginate(1);
        return view('uang/index')->with('data', $data);
    }

    public function detail($nama)
    {
        $data = user::where('nama', $nama)->first();
        return view('uang/show')->with('data', $data);
    }

    public function create(){
        
    }

    public function delete(){

    }
}
