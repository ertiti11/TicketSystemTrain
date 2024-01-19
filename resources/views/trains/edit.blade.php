<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>edit</title>
</head>

<body>
    @include('Navbar')
    <form method="POST" action="{{ route('trains.update', $train->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ $train->name }}">
        <label for="passengers">Capacidad</label>
        <input type="number" name="passengers" id="passengers" value="{{ $train->passengers }}">
        <label for="year">Año</label>
        <input type="number" name="year" id="year" value="{{ $train->year }}">
        {{-- train type id --}}
        <label for="train_type_id">Tipo de tren</label>

        <select name="train_type_id" id="train_type_id">
            @foreach ($trainTypes as $trainType)
                <option value="{{ $trainType->id }}" {{ $trainType->id == $train->train_type_id ? 'selected' : '' }}>
                    {{ $trainType->type }}</option>
            @endforeach

        </select>

        <button type="submit">Editar</button>
    </form>

</body>

</html>
