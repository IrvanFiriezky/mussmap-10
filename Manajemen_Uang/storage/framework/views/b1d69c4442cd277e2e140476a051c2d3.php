<?php if($errors->any()): ?>
 <diV class="bg-bermuda">
    <div class="alert alert-danger w-1/2 mx-auto rounded-lg bg-register px-6 py-5 text-base text-white" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
 </diV>
<?php endif; ?>

<?php if(Session::get('success')): ?>
<diV class="bg-bermuda">
    <div class="alert alert-success w-1/2 mx-auto rounded-lg bg-temu px-6 py-5 text-base text-white " role="alert">
        <?php echo e(Session::get('success')); ?>      
    </div>
</diV>

<?php endif; ?><?php /**PATH C:\Users\user\Downloads\SKRIPSI\Program_Uang_Saku\Manajemen_Uang\resources\views/komponen/pesan.blade.php ENDPATH**/ ?>