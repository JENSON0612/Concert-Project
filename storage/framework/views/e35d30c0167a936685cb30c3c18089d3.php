    
    <?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/displayConcert.css')); ?>">
    <div class="videobg">
        <video autoplay loop muted class="background-video">
            <source src="<?php echo e(asset('video/background video.mp4')); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
        <div class="container" id="app" href="">
            <?php $__currentLoopData = $concerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-wrap">
                <div class="card" id="card1">
                    <div class="card-bg">
                        <img src="<?php echo e(asset('image/')); ?>/<?php echo e($concert->concertImage); ?>" alt="jpeg">
                    </div>
                    <div class="card-info">
                        <h1><?php echo e($concert->concertName); ?></h1>
                        <a class="card-info a" href="<?php echo e(route('concertSection', ['id' => $concert->id])); ?>">
                            Buy Ticket
                        </a>
                    </div>
                </div>
            </div>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <script type="text/javascript" src="js/displayConcert.js"></script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\theru\Downloads\concertProject\concertProject\resources\views/displayConcert.blade.php ENDPATH**/ ?>