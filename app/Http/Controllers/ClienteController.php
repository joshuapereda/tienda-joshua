<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::where('estado', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->numero_documento = $request->numero_documento;
        $cliente->save();
        return $cliente;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
         $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->numero_documento = $request->numero_documento;
        $cliente->save();
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
         $cliente->estado = false;
        $cliente->save();
        return $cliente;
    }
}
