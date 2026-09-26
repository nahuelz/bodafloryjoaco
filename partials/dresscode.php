<!-- Dress Code -->
<section class="dresscode">
    <div class="container animated divDressCode">
        <h4>DRESS CODE</h4>
        <p>Por favor evitar prendas en colores blancos y tonos similares.</p>
        <div class="row dresscode-options">
            <div class="col-md-6 dresscode-option">
                <img src="./assets/icons/icono-dresscode-hombres.svg" alt="Dress code para hombres" class="icon">
                <h5>ELLOS</h5>
                <p><?= $evento['dress_code']['hombres'] ?></p>
            </div>
            <div class="col-md-6 dresscode-option">
                <img src="./assets/icons/icono-dresscode-mujeres.svg" alt="Dress code para mujeres" class="icon">
                <h5>ELLAS</h5>
                <p><?= $evento['dress_code']['mujeres'] ?></p>
            </div>
        </div>
    </div>
</section>
