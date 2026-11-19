<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO -->
    <meta name="description" content="13 de febrero de 2027. ¡Nos casamos! Queremos compartir este día tan especial con vos.">
    <meta name="keywords" content="Invitación a la boda de Flor & Joaco">

    <!-- Open Graph / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bodafloryjoaco.com.ar/">
    <meta property="og:locale" content="es_AR">

    <meta property="og:title" content="¡Nos casamos! Flor & Joaco">
    <meta property="og:description" content="13 de febrero de 2027. ¡Te esperamos para compartir este día tan especial!">

    <meta property="og:image" content="https://bodafloryjoaco.com.ar/preview.jpg?v=<?= filemtime(__DIR__ . '/../preview.jpg') ?>">
    <meta property="og:image:secure_url" content="https://bodafloryjoaco.com.ar/preview.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:alt" content="Invitación de boda de Flor y Joaco">


    <!-- Tailwind (para el sobre de apertura) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Desactivar Preflight para no pisar estilos de Bootstrap
        tailwind.config = { corePlugins: { preflight: false } };
    </script>

    <!-- Listado de css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css?v=<?= filemtime(__DIR__ . '/../assets/css/styles.css') ?>">
    <link rel="stylesheet" href="./assets/css/sobre.css?v=<?= filemtime(__DIR__ . '/../assets/css/sobre.css') ?>">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="./assets/css/all.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./favicon.ico?v=<?= filemtime(__DIR__ . '/../favicon.ico') ?>">

    <title><?= $evento['titulo'] ?></title>
</head>
