<!-- Confirmar Asistencia -->
<section class="parallax-confirmar confirmar d-flex justify-content-center align-items-center">
    <div class="container">

        <div class="animated divTitleAgenda">
            <h4>CONFIRMACIÓN DE ASISTENCIA</h4>
            <p>Esperamos que seas parte de esta gran celebración. ¡Por favor confirma tu asistencia antes del <strong>15/01/2027!</strong></p>
            <p><i>Amamos a los peques, pero hemos diseñado esta celebración para que sea una noche de adultos.</p>
            <p><i><strong>¡POR FAVOR ASISTIR SIN NIÑOS!</strong></i></p>

            <button type="button" id="btnAbrirConfirmacion" class="btn">
                Confirmar asistencia
            </button><br>
        </div>

        <img src="./assets/icons/icono-calendario.svg" alt="" class="icon iconCalendario">

        <div class="animated divAgenda">
            <p>¡Agendá la fecha en tu calendario!</p>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AGENDAR EVENTO
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a target="_blank" id="LinkCalendarGoogle" class="dropdown-item" href="<?= $evento['calendarios']['google'] ?>">
                        <img src="./assets/icons/icons8-calendario-de-google.svg" class="iconLink mr-3" alt="icono google">Google
                    </a>

                    <a target="_blank" id="LinkCalendarOutlook" class="dropdown-item" href="<?= $evento['calendarios']['outlook'] ?>">
                        <img src="./assets/icons/icons8-ms-outlook.svg" class="iconLink mr-3" alt="icono outlook">Outlook
                    </a>

                    <a target="_blank" id="LinkCalendarMicrosoft365" class="dropdown-item" href="<?= $evento['calendarios']['microsoft365'] ?>">
                        <img src="./assets/icons/icons8-oficina-365.svg" class="iconLink mr-3" alt="icono microsoft 365">Microsoft 365
                    </a>

                    <a target="_blank" id="LinkCalendarApple" class="dropdown-item" href="<?= $evento['calendarios']['apple'] ?>">
                        <img src="./assets/icons/icons8-mac-os.svg" class="iconLink mr-3" alt="icono apple">Apple
                    </a>

                    <a target="_blank" id="LinkCalendarYahoo" class="dropdown-item" href="<?= $evento['calendarios']['yahoo'] ?>">
                        <img src="./assets/icons/icons8-yahoo.svg" class="iconLink mr-3" alt="icono yahoo">Yahoo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Confirmación de Asistencia -->
<div id="modalConfirmacion" class="modal-confirmacion">
    <div class="modal-confirmacion__contenido">

        <button type="button" id="btnCerrarConfirmacion" class="modal-confirmacion__cerrar">
            ×
        </button>

        <h6>Confirmá tu asistencia</h6>

        <form id="formConfirmacion">

            <div class="form-group">
                <label for="asistenciaInvitado">¿Vas a asistir?</label>
                <select
                    id="asistenciaInvitado"
                    name="asistencia"
                    class="form-control"
                    required
                >
                    <option value="">Seleccionar opción</option>
                    <option value="Sí">Sí, confirmo asistencia</option>
                    <option value="No">No voy a poder asistir</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cantidadInvitados">Cantidad de personas</label>
                <input
                    type="number"
                    inputmode="numeric"
                    id="cantidadInvitados"
                    name="cantidad"
                    class="form-control"
                    min="0"
                    max="5"
                    value="1"
                    required
                >
            </div>

            <div id="nombresInvitados"></div>

            <div class="form-group">
                <label for="restriccionAlimentaria">Restricción alimentaria</label>
                <input
                    type="text"
                    id="restriccionAlimentaria"
                    name="restriccion"
                    class="form-control"
                    placeholder="Ej: vegetariano, celíaco, ninguna"
                >
            </div>

            <button type="submit" id="btnEnviarConfirmacion" class="btn modal-confirmacion__btn">
                Enviar confirmación
            </button>

            <div id="mensajeConfirmacion" class="modal-confirmacion__mensaje"></div>

        </form>
    </div>
</div>