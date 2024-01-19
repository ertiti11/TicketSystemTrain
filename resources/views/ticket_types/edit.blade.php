<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>edit ticket type</title>
</head>

<body>
    @include('Navbar')
    <form method="POST" action="{{ route('ticket_types.update', $ticket_type->id) }}">
        @csrf
        @method('PUT')
        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $ticket_type->type }}">
        <button type="submit">Actualizar</button>
    </form>

</body>

</html>
