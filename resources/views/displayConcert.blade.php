    @extends('layout')
    @section('content')

    <link rel="stylesheet" href="{{asset('css/displayConcert.css')}}">
    <div class="videobg">
        <video autoplay loop muted class="background-video">
            <source src="{{asset('video/background video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
        <div class="container" id="app" href="">
            @foreach($concerts as $concert)
            <div class="card-wrap">
                <div class="card" id="card1">
                    <div class="card-bg">
                        <img src="{{asset('image/')}}/{{$concert->concertImage}}" alt="jpeg">
                    </div>
                    <div class="card-info">
                        <h1>{{$concert->concertName}}</h1>
                        <a class="card-info a" href="{{ route('concertSection', ['id' => $concert->id]) }}">
                            Buy Ticket
                        </a>
                    </div>
                </div>
            </div>
        
            @endforeach
        </div>

        <script type="text/javascript" src="js/displayConcert.js"></script>

    @endsection
