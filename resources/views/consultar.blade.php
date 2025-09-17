<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Clientes y Pólizas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cédula</th>
                <th>Número de Póliza</th>
                <th>Duración (meses)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->apellidos }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->numero_poliza }}</td>
                <td>{{ $cliente->duracion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection