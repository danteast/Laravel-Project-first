
<?php $__env->startSection('content'); ?>
<div class="col-8 offset-2">
    <h3>Заполните форму обратной связи</h3>
    <form method="post" action="<?php echo e(route('news.store')); ?>">
        <p>Ваше имя<input class="form-control" name="FIO" value="<?php echo e(old('name')); ?>"></p><br>
        <p>Ваш Email<input class="form-control" name="email" type="email" value="<?php echo e(old('email')); ?>"></p><br>
        <p>Ваш телефон<input class="form-control" name="telnumber" type="phone" value="<?php echo e(old('email')); ?>"></p><br>
        <input type='submit' value="Отправить"><br><br>

    </form>

</div>    
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templataa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/first/resources/views/task2/backform.blade.php ENDPATH**/ ?>