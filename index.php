<?php
declare(strict_types=1);

$pageTitle = 'Sistema de Cotizaciones | PERSEVI';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <main class="welcome">
        <div class="brand-mark" aria-hidden="true">P</div>
        <p class="eyebrow">PERSEVI · Gestión comercial</p>
        <h1>Sistema de cotizaciones</h1>
        <p class="description">Entorno local preparado correctamente. Construiremos aquí el registro de clientes, servicios, cotizaciones y la generación de PDF.</p>
        <div class="status"><span class="status-dot"></span> PHP está ejecutándose correctamente</div>
        <p class="version">PHP <?= htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8') ?></p>
    </main>
</body>
</html>
