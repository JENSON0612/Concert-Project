@extends('layout')  <!-- Extending the 'layout' view -->

@section('content')  <!-- Start of the 'content' section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.0/html2pdf.bundle.js"></script>

<link rel="stylesheet" href="{{ asset('css/success.css') }}">

<div class="showTicket">
    <div class="ticketShown">
        <p class="hidden">Type: {{ $tickets->type }}</p>
        <img id="gateImage" src="{{ asset('image/GATE' . $tickets->type . '.jpg') }}" alt="jpg">
    </div>
    <br>
    <a href="{{ url('print_pdf') }}">Download</a>  <!-- Link to trigger the PDF download -->
</div>

@endsection  <!-- End of the 'content' section -->
