/**
 *
 * @param {recibe las fechas del mes para consumir el servicio de horarios disponibles} date
 * obtiene la data y genera el formulario con lso horarios disponibles, desactiva los ocupados y hace el envío del formulario para el guardado de información de la reserva
 */
function loadSchedules(date) {
            fetch(`/horarios/${date}`)
                .then(response => response.json())
                .then(data => {
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
                    <input class="form-check-input " type="radio" name="horario" value="${hour}" ${status == 'occupied' ? 'disabled' : ''}>
                    <label class="form-check-label ">${hour} - ${status}</label>
                </div>`;
                    });
                    html += `
                        <div class="form-group mt-3 text-center">
                            <input class="form-control" name="nombre" placeholder="Nombre completo" required>
                            <input class="form-control mt-2" name="email" placeholder="Correo electrónico" required>
                            <input class="form-control mt-2" name="telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="text-center">
                        <button class="btn btn-primary mt-3"><i class="fas fa-check"></i>  Confirmar reserva</button>
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

