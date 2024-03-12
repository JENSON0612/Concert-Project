@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/payment.css')}}">

    <form action="submitPayment" method="post">
        @csrf
        <div class="paymentCard">
            <div class="labellayout">
                <div class="inputCard">
                    <label for="email"><h6>EMAIL</h6></label><br>
                    <input type="hidden" name="amount">
                    <input type="text" name="email" placeholder="@gmail.com">
                </div>
                <div class="inputCard">
                    <label for="name"><h6>Name on the Card</h6></label><br>
                    <input type="text" name="name" placeholder='FULL NAME'>
                </div>
                <div class="inputCard">
                    <label for="card-number"><h6>Card Number</h6></label><br>
                    <input autocomplete='off' class='card-number' placeholder='XXXX-XXXX-XXX' size='20' type="text">
                </div>
                <div class="inputCard">
                    <label for="card-cvc"><h6>CVC</h6></label><br>
                    <input autocomplete='off' class='card-cvc' placeholder='EX: 311' size='4' type="text">
                </div>
                <div class="inputCard">
                    <label for="MM/YY"><h6>Expiry Date</h6></label><br>
                    <input class='card-expiry-date' placeholder='MM/YY' size='5' type="text">
            </div>
                
                <button type="submit">PAY</button>
            </div>
        </div>
    </form>    

@endsection