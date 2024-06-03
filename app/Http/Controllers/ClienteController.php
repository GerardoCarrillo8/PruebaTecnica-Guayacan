<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(){
        $clientes = Cliente::all();

        //pasar los datos a la vista
        return view('clientes.index', compact('clientes'));
    }

    public function pruebaIndex(){
        
        // Definir el valor de la variable $prueba
        $prueba = 'Hola desde la vista de prueba';

        return view('prueba.index', compact('prueba'));
    }

    public function create()
    {
        // Mostrar el formulario de creación de cliente
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }


    public function edit(Cliente $cliente)
    {
    // Aquí deberías escribir la lógica para recuperar el cliente por su ID
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, Cliente $cliente){
        // Encuentra el cliente por su ID

        $request->validate([
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'telefono' => ['required'],
            'direccion' => ['required']
        ]);
    

        $cliente->nombres = $request->input('nombres');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');

        $cliente->save();

        // Redirige de nuevo al índice de clientes con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Cliente $cliente)
    {
        // Eliminar el cliente
        $cliente->delete();

        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }


}
