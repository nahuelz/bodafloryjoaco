<!-- Instagram -->
<section class="instagram">
    <div class="contenido">
        <img src="./assets/icons/icono-instagram.svg" alt="" class="icon iconInstagram">

        <br>
        <div class="animated divIntagram">
            <span class="hashtag">
                <?= $evento['instagram_handle'] ?>
            </span>
            <p>
                ¡Preparate para nuestro gran día! <br>
                Ya podés seguirnos en nuestra cuenta para ver todas las novedades del casamiento y etiquetarnos en tus fotos y videos.
            </p>

            <a target="_blank" href="<?= $evento['instagram_url'] ?>" class="btn">Ver en Instagram</a>
        </div>
    </div>
</section>
