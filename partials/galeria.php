<!-- Galeria -->
<section class="galeria">
    <div class="container">
        <h3 class="title-galery" style="text-align: center; !important;">Nosotros...</h3>
        <div class="row">
            <?php foreach ($evento['galeria'] as $img): ?>
                <?php
                    $ruta_local = __DIR__ . '/../' . ltrim($img, './');
                    $version = is_file($ruta_local) ? '?v=' . filemtime($ruta_local) : '';
                ?>
                <div class="col-6 col-md-3 item-galeria animated opacidad">
                    <a href="<?= $img . $version ?>" data-fancybox="images" data-caption="">
                        <img class="img-fluid" src="<?= $img . $version ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
