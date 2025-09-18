<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Str; 

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
            'monto' => 'required|string|max:6',

        ]);

        // Generar número de póliza aleatorio
        
        do {
            $numero_poliza = strtoupper(Str::random(8));
        } while (Cliente::where('numero_poliza', $numero_poliza)->exists());

        Cliente::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'numero_poliza' => $numero_poliza, 
            'duracion' => $request->duracion,
            'monto' => $request->monto,

        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }
}
