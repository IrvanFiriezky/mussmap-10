
<?php $__env->startSection('konten'); ?>

<body class="bg-blend-multiply bg-ungu-janda/75 bg-[url('/public/images/jpeg/Gambar_duit.jpg')] bg-cover bg-center">
    <div class="flex flex-col mx-8 lg:mx-auto my-10  lg:w-1/2 border-2 border-white bg-monkey rounded-xl">
        <div class="mx-auto my-11">
            <h1 class="text-xl font-bold text-white text-center">Hasil Manajemen Uang Saku</h1>
            <div class="mb-10 mx-auto">
                

                
                <p class="text-xl font-thin text-white text-center">Uang yang disimpan: Rp <?php echo e(number_format($simpan, 0, ',', '.')); ?> </p>

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
            href="/uang">Back To Home</a>
    </div>
    
</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\SKRIPSI\Program_Uang_Saku\Manajemen_Uang\resources\views/uang/hasillAcc.blade.php ENDPATH**/ ?>