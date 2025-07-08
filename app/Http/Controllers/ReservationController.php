<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReservationService;

class ReservationController extends Controller
{
    /**
     * realiza la función de guardado de información enviando los datos del formularío a la funcion del servicio que lo alamacena, redirecciona a la vista del detalle de la agenda
     */
    public function store(Request $request) {
        $data = $request->only(['fecha', 'horario', 'nombre', 'email', 'telefono']);
        ReservationService::saveReservation($data);
        return redirect('/resumen');
    }

    /**
     * Obtiene del servicio las reservaciones realizadas por el usuario y regresa la vista de la reserva para mostrar el detalle
     */
    public function summary() {
        $reservations = ReservationService::getUserReservations();
        return view('reservation_summary', ['reserva' => end($reservations)]);
    }

    /**
     * Obtiene el historial de las reservas guardadas en la sessión para mostrar el historial de reservaciones y regresa la vista reservation_history que muestra una tabla con el historial de reservas
     */
    public function history() {
        $reservations = ReservationService::getUserReservations();
        return view('reservation_history', compact('reservations'));
    }
}
