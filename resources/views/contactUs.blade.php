@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/contactUs.css')}}">

<div class="contactUsForm">
    <div class="cufContent">
        <div class="cufQuestion">
            <label for="">NAME</label><br>
            <input type="text" name="" id="">
        </div>
        <div class="cufQuestion">
            <label for="">EMAIL</label><br>
            <input type="text" name="" id="">
        </div>
        <div class="cufQuestion">
            <label for="">PHONE NO</label><br>
            <input type="text" name="" id="">
        </div>
        <div class="cufQuestion">
            <label for="">DESCRIPTION</label><br>
            <input type="text" name="" id="">
        </div>
        <button>SUBMIT</button>
    </div>
</div>
@endsection