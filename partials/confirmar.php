<!-- Confirmar Asistencia -->
<section class="parallax-confirmar confirmar d-flex justify-content-center align-items-center">
    <div class="container">

        <div class="animated divTitleAgenda">
            <h4>CONFIRMACIÓN DE ASISTENCIA</h4>
            <p>Esperamos que seas parte de esta gran celebración. ¡Confirmanos tu asistencia!</p>
            <a target="_blank" href="<?= $evento['form_asistencia'] ?>" class="btn">Confirmar asistencia</a><br>
        </div>
        <img src="./assets/icons/icono-calendario.svg" alt="" class="icon iconCalendario">
        <div class="animated divAgenda">
            <p>¡Agendá la fecha en tu calendario!</p>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AGENDAR EVENTO
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a target="_blank" id="LinkCalendarGoogle" class="dropdown-item" href="<?= $evento['calendarios']['google'] ?>"><img src="./assets/icons/icons8-calendario-de-google.svg" class="iconLink mr-3" alt="icono google">Google</a>
                    <a target="_blank" id="LinkCalendarOutlook" class="dropdown-item" href="<?= $evento['calendarios']['outlook'] ?>"><img src="./assets/icons/icons8-ms-outlook.svg" class="iconLink mr-3" alt="icono outlook">Outlook</a>
                    <a target="_blank" id="LinkCalendarMicrosoft365" class="dropdown-item" href="<?= $evento['calendarios']['microsoft365'] ?>"><img src="./assets/icons/icons8-oficina-365.svg" class="iconLink mr-3" alt="icono microsoft 365">Microsoft 365</a>
                    <a target="_blank" id="LinkCalendarApple" class="dropdown-item" href="<?= $evento['calendarios']['apple'] ?>"><img src="./assets/icons/icons8-mac-os.svg" class="iconLink mr-3" alt="icono apple">Apple</a>
                    <a target="_blank" id="LinkCalendarYahoo" class="dropdown-item" href="<?= $evento['calendarios']['yahoo'] ?>"><img src="./assets/icons/icons8-yahoo.svg" class="iconLink mr-3" alt="icono yahoo">Yahoo</a>
                </div>
            </div>
        </div>
    </div>
</section>
