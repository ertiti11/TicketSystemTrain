<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>index of TrainTypes</title>
</head>

<body>
    @include('Navbar')
    <table border="1px">
        <thead>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($train_types as $train_type)
                <tr>
                    <td>{{ $train_type->id }}</td>
                    <td>{{ $train_type->type }}</td>
                    <td>
                        <a href="{{ route('train_types.edit', $train_type->id) }}">Edit</a>
                        <form action="{{ route('train_types.destroy', $train_type->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('train_types.create') }}">Create</a>

</body>

</html>
