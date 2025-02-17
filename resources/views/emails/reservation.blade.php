<!DOCTYPE html>
<html>
<head>
    <title>Reservation Details</title>
</head>
<body>
    <h1>Reservation Confirmation</h1>
    <p>Your reservation has been confirmed with the following details:</p>
    <ul>
        <li>Date: {{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y H:i') }}</li>
    </ul>
    <p>Thank you for choosing us!</p>
</body>
</html>
