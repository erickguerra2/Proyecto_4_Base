@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nueva Orden</h2>
    <form action="{{ route('ordenes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Vehículo</label>
            <select name="id_vehiculo" class="form-control" required>
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id_vehiculo }}">{{ $vehiculo->placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Total Estimado</label>
            <input type="number" name="total_estimado" class="form-control" required step="0.01">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
