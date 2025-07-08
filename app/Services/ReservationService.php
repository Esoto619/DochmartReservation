<?php
namespace App\Services;
/**
 * Servicio creado para simular el guardado de información y su gestión
 */
class ReservationService
{
    /**
     * Obtiene las fechas disponibles del mes en cuestión recorriendo los 30 días para el mes de septiembre, regresando las fechas con un random en 0 y 1 para llenar el calendario con días ocupados y disponibles
     */
    public static function getDatesAvailability() {
        $data = [];
        for ($i = 1; $i <= 30; $i++) {
            $data["2025-09-" . str_pad($i, 2, '0', STR_PAD_LEFT)] = rand(0, 1) ? 'disponible' : 'ocupado';
        }
        return $data;
    }

    /**
     * Obtiene los horarios establecidos con el metodo rand asigan horarios ocupados y disponibles para su gestión, regresando los horarios y su disponibilidad con un ternario utilizado para verificar si esta disponible o ocupado segun el rand
     */
    public static function getSchedulesByDate($date) {
        return [
            '08:00' => rand(0, 1) ? 'disponible' : 'ocupado',
            '10:00' => rand(0, 1) ? 'disponible' : 'ocupado',
            '12:00' => rand(0, 1) ? 'disponible' : 'ocupado',
            '14:00' => rand(0, 1) ? 'disponible' : 'ocupado',
            '16:00' => rand(0, 1) ? 'disponible' : 'ocupado',
        ];
    }

    /**
     * Hace la simulación del guardado de la reserva almacenandolo en una sessión llamada reservations
     *  Esto se podría hacer un un API o Directo la conexion a alguna base de datos
     */
    public static function saveReservation($data) {
        session()->push('reservations', $data);
    }

    /**
     * Obtiene las reservas alamacenadas en la sessión, para mostrar posteriormente el historial de reservaciones
     *
     */
    public static function getUserReservations() {
        return session('reservations', []);
    }
}
