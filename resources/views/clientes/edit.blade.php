@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente ) }}" method="POST">
        @csrf @method('PATCH')
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value ="{{old('nombres', $cliente->nombres)}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value ="{{old('apellidos', $cliente->apellidos)}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value ="{{old('telefono', $cliente->telefono)}}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value ="{{old('direccion', $cliente->direccion)}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

        <div>
            <a href="{{route('clientes.index')}}">Ir a inicio</a>
        </div>
    </form>
@endsection