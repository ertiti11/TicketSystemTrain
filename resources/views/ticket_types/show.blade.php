<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>show ticket type</title>
</head>

<body>

    @include('Navbar')
    <p class="font-bold text-2xl">type:</p>
    <h1>{{ $ticket_type->type }}</h1>
    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2"
        href="{{ route('ticket_types.index') }}">Back</a>

</body>

</html>
