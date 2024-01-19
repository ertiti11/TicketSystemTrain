<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>show TrainType</title>
</head>

<body>
    @include('Navbar')
    <h1>{{ $train_type->name }}</h1>
    <p>{{ $train_type->description }}</p>

    <a href="{{ route('train_types.index') }}">Back</a>

</body>

</html>
