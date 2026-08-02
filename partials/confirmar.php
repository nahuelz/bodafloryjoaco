<!-- Confirmar Asistencia -->
<section class="parallax-confirmar confirmar d-flex justify-content-center align-items-center">
    <div class="container">

        <div class="animated divTitleAgenda">
            <h4>CONFIRMACIÓN DE ASISTENCIA</h4>
            <p>Esperamos que seas parte de esta gran celebración. ¡Confirmanos tu asistencia!</p>

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

        <h4>Confirmá tu asistencia</h4>

        <p class="modal-confirmacion__texto">
            Nos encantaría compartir este día con vos. Completá tus datos para ayudarnos a organizarnos mejor.
        </p>

        <form id="formConfirmacion">

            <div class="form-group">
                <label for="nombreInvitado">Nombre y apellido</label>
                <input
                    type="text"
                    id="nombreInvitado"
                    name="nombre"
                    class="form-control"
                    placeholder="Ej: Juan Pérez"
                    required
                >
            </div>

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
                    id="cantidadInvitados"
                    name="cantidad"
                    class="form-control"
                    min="1"
                    value="1"
                    required
                >
            </div>

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

            <div class="form-group">
                <label for="mensajeInvitado">Mensaje para los novios</label>
                <textarea
                    id="mensajeInvitado"
                    name="mensaje"
                    class="form-control"
                    rows="3"
                    placeholder="Dejales un mensajito si querés"
                ></textarea>
            </div>

            <button type="submit" id="btnEnviarConfirmacion" class="btn modal-confirmacion__btn">
                Enviar confirmación
            </button>

            <div id="mensajeConfirmacion" class="modal-confirmacion__mensaje"></div>

        </form>
    </div>
</div>