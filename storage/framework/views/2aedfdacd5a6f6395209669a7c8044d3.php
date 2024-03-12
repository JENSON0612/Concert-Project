
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<div class="firstSection">
    <div class="fsleft col-md-6">
        <h1>WELCOME<br>TO<br>JCF TICKET BOOKING WEBSITE</h1>
        <button>BOOK TICKET</button>
        <button>VIEW CONCERT</button>
    </div>
    <div class="fsright col-md-6">
        <img id="photo2" src="<?php echo e(asset('image/fsrightphoto2.jpg')); ?>" alt="jpg">
         <img id="photo1" src="<?php echo e(asset('image/fsrightphoto.jpeg')); ?>" alt="jpeg">
         <img id="photo3" src="<?php echo e(asset('image/fsrightphoto3.jpeg')); ?>" alt="jpeg">
    </div>
</div>
<div class="secondSection">
    <div class="scdUpperSection">
        <img src="<?php echo e(asset('image/scdphoto1.jpeg')); ?>" alt="jpeg">
    </div>
    <div class="scdlowerSection">
        <div class="scdSmallTitle col-md-6">
            <h3>BOOK IT</h3>
        </div>
        <div class="scdSmallTitle2 col-md-6">
            <div class="row">
                <h3>ANYTIME</h3>
                <h3>ANYWHERE</h3>
            </div>
        </div>
    </div>
    <p>Welcome to the JCF TICKET BOOKING website! Choose the concert you desire and reserve your tickets. Let's enjoy the music celebration together!</p>
</div>
<div class="thirdSection">
    <div class="thirdTitle">
        <h3>FEEL THE FREEDOM</h3><br>
        <p>RELEASE YOUR STRESS THAT HAS KEEP ROLLING INSIDE YOUR MIND</p>
    </div>
    <div class="thirdPhoto">
        <div class="photo1 col-md-4">
            <img src="<?php echo e(asset('image/thirdPhoto1.jpeg')); ?>" alt="jpeg">
        </div>
        <div class="photo2 col-md-4">
            <img src="<?php echo e(asset('image/thirdPhoto2.jpeg')); ?>" alt="jpeg">
        </div>
        <div class="photo3 col-md-4">
            <img src="<?php echo e(asset('image/thirdPhoto3.png')); ?>" alt="png">
        </div>
    </div>
</div>
<div class="fourthSection">
    <div class="fourthTitle col-md-6">
        <h3>FULLFILL YOUR</h3>
        <h3 id="dream">DREAM</h3>
        <button><p  >VIEW CONCERT</p></button>
    </div>
    <div class="fourthPhotoSection col-md-6">
        <img src="<?php echo e(asset('image/fourthPhoto.jpeg')); ?>" alt="jpeg">
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\OneDrive - Southern University College\Desktop\SUC\Project(Coding)\concertProject\concertProject\resources\views/home.blade.php ENDPATH**/ ?>