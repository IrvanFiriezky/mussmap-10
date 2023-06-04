

<?php $__env->startSection('konten'); ?>


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
                    
                    <th scope="col" class="lg:px-6 lg:py-3">Bulan</th>
                    <th scope="col" class="lg:px-6 lg:py-3">Uang Tersimpan</th>
                    <th scope="col" class="lg:px-6 lg:py-3">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-2 border-white dark:bg-gray-800 dark:border-gray-700">
                    
                    <td class="lg:px-6 lg:py-3 border-2 border-white text-xl font-medium"><?php echo e($item->bulan); ?></td>
                    <td class="lg:px-6 lg:py-3 border-2 border-white  text-xl font-medium">Rp.<?php echo e(number_format($item['jumlah_uang_user'], 0, ',', '.')); ?></td>
                    <td class="py-4 border-2 border-white flex flex-row-reverse mx-auto">
                        
                        <a type="button"
                            class="text-white bg-temu hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            href='<?php echo e(url('/uang/'.$item->id.'/edit')); ?>'>Edit</a>
                        <form onsubmit="return confirm('Yakin Hapus Data ?')" class='d-inline'
                            action="<?php echo e('/uang/'.$item->id); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button
                                class="text-white bg-register hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
        <div class="w-1/2 mt-10 mx-auto">
            <?php echo e($data->links()); ?>

        </div>
    </diV>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\SKRIPSI\Program_Uang_Saku\Manajemen_Uang\resources\views/uang/index.blade.php ENDPATH**/ ?>