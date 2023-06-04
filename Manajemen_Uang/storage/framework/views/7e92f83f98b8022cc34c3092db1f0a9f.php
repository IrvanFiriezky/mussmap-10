

<?php $__env->startSection('konten'); ?>

<div class="min-h-screen bg-bermuda">
<form method="post" action=<?php echo e('/uang/'.$data->id); ?>>
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="w-1/4 mx-auto">
      <br>
    <div class="mb-6"> 
      
      <label for="bulan" class="block mb-2 text-lg font-bold text-white text-center dark:text-white"> Bulan</label>
      
      <h1 for='bulan' class="block mb-2 text-lg font-bold text-white text-center dark:text-white"> <?php echo e($data->bulan); ?> </h1>
    </div> 
    <div class="mb-6">
      <label for="jumlah_uang_user" class="block mb-2 text-lg font-bold text-white text-center dark:text-white">Jumlah Uang</label>
      <input type="jumlah_uang_user" id="jumlah_uang_user" name ="jumlah_uang_user" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?php echo e($data->jumlah_uang_user); ?>">
    </div>
    <div class="flex flex-col lg:flex-row gap-5">
    <button type="submit" class="text-white bg-temu hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    <a href='/uang' type="button" class="text-white  bg-register hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
    </div>
  </div>
  </form>
</div>
  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\SKRIPSI\Program_Uang_Saku\Manajemen_Uang\resources\views/uang/edit.blade.php ENDPATH**/ ?>