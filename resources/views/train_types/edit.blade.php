<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Edit Train Type</title>
</head>

<body>
    @include('Navbar')
    <form action="{{ route('train_types.update', $train_type->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="type" placeholder="New Type" value="{{ $train_type->type }}">
        <input type="submit" value="Update">
    </form>

</body>

</html>
