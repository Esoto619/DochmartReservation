<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReservationService;
/**
 * Este controllador
 */
class CalendarController extends Controller
{
    /**
     * obtiene las fechas disponibles del servicio de Reservaciones creado y regresa a la vista calendar, con las fechas disponibles en la variable dates
     */
    public function index() {
       // return 'llega';
        $dates = ReservationService::getDatesAvailability();
        return view('calendar', compact('dates'));
    }
    /**
     * Obtiene los horarios disponibles y lso qu e ya estan agendados para mostrar el calendarío y validar que días aun tienen horarios disponibles
     * Regersa la respuesta en un json para mejor manipulacion de datos
     */
    public function getSchedules($fecha) {
        return response()->json(ReservationService::getSchedulesByDate($fecha));
    }
}
