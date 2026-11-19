<!-- info util -->
<section class="alojamientos">
    <div class="container">
        <div class="animated divAlojamientos">
            <h3 style="color: white !important;">Info útil</h3>
            <p>Te dejamos sugerencias de alojamientos y traslados para que aproveches ese fin de semana al máximo.</p>

            <a data-fancybox="" data-src="#hidden-alojamientos" href="javascript:;" data-options="{&quot;touch&quot; : false}" class="btn btn-alt">VER MÁS</a>

            <!-- Datos Alojamientos -->
            <div style="display: none;" id="hidden-alojamientos">

                <h4 class="title">Alojamientos</h4>
                <ul>
                    <?php foreach ($evento['alojamientos'] as $i => $a): ?>
                        <li><span style="font-weight: 600;"><?= $a['nombre'] ?></span><br><?= $a['info'] ?><br>
                            <a target="_blank" href="<?= $a['url'] ?>">Ver Guía</a></li>
                        <?php if ($i < count($evento['alojamientos']) - 1): ?><br><?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <h4 class="title">Traslados</h4>
                <ul>
                    <?php foreach ($evento['traslados'] as $i => $t): ?>
                        <li><span style="font-weight: 600;"><?= $t['nombre'] ?></span><br>
                            <?php if ($t['info'] !== ''): ?><?= $t['info'] ?><br><?php endif; ?>
                            <a target="_blank" href="<?= $t['url'] ?>">APP</a></li>
                        <?php if ($i < count($evento['traslados']) - 1): ?><br><?php endif; ?>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</section>
