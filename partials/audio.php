<!-- Audio -->
<section class="audio">
    <div class="container">
        <div class="row">
            <div class="botonAudio-container">
                <audio id="audioPrueba" loop="">
                    <source src="assets/musica.mp3" type="audio/mp3">
                    ¡Ups! Tu navegador no soporta este archivo de audio.
                </audio>
                <div class="animation">
                    <img id="btnPlay" src="./assets/icons/icono-musica_play.svg" alt="boton play" onclick="playAudio()" class="botonAudio vertical_shake">

                    <img id="btnPausa" src="./assets/icons/icono-musica_pausa.svg" class="botonAudio hidden" onclick="pauseAudio()" alt="boton pausa">
                </div>
            </div>
        </div>
    </div>
</section>
