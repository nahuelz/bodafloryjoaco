<!-- Ceremonia y Fiesta -->
<section class="ceremonia-fiesta mb-5">
    <div class="container">
        <div class="row">
            <!-- Ceremonia -->
            <div class="col-md-6 columna iconoCeremonia">
                <img src="./assets/icons/icono-ceremonia.svg" alt="" class="icon ceremonia">
                <div class="animated divCeremonia">
                    <h4>Ceremonia</h4>
                    <p>
                        <?= $evento['ceremonia']['fecha'] ?> <br>
                        <?= $evento['ceremonia']['hora'] ?> <br>
                        <?= $evento['ceremonia']['lugar'] ?><br>
                        <?= $evento['ceremonia']['ciudad'] ?><br>
                        Recibí debajo las indicaciones para llegar.
                    </p>
                    <a target="_blank" href="<?= $evento['ceremonia']['mapa'] ?>" class="btn">LLEGAR A LA CEREMONIA</a>
                </div>
            </div>
            <!-- Fiesta -->
            <div class="col-md-6 columna iconoCeremonia">
                <img src="./assets/icons/icono-fiesta.svg" alt="" class="icon fiesta">
                <div class="animated divFiesta ">
                    <h4>Fiesta</h4>
                    <p>
                        <?= $evento['fiesta']['horario'] ?><br>
                        <?= $evento['fiesta']['lugar'] ?><br>
                        <?= $evento['fiesta']['ciudad'] ?><br>
                        ¡Te esperamos!
                    </p>
                    <a target="_blank" href="<?= $evento['fiesta']['mapa'] ?>" class="btn">LLEGAR A LA FIESTA</a>
                </div>
            </div>

        </div>
    </div>
</section>
