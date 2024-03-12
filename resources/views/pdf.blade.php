<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<body>
    <div class="printTicket">
        <div class="ticketPrinted">
        <img id="gateImage" src="{{ asset('image/GATE' . $tickets->type . '.jpg') }}" alt="jpg">
        </div>
    </div>
</body>
</html>