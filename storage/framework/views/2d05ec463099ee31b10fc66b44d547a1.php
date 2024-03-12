
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
                <h5 id="seatPrice1">RM<?php echo e($concert->seatPrice1); ?></h5>
                <h5 id="seatPrice2">RM<?php echo e($concert->seatPrice2); ?></h5>
                <h5 id="seatPrice3">RM<?php echo e($concert->seatPrice3); ?></h5>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="displaySelected">
    <h5>SELECT SEAT</h5>
<form action="<?php echo e(route('hiddenTicket')); ?>" method="post" enctype='multipart/form-data' id="ticketForm">
    <?php echo csrf_field(); ?>
    <p>
        <select name="seatPrice" id="seatPrice" onchange="updateType()">
            <option value="<?php echo e($concert->seatPrice1); ?>" data-type="A">RM<?php echo e($concert->seatPrice1); ?></option>
            <option value="<?php echo e($concert->seatPrice2); ?>" data-type="B">RM<?php echo e($concert->seatPrice2); ?></option>
            <option value="<?php echo e($concert->seatPrice3); ?>" data-type="C">RM<?php echo e($concert->seatPrice3); ?></option>
        </select>
    </p>

    <input type="hidden" name="type" id="hiddenType" value="A">

    <h5>TICKET QUANTITY</h5>
    <p>
        <input type="number" id="ticketQuantity" name="ticketQuantity" min="1" value="1"></p>

    <p id="totalAmount">TOTAL AMOUNT: <span id="displayTotal"><label for="totalAmount">RM 0</label></span></p>
    <input type="hidden" id="hiddenTotalAmount" name="totalAmount" value="0">
    <button type="submit">PAY</button>
</form>

<script>
    function updateType() {
        // Get the selected option and its data-type attribute
        var selectedOption = document.getElementById("seatPrice").options[document.getElementById("seatPrice").selectedIndex];
        var type = selectedOption.getAttribute("data-type");

        // Update the hidden input value
        document.getElementById("hiddenType").value = type;
    }
</script>


        
     </div>

     
    
    
     <script type="text/javascript" src="<?php echo e(asset('js/concertSection.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\JENSON\web development\projectConcert\concertProject (latest)\concertProject\resources\views/concertSection.blade.php ENDPATH**/ ?>