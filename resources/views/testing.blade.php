@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/testing.css')}}">

<div class="seat-container">
    <!-- Each div represents a seat -->
    <label>
        <input type="checkbox" name="myCheckbox" id="myCheckbox">
    </label>
</div>

<script type="text/javascript" src="js/testing.js"></script>
@endsection