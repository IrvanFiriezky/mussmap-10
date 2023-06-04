<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Perkalian</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>


<body class="min-h-screen bg-blend-multiply bg-ungu-janda/75 bg-[url('/public/images/jpeg/Gambar_duit.jpg')] bg-cover bg-center">
    <div class="flex flex-col mx-auto my-10  w-1/2 border-2 border-white bg-monkey rounded-xl">
        <div class="mx-auto my-11">
            <h1 class="text-xl font-bold text-white text-center">Hasil Manajemen Uang Saku</h1>
            <div class="mb-10 mx-auto">
                

                
                <p class="text-xl font-thin text-white text-center">Uang yang disimpan: Rp <?php echo e(number_format($simpan, 0,
                    ',', '.')); ?> </p>

            </div>
            <table class="border-2 border-white ">
                <thead>
                    <tr class="border-2 border-white w-64 rounded-t-md">
                        <th class="w-56 text-white bg-abu-terang">Nama Pengeluaran</th>
                        <th class="w-56 text-white bg-abu-terang">Harga</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $selected_expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="w-56 text-white"><?php echo e($expense['name']); ?></td>
                        <td class="w-56 text-white">Rp <?php echo e(number_format($expense['price'], 0, ',', '.')); ?></td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <a type="button"
            class="text-white border-2 border-white bg-green-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mb-10 dark:bg-blue-600 dark:hover:bg-blue-700 mx-auto dark:focus:ring-blue-800 w-36"
            href="/">Back To Home</a>
    </div>
    <footer class="bg-bermuda-tua dark:bg-gray-800">
        <div class="w-screen p-24 md:flex md:items-center md:justify-between">
            <div class="flex flex-col">
                <h1 class="font-bold text-2xl text-white">MUSSMAP</h1>
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">MUSSMAP™</a>. All Rights Reserved.
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


</html><?php /**PATH C:\Users\user\Downloads\SKRIPSI\Program_Uang_Saku\Manajemen_Uang\resources\views//hasil.blade.php ENDPATH**/ ?>