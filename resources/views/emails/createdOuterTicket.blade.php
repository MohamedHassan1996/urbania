<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Ticket Created</title>
</head>
<body>
    <p>Ticket has been successfully created.</p>
    <p>Ticket Number: {{ $ticket->ticket_number . ' _ ' . $ticket->created_at->format('d/m/Y H:i') }}</p>
    {{-- <a href="{{ 'https://urbania.testingelmo.com/sollecito?ticketId=' . $ticket->id . '&token=' . $ticket->email_token }}">
        Edit Ticket
    </a> --}}

    <a href="{{ 'https://urbania.testingelmo.com/sollecito?ticketId=' . $ticket->id . '&token=' . $ticket->email_token }}">
        Edit Ticket
    </a>
</body>
</html>




