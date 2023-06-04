@extends('layout/aplikasi')
@section('konten')

<body class="bg-blend-multiply bg-ungu-janda/75 bg-[url('/public/images/jpeg/Gambar_duit.jpg')] bg-cover bg-center">
    <div class="flex flex-col mx-8 lg:mx-auto my-10  lg:w-1/2 border-2 border-white bg-monkey rounded-xl">
        <div class="mx-auto my-11">
            <h1 class="text-xl font-bold text-white text-center">Hasil Manajemen Uang Saku</h1>
            <div class="mb-10 mx-auto">
                {{-- <h1>{{ $hasilBudget }}</h1> --}}

                {{-- <p>Uang Saku Anda: Rp {{ number_format($uang_saku, 0, ',', '.') }} </p> --}}
                <p class="text-xl font-thin text-white text-center">Uang yang disimpan: Rp {{ number_format($simpan, 0, ',', '.') }} </p>

            </div>
            <table class="border-2 border-white ">
                <thead>
                    <tr class="border-2 border-white w-64 rounded-t-md">
                        <th class="w-56 text-white bg-abu-terang">Nama Pengeluaran</th>
                        <th class="w-56 text-white bg-abu-terang">Harga</th>
                        {{-- <th class="w-56 text-white bg-slate-700">Berat</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($selected_expenses as $expense)
                    <tr>
                        <td class="w-56 text-white">{{ $expense['name'] }}</td>
                        <td class="w-56 text-white">Rp {{ number_format($expense['price'], 0, ',', '.') }}</td>
                        {{-- <td class="w-56">{{ $expense['bobot']}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a type="button"
            class="text-white border-2 border-white bg-green-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mb-10 dark:bg-blue-600 dark:hover:bg-blue-700 mx-auto dark:focus:ring-blue-800 w-36"
            href="/uang">Back To Home</a>
    </div>
    
</body>


@endsection