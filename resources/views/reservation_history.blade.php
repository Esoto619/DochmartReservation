<!-- resources/views/reservation_history.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Historial de Reservas</h2>
    @if (count($reservations) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Horario</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reserva)
                    <tr>
                        <td>{{ $reserva['fecha'] }}</td>
                        <td>{{ $reserva['horario'] }}</td>
                        <td>{{ $reserva['nombre'] }}</td>
                        <td>{{ $reserva['email'] }}</td>
                        <td>{{ $reserva['telefono'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay reservas anteriores.</p>
    @endif
</div>
<div class="row">
    <div class="col-md-12 pt-10 text-center">
        <a href="/"><button type="button" class="btn btn-primary btn-lg mx-auto"><i class="fas fa-calendar"></i>  Agendar</button></a>
    </div>
</div>
@endsection
