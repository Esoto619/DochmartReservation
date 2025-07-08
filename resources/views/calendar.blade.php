<!-- Calendario -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Agenda Entrega de Concreto – Septiembre 2025</h4>
            <p>A continuación se muestra el calendarío correspondiente a Septiembre</p>
            <hr>
            <p class="mb-0">En el cual podras agendar tu proxima entrega de concreto en las fechas y horarios disponibles,
                toma en cuenta que los días marcados en rojo ya no cuentan con disponibilidad para entrega, unicamente los
                días marcados en color verde.</p>
        </div>

        <div class="row">
            <div class="col-md-12 p-10" style="padding-bottom: 10px;">
                <a href="/historial"><button type="button" class="btn btn-primary btn-lg btn-block"><i
                            class="fas fa-eye"></i> Ver Historial de Reservas</button></a>
            </div>
        </div>

        <div class="row">
            @foreach ($dates as $date => $status)
                <div class="col-2 mb-2">
                    <button class="btn {{ $status == 'disponible' ? 'btn-success' : 'btn-danger' }} w-100"
                        {{ $status == 'ocupado' ? 'disabled' : '' }} onclick="loadSchedules('{{ $date }}')">
                        {{ \Carbon\Carbon::parse($date)->format('d M') }}
                    </button>
                </div>
            @endforeach
        </div>
        <div id="schedules"></div>
    </div>

    <script>
        /**
         *
         * @param {recibe las fechas del mes para consumir el servicio de horarios disponibles} date
         * obtiene la data y genera el formulario con lso horarios disponibles, desactiva los ocupados y hace el envío del formulario para el guardado de información de la reserva
         */
        function loadSchedules(date) {
                let timerInterval;
                Swal.fire({
                title: "Buscando Horarios Disponibles!",
               // html: "I will close in <b></b> milliseconds.",
                timer: 1000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
                }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
                });
            fetch(`/horarios/${date}`)

                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    let html = `<div class="row">
                                    <div class="col-md-3">
                                    </div>
                                <div class="col-md-6">
                                    <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-calendar"></i> Horarios disponibles para Septiembre 2025</h5>

                                </div>`;
                    html +=
                        `<form method="POST" action="/reservar">@csrf<input type="hidden" name="fecha" value="${date}">`;
                    Object.keys(data).forEach(hour => {
                        const status = data[hour];
                        html += `
                <div class="form-check ml-3">
                    <input class="form-check-input " type="radio" name="horario" value="${hour}" ${status == 'ocupado' ? 'disabled' : ''}>
                    <label class="form-check-label ">${hour} - ${status}</label>
                </div>`;
                    });
                    html += `
                        <div class="form-group mt-3 text-center">
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre completo" required>
                            <input class="form-control mt-2" type="email" name="email" placeholder="Correo electrónico" required>
                            <input class="form-control mt-2" type="text" name="telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="text-center">
                        <button onclick="alert("prueba");" class="btn btn-primary mt-3"><i class="fas fa-check"></i>  Confirmar reserva</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>`;
                    document.getElementById('schedules').innerHTML = html;
                });
        }
    </script>
@endsection
