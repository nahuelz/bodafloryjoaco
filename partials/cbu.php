<!-- CBU -->
<section class="cbu">
    <div class="container">
        <img src="./assets/icons/icono-regalo.svg" alt="" class="icon regalo">
        <div class="animated divCbu">
            <p>Si deseás realizarnos un regalo podés colaborar con nuestra Luna de Miel...</p>
            <a data-fancybox="" data-src="#hidden-cbu" href="javascript:;" data-options="{&quot;touch&quot; : false}" class="btn btn-alt">Ver Datos Bancarios</a>

            <!-- Datos Cbu -->
            <div style="display: none;" id="hidden-cbu">

                <span class="title">Datos Bancarios</span>
                <ul>
                    <li>Nombre del Titular: <?= $evento['cbu']['titular'] ?></li>
                    <li>CBU: <?= $evento['cbu']['cbu'] ?></li>
                    <li>Alias: <?= $evento['cbu']['alias'] ?></li>
                    <li>DNI: <?= $evento['cbu']['dni'] ?></li>
                    <li><?= $evento['cbu']['banco'] ?></li>
                </ul>

                <span class="title">Lista de Regalos</span>
                <ul>
                    <?php foreach ($evento['cbu']['lista_regalos'] as $regalo): ?>
                        <li><a target="_blank" href="<?= $regalo['url'] ?>"><?= $regalo['nombre'] ?></a></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</section>
