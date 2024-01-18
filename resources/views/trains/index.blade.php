<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trenes</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>año</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td><a href="{{ route('trains.show', $train->id) }}">{{ $train->id }}</a></td>
                    <td><a href="{{ route('trains.show', $train->id) }}">{{ $train->name }}</a></td>
                    <td><a href="{{ route('trains.show', $train->id) }}">{{ $train->passengers }}</a></td>
                    <td><a href="{{ route('trains.show', $train->id) }}">{{ $train->year }}</a></td>
                    <td>
                        <a href="{{ route('trains.edit', $train->id) }}">Editar</a>
                        <form action="{{ route('trains.destroy', $train->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('trains.create') }}">Crear tren</a>

</body>
</html>