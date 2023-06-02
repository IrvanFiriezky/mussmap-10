<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view('sesi/index');
    }


    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'password wajib diisi'
                
            ]);

            $infologin = [
                'email' =>  $request->email,
                'password' => $request->password
            ];

            if(Auth::attempt($infologin)){
                //bila otentikasi suksues

                return redirect('uang')->with('success', 'berhasil login');
            } else {
                // kalau gagal
                return redirect('sesi')->withErrors('Username dan Password tidak valid');
            }

    }
    public function logout(){
        Auth::logout();
        return redirect('/sesi')->with('success','berhasil logout');
    }

    public function register()
    {
        return view('sesi/register');
    }

    public function create(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
           
        ], [
                'nama.required' => 'Nama wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'silahkan masukan email yang valid',
                'email.unique' => 'email sudah digunakan',
                'password.required' => 'password wajib diisi',
                'password.min' => 'minimum 6 Karakter Password'
            
                
            ]);

            $data = [
             
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password)
               

            ];
            User::create($data);

            $infologin = [
                'email' =>  $request->email,
                'password' => $request->password
            ];

            if(Auth::attempt($infologin)){
                //bila otentikasi suksues

                return redirect('uang')->with('success', Auth::user()->nama . 'berhasil login');
            } else {
                // kalau gagal
                return redirect('sesi')->withErrors('Username dan Password tidak valid');
            }
    }
}