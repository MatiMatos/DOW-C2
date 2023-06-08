<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    <ul>
        @foreach ($alumnos as $alumno)
            <li>{{ $alumno->nombre }} {{ $alumno->apellido }}</li>
        @endforeach
    </ul>
</body>
</html>
