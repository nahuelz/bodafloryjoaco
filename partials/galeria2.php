<!-- Galeria Carrusel -->
<section class="galeria">
    <div class="container">
        <h4 class="title-galery">NOSOTROS...</h4>
        <div class="galeria-carrusel">
            <div class="galeria-track">
                <?php foreach ($evento['galeria'] as $i => $img): ?>
                    <?php
                        $ruta_local = __DIR__ . '/../' . ltrim($img, './');
                        $version = is_file($ruta_local) ? '?v=' . filemtime($ruta_local) : '';
                    ?>
                    <div class="galeria-slide">
                        <a href="<?= $img . $version ?>" data-fancybox="images" data-caption="">
                            <img src="<?= $img . $version ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="button" class="galeria-btn galeria-prev" aria-label="Anterior">&#8249;</button>
            <button type="button" class="galeria-btn galeria-next" aria-label="Siguiente">&#8250;</button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var carrusel = document.querySelector('.galeria-carrusel');
    if (!carrusel) return;
    var track  = carrusel.querySelector('.galeria-track');
    var slides = track.querySelectorAll('.galeria-slide');
    var idx = 0;

    function update() {
        var n = slides.length;
        var slideW = slides[0].offsetWidth;
        var offset = carrusel.offsetWidth / 2 - slideW / 2 - idx * slideW;
        track.style.transform = 'translateX(' + offset + 'px)';
        slides.forEach(function (s, i) {
            var rel = i - idx;
            if (rel > n / 2) rel -= n;
            if (rel < -n / 2) rel += n;
            var shift = (rel - (i - idx)) * slideW;
            var scale = (i === idx) ? 1 : 0.7;
            s.style.transform = 'translateX(' + shift + 'px) scale(' + scale + ')';
            s.classList.toggle('is-active', i === idx);
        });
    }

    carrusel.querySelector('.galeria-prev').addEventListener('click', function () {
        idx = (idx - 1 + slides.length) % slides.length; update();
    });
    carrusel.querySelector('.galeria-next').addEventListener('click', function () {
        idx = (idx + 1) % slides.length; update();
    });
    window.addEventListener('resize', update);
    update();
});
</script>
