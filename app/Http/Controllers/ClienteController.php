<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteStoreRequest;
use App\Http\Requests\ClienteUpdateRequest;
use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ClienteController extends Controller
{
    public function index(): View
    {
        $clientes = Cliente::all();

        return view('consultar', compact('clientes'));
    }

    public function create(): View
    {
        return view('formulario');
    }


    public function store(ClienteStoreRequest $request): RedirectResponse
    {

        do {
            $numero_poliza = strtoupper(Str::random(8));
        } while (Cliente::where('numero_poliza', $numero_poliza)->exists());

        Cliente::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'numero_poliza' => $numero_poliza,
            'duracion' => $request->duracion,
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->route('clientes.create')->with('success', 'Cliente registrado correctamente.');
    }

    public function show(Cliente $cliente): View
    {
        return view('show', compact('cliente'));

    }

    public function edit(Cliente $cliente): View
    {
        return view('edit', compact('cliente'));
    }

    public function update(ClienteUpdateRequest $request, Cliente $cliente): RedirectResponse
    {

        $cliente->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'duracion' => $request->duracion,
            'status' => $request->status ?? $cliente->status,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
