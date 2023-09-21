<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

        <div class="flex flex-col space-y-4">
            @foreach ($usuarios as $usuario)
                <div class="p-4 bg-gray-200 border rounded">
                    <strong class="text-blue-700">Nombre:</strong> {{ $usuario->nombre }}<br>
                    <strong class="text-blue-700">Apellido:</strong> {{ $usuario->apellido }}<br>
                    <strong class="text-blue-700">Correo:</strong> {{ $usuario->email }}<br>
                    <strong class="text-blue-700">Contraseña:</strong> {{ $usuario->contrasena }}
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
