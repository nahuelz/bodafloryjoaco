<!-- CBU -->
<section class="cbu">
    <div class="container">
        <img src="./assets/icons/icono-regalo.svg" alt="" class="icon regalo">
        <div class="animated divCbu">
            <p>Si deseás realizarnos un regalo podés colaborar con nuestra Luna de Miel...</p>
            <a data-fancybox="" data-src="#hidden-cbu" href="javascript:;" data-options="{&quot;touch&quot; : false}" class="btn btn-alt">Ver Datos Bancarios</a>

            <!-- Datos Cbu -->
            <div style="display: none;" id="hidden-cbu">

                <span class="title">Cuenta en pesos</span>
                <ul>
                    <li>Nombre del Titular: <?= $evento['cbu']['pesos']['titular'] ?></li>
                    <li>CBU: <?= $evento['cbu']['pesos']['cbu'] ?></li>
                    <li>Alias: <?= $evento['cbu']['pesos']['alias'] ?></li>
                    <li>CUIL: <?= $evento['cbu']['pesos']['dni'] ?></li>
                    <li><?= $evento['cbu']['pesos']['banco'] ?></li>
                </ul>

                <span class="title">Cuenta en dólares</span>
                <ul>
                    <li>Nombre del Titular: <?= $evento['cbu']['dolares']['titular'] ?></li>
                    <li>CBU: <?= $evento['cbu']['dolares']['cbu'] ?></li>
                    <li>Alias: <?= $evento['cbu']['dolares']['alias'] ?></li>
                    <li>CUIL: <?= $evento['cbu']['dolares']['cuil'] ?></li>
                    <li><?= $evento['cbu']['dolares']['banco'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
