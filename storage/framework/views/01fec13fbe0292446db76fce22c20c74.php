<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/payment.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<form action="<?php echo e(route('payment.post')); ?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
    <?php echo csrf_field(); ?>
    <div class="paymentCard">
        <div class="labellayout">
            <div class="inputCard">
                <label for=""><h6>EMAIL</h6></label><br>
                <input type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Name on the Card</h6></label><br>
                <input size='4' type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Card Number</h6></label><br>
                <input autocomplete='off' class='card-number' size='20' type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>CVC</h6></label><br>
                <input autocomplete='off' class='card-cvc' placeholder='ex. 311' size='4' type="text">
            </div>
            <div class="inputCard">
                <label for=""><h6>Expiry Date</h6></label><br>
                <input class='card-expiry-date' placeholder='MM/YY' size='5' type="text">
</div>
            
            <button type="submit">PAY</button>
        </div>
    </div>
</form>

<!-- Include necessary scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_date: $('.card-expiry-date').val(),
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});
</script>
</body>
</html>
<?php /**PATH C:\JENSON\web development\projectConcert\concertProject\resources\views/payment.blade.php ENDPATH**/ ?>