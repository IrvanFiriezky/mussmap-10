@extends('layout/aplikasi')

@section('konten')

{{-- {{ json_encode($data) }} --}}
<div class="relative overflow-x-auto shadow-md min-h-screen bg-bermuda">
    <div class="my-8 mx-auto w-56">
        <a href="/uang/create" type="button"
            class="text-white bg-temu hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full mx-auto">Masukan Bulan Baru</a>
    </div>
    <diV class="mx-auto my-auto">
        <table
            class="text-xs mx-auto text-white h-1/2 uppercase rounded-xl bg-slate-700 dark:bg-gray-700 dark:text-gray-400 sm:w-1/5 lg:w-1/2">
            <thead class="border-2 border-white bg-abu-terang rounded-t-xl">
                <tr>
                    {{-- <th scope="col" class="px-6 py-3">ID</th> --}}
                    <th scope="col" class="lg:px-6 lg:py-3">Bulan</th>
                    <th scope="col" class="lg:px-6 lg:py-3">Uang Tersimpan</th>
                    <th scope="col" class="lg:px-6 lg:py-3">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="border-2 border-white dark:bg-gray-800 dark:border-gray-700">
                    {{-- <td class="px-6 py-4 border-2 border-white">{{ $item->id }}</td> --}}
                    <td class="lg:px-6 lg:py-3 border-2 border-white text-xl font-medium">{{ $item->bulan }}</td>
                    <td class="lg:px-6 lg:py-3 border-2 border-white  text-xl font-medium">Rp.{{
                        number_format($item['jumlah_uang_user'], 0, ',', '.') }}</td>
                    <td class="py-4 border-2 border-white flex flex-row-reverse mx-auto">
                        {{-- <a type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            href='{{ url(' /uang/'.$item->nama) }}'>Detail</a> --}}
                        <a type="button"
                            class="text-white bg-temu hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            href='{{ url('/uang/'.$item->id.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Yakin Hapus Data ?')" class='d-inline'
                            action="{{ '/uang/'.$item->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="text-white bg-register hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div class="w-1/2 mt-10 mx-auto">
            {{ $data->links() }}
        </div>
    </diV>
</div>


@endsection