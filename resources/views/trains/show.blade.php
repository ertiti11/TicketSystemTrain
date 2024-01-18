<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train</title>
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
            <tr>
                {{-- hacerlo como links --}}

                
                <td>{{ $train->id }}</td>
                <td>{{ $train->name }}</td>
                <td>{{ $train->passengers }}</td>
                <td>{{ $train->year }}</td>
                <td>
                    <a href="{{ route('trains.edit', $train->id) }}">Editar</a>
                    <form action="{{ route('trains.destroy', $train->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
            </tr>
        </tbody>

    </table>
    <a href="{{ route('trains.create') }}">Crear tren</a>

</body>
</html>