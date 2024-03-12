
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/ticket.css')); ?>"
>

<div class="ticketSection2">
    <div class="ticketSection2Photo">
        <img src="<?php echo e(asset('image/SAMPLE.jpg')); ?>" alt="jpg">
        <h3>TICKET SAMPLE</h3>
        <p>AFTER YOUR PURCHASEMENT | WE WILL SENT THE TICKET VIA EMAIL</p>
    </div>
</div>
<div class="ticketSection">
    <div class="ticketSectionContent col-md-6">
        <h3 id="tksc1">MUSIC</h3>
        <h3 id="tksc2">IS</h3>
        <h3 id="tksc3">FREEDOM</h3>
    <div class="ticketSectionContent2 col-md-6">
        <img src="<?php echo e(asset('image/ticketSection1Photo.jpeg')); ?>" alt="jpeg">
    </div>
    </div>
</div>

<div class="ticketSection3">
    <div class="ttSc3Content col-md-6">
        <img src="<?php echo e(asset('image/fourthPhoto.jpeg')); ?>" alt="jpeg">
    </div>
    <div class="ttsc3Content2 col-md-6">
        <h3>WE WILL BE WAITING</h3>
        <h3 id="ticketYou">YOU</h3>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\JENSON\web development\projectConcert\concertProject (latest)\concertProject\resources\views/ticket.blade.php ENDPATH**/ ?>