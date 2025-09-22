<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
            'id' => 'sometimes|exists:clientes,id',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula' => 'required|string|max:20|unique:clientes,cedula',
            'duracion' => 'required|integer|min:1',
            'status' => ['nullable', Rule::in(['active ', 'inactive'])],
            ]);

        do {
            $numero_poliza = strtoupper(Str::random(8));
        } while (Cliente::where('numero_poliza', $numero_poliza)->exists());

        Cliente::create([
            'id' => $request->id,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'numero_poliza' => $numero_poliza,
            'duracion' => $request->duracion,
            'status' => $request->status ?? 'active',
        ]);
        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }


    public function show($id)
    {
        $id = Auth::id();
        $cliente = Cliente::findOrFail($id);
        return view('show', compact('clientes'));

    }


//Editar informacion del cliente
    public function edit($id)
    {
        $id = Auth::id();
        $cliente = Cliente::findOrFail($id);
        $clientes = Cliente::all();
        Cliente::findOrFail($id);
        return view('edit', compact('clientes'));

    }


//Actualizar informacion del cliente
    public function update(Request $request, $id)
    {
        $request->validate([

            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula' => 'required|string|max:20|unique:clientes,cedula,'.$id,
            'duracion' => 'required|integer|min:1',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'duracion' => $request->duracion,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');


    }


//Eliminar informacion del cliente
    public function destroy($id)
    {
        $id = Auth::id();
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');

    }
}
