
<?php $__env->startSection('content'); ?>
<h2>Выберите интересующую Вас новость в категории <?php echo e($checkedCat['cat_title']); ?></h2>
    <div class="col-lg-4">
        <?php $__empty_1 = true; $__currentLoopData = $checkedCat['cat_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>       
                <div class="trand-right-cap">                               
                       <h4><a href="/news/<?php echo e($checkedCat['cat_id']); ?>/<?php echo e($new['new_id']); ?>"><?php echo e($new['new_title']); ?></a></h4>
                </div>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h4>Новостей нет</h4>       
     <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templataa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/first/resources/views/task2/newsList.blade.php ENDPATH**/ ?>