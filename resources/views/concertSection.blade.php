@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/concertSection.css') }}">

    @foreach($concerts as $concert)
    <div class="section1">
        <img src="{{asset('image')}}/{{$concert->concertSectionBackgroundImg}}" alt="jpg">
        <div class="mask">
            <div class="row">
                <div class="col-md-6 innerSection1">
                    <h1>BOOK YOUR TICKET NOW</h1>
                    <p>{{ $concert->concertDescription }}</p>
                </div>
                <div class="col-md-6 innerSection2">
                <img src="{{asset('image')}}/{{$concert->concertImage}}" alt="png">
                    <h1>{{ $concert->concertName }}</h1>
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
                            <img src="{{asset('image')}}/{{$concert->concertPhoto1}}" alt="jpg">
                            <h5>{{ $concert->concertPhotoDes1 }}</h5>
                        </div>
                        <div class="photo col-md-3">
                            <img src="{{asset('image')}}/{{$concert->concertPhoto2}}" alt="jpg">
                            <h5>{{ $concert->concertPhotoDes2 }}</h5>
                        </div>
                        <div class="photo col-md-3">
                            <img src="{{asset('image')}}/{{$concert->concertPhoto3}}" alt="jpg">
                            <h5>{{ $concert->concertPhotoDes3 }}</h5>
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
                <h5 id="seatPrice1">RM{{ $concert->seatPrice1 }}</h5>
                <h5 id="seatPrice2">RM{{ $concert->seatPrice2 }}</h5>
                <h5 id="seatPrice3">RM{{ $concert->seatPrice3 }}</h5>
            </div>
        </div>
    </div>
    @endforeach

    <div class="displaySelected">
    <h5>SELECT SEAT</h5>
<form action="{{ route('hiddenTicket') }}" method="post" enctype='multipart/form-data' id="ticketForm">
    @csrf
    <p>
        <select name="seatPrice" id="seatPrice" onchange="updateType()">
            <option value="{{ $concert->seatPrice1 }}" data-type="A">RM{{ $concert->seatPrice1 }}</option>
            <option value="{{ $concert->seatPrice2 }}" data-type="B">RM{{ $concert->seatPrice2 }}</option>
            <option value="{{ $concert->seatPrice3 }}" data-type="C">RM{{ $concert->seatPrice3 }}</option>
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

     
    
    
     <script type="text/javascript" src="{{ asset('js/concertSection.js') }}"></script>

@endsection