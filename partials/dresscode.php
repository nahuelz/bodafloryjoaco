<!-- Dress Code -->
<section class="dresscode">
    <div class="container animated divDressCode">
        <h3 style="color: white !important;">Dress Code</h3>
        <p>Por favor evitar prendas en colores blancos y beige.</p>
        <div class="row dresscode-options">
            <div class="col-md-6 dresscode-option">
                <img src="./assets/icons/icono-dresscode-hombres.svg" alt="Dress code para hombres" class="icon">
                <h4>Ellos</h4>
                <p style="font-size: 20px;"><?= $evento['dress_code']['hombres'] ?></p>
            </div>
            <div class="col-md-6 dresscode-option">
                <img src="./assets/icons/icono-dresscode-mujeres.svg" alt="Dress code para mujeres" class="icon">
                <h4>Ellas</h4>
                <p style="font-size: 20px;"><?= $evento['dress_code']['mujeres'] ?></p>
            </div>
        </div>
    </div>
</section>
