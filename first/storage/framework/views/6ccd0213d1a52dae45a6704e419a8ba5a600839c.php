<!doctype html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Новостной канал</title>         
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">

            <link rel="stylesheet" href="<?php echo e(asset('assets/css/ticker-style.css')); ?>">

            <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">

            <link rel="stylesheet" href="<?php echo e(asset('assets/css/slicknav.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-all.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
   </head>

   <body>
    <div class="blackBlock"> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navigation','data' => []]); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> </div>
   

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>  <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    
    <main>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
</main>

 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo e(asset('./assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo e(asset('./assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/bootstrap.min.js')); ?>"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo e(asset('./assets/js/jquery.slicknav.min.js')); ?>"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo e(asset('./assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/slick.min.js')); ?>"></script>
        <!-- Date Picker -->
        <script src="<?php echo e(asset('./assets/js/gijgo.min.js')); ?>"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo e(asset('./assets/js/wow.min.js')); ?>"></script>
		<script src="<?php echo e(asset('./assets/js/animated.headline.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/jquery.magnific-popup.js')); ?>"></script>

        <!-- Breaking New Pluging -->
        <script src="<?php echo e(asset('./assets/js/jquery.ticker.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/site.js')); ?>"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo e(asset('./assets/js/jquery.scrollUp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/jquery.nice-select.min.js')); ?>"></script>
		<script src="<?php echo e(asset('./assets/js/jquery.sticky.js')); ?>"></script>
        
        <!-- contact js -->
        <script src="<?php echo e(asset('./assets/js/contact.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/jquery.form.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/mail-script.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo e(asset('./assets/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/js/main.js')); ?>"></script>
        
    </body>
</html><?php /**PATH /home/vagrant/first/resources/views/layouts/templataa.blade.php ENDPATH**/ ?>