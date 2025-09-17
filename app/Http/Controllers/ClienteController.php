<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('consultar', compact('clientes'));
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula' => 'required|string|max:20|unique:clientes,cedula',
            'duracion' => 'required|integer|min:1',
        ]);

        // Generar número de póliza único aleatorio
        do {
            $numero_poliza = strtoupper(bin2hex(random_bytes(4))); // 8 caracteres hexadecimales
        } while (Cliente::where('numero_poliza', $numero_poliza)->exists());

        Cliente::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'numero_poliza' => $numero_poliza,
            'duracion' => $request->duracion,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }
}
