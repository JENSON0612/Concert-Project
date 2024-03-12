<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>T.H.E CONCERT</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/welcome.css')); ?>">

</head>
<body>
    <div class="videobg">
    <video autoplay loop muted class="background-video">
        <source src="<?php echo e(asset('video/background video.mp4')); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="welcomeTitle">
        <h1 class="welcomeWord">T.H.E CONCERT</h1>
        <h6 class="welcomeWord2">HAVE | A | NICE | DAY | WITH | AN | UNFORGETTABLE | NIGHT</h6>
        <a href="<?php echo e(route('displayConcert')); ?>"class="joinLink">JOIN</a>
    </div>
</div>
        <script type="text/javascript" src="js/welcome.js"></script>

</body>
</html>
<?php /**PATH C:\Users\user\Desktop\DEGREE\Web Development\concertProject\resources\views/welcome.blade.php ENDPATH**/ ?>