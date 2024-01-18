<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>

<body>
    {{$tickets}}
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Price</th>
                <th>Ticket type</th>
                <th>Train</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->id }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->date }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->price }} €</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->ticketType->type }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->train->name }}</a></td>
                    <td>
                        <a href="{{ route('tickets.edit', $ticket->id) }}">Editar</a>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('tickets.create') }}">Crear ticket</a>
</body>

</html>
