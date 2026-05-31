<!-- Galeria -->
<section class="galeria">
    <div class="container">
        <h4 class="title-galery">NOSOTROS...</h4>
        <div class="row">
            <?php foreach ($evento['galeria'] as $img): ?>
                <div class="col-6 col-md-3 item-galeria animated opacidad">
                    <a href="<?= $img ?>" data-fancybox="images" data-caption="">
                        <img class="img-fluid" src="<?= $img ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
