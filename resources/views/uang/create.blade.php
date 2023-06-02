@extends('layout/aplikasi')

@section('konten')

<div class="min-h-screen bg-bermuda">
  <br>
  <form method="post" action="/uang">
    @csrf
    <div class="w-1/4 mx-auto">
      <div class="mb-6">
        <label for="bulan" class="block mb-2 text-lg font-bold text-white text-center dark:text-white">Masukan
          Bulan</label>
        <input type="bulan" name="bulan" id="bulan"
          class="shadow-sm bg-kolom border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
          value="{{ Session::get('bulan') }}">
      </div>
      {{-- <div class="mb-6">
        <label for="id_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan kembali ID
          Anda</label>
        <input type="id_user" id="id_user" name="id_user"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
          value="{{ Session::get('id_user') }}">
      </div> --}}
      <div class="mb-6">
        <label for="jumlah_uang_user" class="block mb-2 text-lg font-bold text-white text-center dark:text-white">Jumlah
          Uang</label>
        <input type="jumlah_uang_user" id="jumlah_uang_user" name="jumlah_uang_user"
          class="shadow-sm bg-kolom border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
          value="{{ Session::get('jumlah_uang_user') }}">
      </div>
      <div class="flex flex-col lg:flex-row gap-5">
        <button type="submit"
          class="text-white bg-temu hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
        <a href='/uang' type="button"
          class="text-white  bg-register hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
      </div>
    </div>
  </form>
</div>



@endsection