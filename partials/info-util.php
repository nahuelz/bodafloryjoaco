<!-- info util -->
<section class="alojamientos">
    <div class="container">
        <div class="animated divAlojamientos">
            <h4>INFO ÚTIL</h4>
            <p>Te dejamos sugerencias de alojamientos y traslados para que aproveches ese fin de semana al máximo.</p>

            <a data-fancybox="" data-src="#hidden-alojamientos" href="javascript:;" data-options="{&quot;touch&quot; : false}" class="btn btn-alt">VER MÁS</a>

            <!-- Datos Alojamientos -->
            <div style="display: none;" id="hidden-alojamientos">

                <span class="title">Hoteles</span>
                <ul>
                    <?php foreach ($evento['alojamientos'] as $i => $a): ?>
                        <li><span style="font-weight: 600;"><?= $a['nombre'] ?></span><br><?= $a['info'] ?><br>
                            <a target="_blank" href="<?= $a['url'] ?>">Cómo llegar</a></li>
                        <?php if ($i < count($evento['alojamientos']) - 1): ?><br><?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <span class="title">Traslados</span>
                <ul>
                    <?php foreach ($evento['traslados'] as $i => $t): ?>
                        <li><span style="font-weight: 600;"><?= $t['nombre'] ?></span><br><?= $t['info'] ?><br>
                            <a target="_blank" href="<?= $t['url'] ?>">web</a></li>
                        <?php if ($i < count($evento['traslados']) - 1): ?><br><?php endif; ?>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</section>
