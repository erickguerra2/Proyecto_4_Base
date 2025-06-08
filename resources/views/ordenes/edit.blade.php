@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Orden</h2>
    <form action="{{ route('ordenes.update', $orden->id_orden) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Vehículo</label>
            <select name="id_vehiculo" class="form-control" required>
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id_vehiculo }}" {{ $vehiculo->id_vehiculo == $orden->id_vehiculo ? 'selected' : '' }}>
                        {{ $vehiculo->placa }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ $orden->estado }}" required>
        </div>
        <div class="mb-3">
            <label>Total Estimado</label>
            <input type="number" name="total_estimado" class="form-control" value="{{ $orden->total_estimado }}" required step="0.01">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
