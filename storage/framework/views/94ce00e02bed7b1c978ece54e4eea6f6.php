    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
       
        <title>T.H.E CONCERT</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/layout.css')); ?>">
       


    </head>
    <body>
        <div class="header">
            <a href="<?php echo e(route('home')); ?>">HOME</a>
            <a href="<?php echo e(route('displayConcert')); ?>" >CONCERT</a>
            <a href="<?php echo e(route('ticket')); ?>">TICKET</a>
            <a href="<?php echo e(route('contactUs')); ?>">CONTACT US </a>
        </div>
        <div class="contentWrapper">
            <div class="content">
                    <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        
    </body>
    </html>
<?php /**PATH C:\JENSON\web development\projectConcert\concertProject\resources\views/layout.blade.php ENDPATH**/ ?>