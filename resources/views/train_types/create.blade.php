<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Create train type</title>
</head>

<body>
    @include('Navbar')
    <form action="{{ route('train_types.store') }}" method="POST">
        @csrf
        <input type="text" name="type" placeholder="Type">
        <input type="submit" value="Create">
    </form>


</body>

</html>
