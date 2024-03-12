@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/addConcert.css')}}">

<div class="addConcert">
    <h3 id="addConcertTitle">ADD CONCERT</h3>
</div>
<div class="addConcertContainer">
    <form action="{{route('addConcert')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="addConcertForm">
            <div class="row">
                <div class="form-group">
                    <label for="">CONCERT NAME</label><br>
                    <input class="concertName" type="text" id="concertName" name="concertName" required>
                </div>
                <div class="form-group">
                    <label for="">CONCERT DESCRIPTION</label><br>
                    <input class="concertDescription" type="text" id="concertDescription" name="concertDescription">
                </div>
                <div class="form-group">
                    <label for="">SEAT PRICE 1</label><br>
                    <input class="seatPrice1" type="number" id="seatPrice1" name="seatPrice1">
                </div>
                <div class="form-group">
                    <label for="">SEAT PRICE 2</label><br>
                    <input class="seatPrice2" type="number" id="seatPrice2" name="seatPrice2">
                </div>
                <div class="form-group">
                    <label for="">SEAT PRICE 3</label><br>
                    <input class="seatPrice3" type="number" id="seatPrice3" name="seatPrice3">
                </div>
                <div class="form-group">
                    <label for="">CONCERT IMAGE</label><br>
                    <input class="concertImage" type="file" id="concertImage" name="concertImage">
                </div>
                <div class="form-group">
                    <label for="">CONCERT BACKGROUND IMAGE</label><br>
                    <input class="concertSectionBackgroundImg" type="file" id="concertSectionBackgroundImg" name="concertSectionBackgroundImg">
                </div>
                <div class="form-group">
                    <label for="">CONCERT PHOTO 1</label><br>
                    <input class="concertPhoto1" type="file" id="concertPhoto1" name="concertPhoto1">
                </div>
                <div class="form-group">
                    <label for="">CONCERT PHOTO 2</label><br>
                    <input class="concertPhoto2" type="file" id="concertPhoto2" name="concertPhoto2">
                </div>
                <div class="form-group">
                    <label for="">CONCERT PHOTO 3</label><br>
                    <input class="concertPhoto3" type="file" id="concertPhoto3" name="concertPhoto3">
                </div>
                <div class="form-group">
                    <label for="">CONCERT DESCRIPTION 1</label><br>
                    <input class="concertPhotoDes1" type="text" id="concertPhotoDes1" name="concertPhotoDes1">
                </div>
                <div class="form-group">
                    <label for="">CONCERT DESCRIPTION 2</label><br>
                    <input class="concertPhotoDes2" type="text" id="concertPhotoDes2" name="concertPhotoDes2">
                </div>
                <div class="form-group">
                    <label for="">CONCERT DESCRIPTION 3</label><br>
                    <input class="concertPhotoDes3" type="text" id="concertPhotoDes3" name="concertPhotoDes3">
                </div>
                <button type="submit">SUBMIT</button>
            </div>
        </div>
    </form>
</div>

@endsection