<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <!-- Añadir enlaces a CSS aquí, si es necesario -->
</head>
<body>
    <h1>Lista de Clientes</h1>

    @if($clientes->isEmpty())
        <p>No hay clientes registrados.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->idCliente }}</td>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->idCliente) }}">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->idCliente) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
