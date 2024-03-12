
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/concertSection.css')); ?>">
    <?php $__currentLoopData = $concerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="section1">
        <img src="<?php echo e(asset('image')); ?>/<?php echo e($concert->concertSectionBackgroundImg); ?>" alt="jpg">
        <div class="mask">
            <div class="row">
                <div class="col-md-6 innerSection1">
                    <h1>BOOK YOUR TICKET NOW</h1>
                    <p><?php echo e($concert->concertDescription); ?></p>
                </div>
                <div class="col-md-6 innerSection2">
                <img src="<?php echo e(asset('image')); ?>/<?php echo e($concert->concertImage); ?>" alt="png">
                    <h1><?php echo e($concert->concertName); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section2">
            <div class="content2">
            <div class="row">
                <h1>CONCERT PHOTO</h1>
                <p>FEEL THE HYPE! ENJOY THE CONCERT!</p>
                    <div class="photoContainer">
                        <div class="photo col-md-3">
                            <img src="<?php echo e(asset('image')); ?>/<?php echo e($concert->concertPhoto1); ?>" alt="jpg">
                            <h5><?php echo e($concert->concertPhotoDes1); ?></h5>
                        </div>
                        <div class="photo col-md-3">
                            <img src="<?php echo e(asset('image')); ?>/<?php echo e($concert->concertPhoto2); ?>" alt="jpg">
                            <h5><?php echo e($concert->concertPhotoDes2); ?></h5>
                        </div>
                        <div class="photo col-md-3">
                            <img src="<?php echo e(asset('image')); ?>/<?php echo e($concert->concertPhoto3); ?>" alt="jpg">
                            <h5><?php echo e($concert->concertPhotoDes3); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="sectionChoosing">
        <div class="screen">
            <h3>SCREEN</h3>
        </div>
        <div class="seatContainer">
            <div class="row">
                <div class="seat1 col-md-3" id="seatA" data-seat="A">A</div>
                <div class="seat2 col-md-3" id="seatB" data-seat="B">B</div>
                <div class="seat3 col-md-3" id="seatC" data-seat="C">C</div>
            </div>
            <div class="priceContainer">
                <h5 id="seat1Price">RM <?php echo e($concert->seat1Price); ?></h5>
                <h5 id="seat2Price">RM250</h5>
                <h5 id="seat3Price">RM200</h5>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="displaySelected">
        <p>YOU HAVE NOT YET CHOSEN A GATE</p>
     </div>
    <div class="paymentCard">
        <div class="labellayout">
             <div class="inputCard">
                <label for=""><h6>EMAIL</h6></label><br>
                <input type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Name on the Card</h6></label><br>
                <input type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Card Number</h6></label><br>
                <input type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>CVV</h6></label><br>
                <input type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Expiry Date</h6></label><br>
                <input type="text">
            </div>
            <button>PAY</button>    
        </div>
    </div>
    
    <script type="text/javascript" src="<?php echo e(asset('js/concertSection.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\DEGREE\Web Development\concertProject\resources\views/concertSection.blade.php ENDPATH**/ ?>