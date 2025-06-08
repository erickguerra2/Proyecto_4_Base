@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Órdenes de Reparación</h1>
    <a href="{{ route('ordenes.create') }}" class="btn btn-primary mb-3">Nueva Orden</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Placa</th>
                <th>Estado</th>
                <th>Total Estimado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordenes as $orden)
                <tr>
                    <td>{{ $orden->id_orden }}</td>
                    <td>{{ $orden->cliente }}</td>
                    <td>{{ $orden->placa }}</td>
                    <td>{{ $orden->estado }}</td>
                    <td>{{ $orden->total_estimado }}</td>
                    <td>
                        <a href="{{ route('ordenes.edit', $orden->id_orden) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('ordenes.destroy', $orden->id_orden) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
