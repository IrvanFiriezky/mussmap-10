@extends('layout/aplikasi')

@section('konten')
<div class="my-auto relative overflow-x-auto shadow-md min-h-screen bg-purple-950">
    <div class="my-8 mx-auto w-1/2">
        <a href='/uang'
            class="text-white bg-orange-600 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">BACK</a>
    </diV>
    <div class="mx-auto my-auto w-1/4 h-44 bg-slate-500 rounded-xl">
        <h1 class="text-center text-2xl font-semibold text-white">{{ $data->nama }}</h1>
        <p>
        <h2 class="text-center text-xl font-light text-white">jumlah uang</h2>
        <h2 class="text-center text-xl font-light text-white">{{ $data->jumlah_uang }}</h2>
        </p>
        <p>
        <h2 class="text-center text-xl font-light text-white">email</h2>
        <h2 class="text-center text-xl font-light text-white">{{ $data->email }}</h2>
        </p>
    </div>
</div>
@endsection