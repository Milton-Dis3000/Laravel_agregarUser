@extends('layout')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Registrar Nuevo Usuario</h1>

        <form action="{{ url('/usuarios') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="apellido" class="block text-gray-700 font-bold mb-2">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700 font-bold mb-2">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-input" required>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
        </form>
    </div>
@endsection
