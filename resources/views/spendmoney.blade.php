<!DOCTYPE html>
<html>

<head>
	<title>Knapsack</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blend-multiply bg-ungu-janda/75 bg-[url('/public/images/jpeg/Gambar_duit.jpg')] bg-cover bg-center">
	<div class="h-1/4 w-1/2 mx-auto mt-6">
		<h1 class="text-5xl font-bold text-white text-center">SELAMAT DATANG DI MUSSMAP</h1>
	</div>
	<div class="flex flex-col mx-4 lg:mx-auto my-10  lg:w-1/3 border-2 border-white bg-monkey rounded-xl">
		<form method="post" action="/hasil" class=" mx-auto my-auto">
			@csrf

			<div class="flex flex-col lg:flex-row">
				<label for="uang_saku" class="text-1xl mt-5 font-bold text-white">Uang Saku</label>
				<input class="lg:ml-20 mt-10 bg-kolom rounded-md border-2 border-white" type="number" name="uang_saku"
					id="uang_saku"><br><br>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<div>
					<label class="text-1xl font-bold text-white">Pilihan Simpan</label><br>
				</div>
				<div class="lg:ml-10">
					<input class="border-2 border-white bg-kolom text-white" type="radio" name="pilihan_simpan"
						value="10"><a class="text-lg font-bold text-white">10%</a><br>
					<input class="border-2 border-white bg-kolom text-white" type="radio" name="pilihan_simpan"
						value="20"><a class="text-lg font-bold text-white">20%</a><br>
					<input class="border-2 border-white bg-kolom text-white" type="radio" name="pilihan_simpan"
						value="30"><a class="text-lg font-bold text-white">30%</a><br><br>
				</div>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<label for="makanan" class="text-1xl font-bold text-white">Harga Makanan</label>
				<input class="rounded-md  bg-kolom border-2 border-white lg:ml-10" type="number" name="makanan"
					id="makanan"><br><br>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<label for="transportasi" class="text-1xl font-bold text-white">Harga Transportasi</label>
				<input class="rounded-md bg-kolom border-2 border-white lg:ml-5" type="number" name="transportasi"
					id="transportasi"><br><br>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<label for="hiburan" class="text-1xl font-bold text-white">Harga Hiburan</label>
				<input class="rounded-md bg-kolom border-2 border-white lg:ml-12" type="number" name="hiburan"
					id="hiburan"><br><br>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<label for="pulsa" class="text-1xl font-bold text-white">Harga Pulsa</label>
				<input class="rounded-md bg-kolom border-2 border-white lg:ml-16" type="number" name="pulsa"
					id="pulsa"><br><br>
			</div>

			<div class="flex flex-col lg:flex-row py-5">
				<label for="kebutuhan_pokok" class="text-1xl font-bold text-white">Kebutuhan Pokok</label>
				<input class="rounded-md bg-kolom border-2 border-white lg:ml-6" type="number" name="kebutuhan_pokok"
					id="kebutuhan_pokok"><br><br>
			</div>


			<button
				class="text-white bg-temu hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
				type="submit" value="Hitung"> Result ! </button>

			<a type="button"
				class="text-white bg-login hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
				href="/sesi"> Log In ! </a>

			<a type="button"
				class="text-white bg-register hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
				href="/sesi/register"> Registration ! </a>
		</form>

	</div>
	<footer class="bg-bermuda-tua dark:bg-gray-800">
		<div class="w-screen p-24 md:flex md:items-center md:justify-between">
			<div class="flex flex-col">
				<h1 class="font-bold text-2xl text-white">MUSSMAP</h1>
				<span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
						class="hover:underline">MUSSMAP™</a>. All Rights Reserved.
				</span>
			</div>
			<ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
				<li>
					<a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
				</li>
				<li>
					<a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
				</li>
				<li>
					<a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
				</li>
				<li>
					<a href="#" class="hover:underline">Contact</a>
				</li>
			</ul>
		</div>
	</footer>
</body>

</html>