<!-- resources/views/reservation_summary.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Detalle de la Reserva</h2>
    @if ($reserva)
        <div class="card">
            <div class="card-body">
                <p><strong>Fecha:</strong> {{ $reserva['fecha'] }}</p>
                <p><strong>Horario:</strong> {{ $reserva['horario'] }}</p>
                <p><strong>Nombre:</strong> {{ $reserva['nombre'] }}</p>
                <p><strong>Email:</strong> {{ $reserva['email'] }}</p>
                <p><strong>Teléfono:</strong> {{ $reserva['telefono'] }}</p>
            </div>
        </div>
    @else
        <p>No hay ninguna reserva reciente.</p>
    @endif
</div>
<br>
<div class="row">
    <div class="col-md-6 p-10">
        <a href="/"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-calendar"></i>  Agendar Otra Entrega</button></a>
    </div>
    <div class="col-md-6 p-10" style="padding-bottom: 10px;">
                <a href="/historial"><button type="button" class="btn btn-primary btn-lg btn-block"><i
                            class="fas fa-eye"></i> Ver Historial de Reservas</button></a>
            </div>
</div>
@endsection
