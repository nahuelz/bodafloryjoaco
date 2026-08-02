<?php require __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<?php include __DIR__ . '/partials/head.php'; ?>

<body>
<?php include __DIR__ . '/partials/sobre.php'; ?>

<div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 404px; width: 1905px;"><img class="parallax-slider" src="assets/img/portada.jpg" style="transform: translate3d(0px, -333px, 0px); position: absolute; height: 1071px; width: 1905px; max-width: none;"></div>
<div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden;"><img class="parallax-slider" src="./assets/img/moscu.jpg"></div>

<?php include __DIR__ . '/partials/audio.php'; ?>
<?php include __DIR__ . '/partials/portada.php'; ?>
<?php include __DIR__ . '/partials/cuenta-regresiva.php'; ?>
<?php include __DIR__ . '/partials/ceremonia-fiesta.php'; ?>
<?php include __DIR__ . '/partials/galeria.php'; ?>
<?php include __DIR__ . '/partials/cbu.php'; ?>
<?php include __DIR__ . '/partials/instagram.php'; ?>
<?php include __DIR__ . '/partials/dresscode.php'; ?>
<?php include __DIR__ . '/partials/confirmar.php'; ?>
<?php include __DIR__ . '/partials/canciones.php'; ?>
<?php include __DIR__ . '/partials/info-util.php'; ?>
<?php include __DIR__ . '/partials/gracias.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>

</body>
</html>
