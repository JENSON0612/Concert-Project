  <!-- Extending the 'layout' view -->

<?php $__env->startSection('content'); ?>  <!-- Start of the 'content' section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.0/html2pdf.bundle.js"></script>

<link rel="stylesheet" href="<?php echo e(asset('css/success.css')); ?>">

<div class="showTicket">
    <div class="ticketShown">
        <p class="hidden">Type: <?php echo e($tickets->type); ?></p>
        <img id="gateImage" src="<?php echo e(asset('image/GATE' . $tickets->type . '.jpg')); ?>" alt="jpg">
    </div>
    <br>
    <a href="<?php echo e(url('print_pdf')); ?>">Download</a>  <!-- Link to trigger the PDF download -->
</div>

<?php $__env->stopSection(); ?>  <!-- End of the 'content' section -->

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\JENSON\web development\projectConcert\concertProject (latest)\concertProject\resources\views/success.blade.php ENDPATH**/ ?>