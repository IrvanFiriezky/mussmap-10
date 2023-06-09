@extends('layout/aplikasi')

@section('konten')
<body>
    <div class="flex justify-center items-center h-screen bg-bermuda">
        <div class="lg:w-1/3 w-1/2 bg-monkey p-2 lg:p-8 rounded-lg shadow">
            <h2 class="text-2xl mb-4 font-bold text-white">Register</h2>
            <form action="/sesi/create" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block mb-2 text-lg font-semibold text-white">Name</label>
                    <input type="text" name="nama" id="nama" class="w-full rounded-md bg-kolom border-2  border-white px-4 py-2" value="{{ Session::get('nama') }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-lg font-semibold text-white">Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded-md bg-kolom border-2  border-white px-4 py-2" value="{{ Session::get('email') }}">
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-lg font-semibold text-white">Password</label>
                    <input type="password" name="password" id="password" class="w-full rounded-md bg-kolom border-2  border-white px-4 py-2">
                </div>

                <div>
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Register</button>
                    <a type="button" href="/" class="bg-red-500 text-white px-4 py-2 rounded-md">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
