<?php

namespace App\Http\Controllers;

use App\Models\Uang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$data = uang::all();
        $data = Uang::where('id_user' , Auth::user()->id)->orderBy('bulan', 'desc')->simplePaginate(3);
        return view('uang/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('uang/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('bulan',$request->bulan);
        Session::flash('jumlah_uang_user',$request->jumlah_uang);

        //
        $request->validate([
            'bulan' => 'required',
            'jumlah_uang_user' => 'required'
        ], [
            'bulan.required' => 'Bulan wajib di isi',
            'jumlah_uang_user' => 'Jumlah Uang wajib diisi'
        ]);
        
        

        $data = [
            'bulan' => $request->input('bulan'),
            'id_user'=> auth()->id(),
            'jumlah_uang_user' => $request->input('jumlah_uang_user')

        ];
        Uang::create($data);
        return redirect('/uang')->with('success', 'Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_user)
    {
        //
        $data = Uang::where('id_user', $id_user)->first();
        return view('uang/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        //
        $data = Uang::where('id', $id)->first();
        // dd($data);
        return view('uang/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jumlah_uang_user' => 'required'
        ], [
            'jumlah_uang_user' => 'Jumlah Uang wajib diisi'
        ]);

        $data = [
            
            'jumlah_uang_user' => $request->input('jumlah_uang_user')
        ];

        Uang::where('id',$id)->update($data);
        return redirect('/uang')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Uang::where('id',$id)->delete();
        return redirect('/uang')->with('success', 'Berhasil hapus data');
    }
}
