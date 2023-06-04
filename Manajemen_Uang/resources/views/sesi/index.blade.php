
@extends('layout/aplikasi')

@section('konten')
<body>
    <div class="flex justify-center items-center h-screen bg-bermuda">
        <div class="lg:w-1/3 w-1/2 bg-monkey lg:p-8 p-2 rounded-lg shadow">
            <h2 class="text-2xl mb-4 font-bold text-white">Login</h2>
            <form action="/sesi/login" method="POST">
                @csrf
                @if ($errors->has('email'))
                <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-lg font-semibold text-white">Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded-md bg-kolom border-2  border-white px-4 py-2" value="{{ Session::get('email') }}">
                </div>
                @if ($errors->has('password'))
                <span class="text-red-500">{{ $errors->first('password') }}</span>
                @endif
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-lg font-semibold text-white">Password</label>
                    <input type="password" name="password" id="password" class="w-full rounded-md bg-kolom border-2  border-white px-4 py-2">
                </div>
                <div class="flex lg:flex-row gap-3 flex-col lg:block">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Login</button>
                    <a type="button" href="/" class="bg-red-500 text-white text-center px-4 py-2 rounded-md">Back</a>
                </div>
            </form> 
        </div>
    </div>
</body>

@endsection
