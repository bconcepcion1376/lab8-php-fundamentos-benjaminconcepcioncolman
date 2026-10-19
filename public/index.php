<?php
// [1] tu comentario: qué hace este archivo
declare(strict_types=1);

# [2] tu comentario: de dónde salen tus datos
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

/* [3] tu comentario: por qué se fija la zona horaria */
date_default_timezone_set('America/Panama');

// [4] tu comentario: qué guardan estas dos variables
$nombreCompleto = $est['nombre'] . ' ' . $est['apellido'];
$fechaHora = date('d/m/Y H:i');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php # [5] tu comentario: cómo se arma el título ?>
    <title>Lab 8 - <?= htmlspecialchars($est['apellido']) ?></title>
</head>
<body>
    <?php // [6] tu comentario: qué muestra el encabezado ?>
    <h1><?php echo htmlspecialchars($nombreCompleto); ?></h1>

    <?php /* [7] tu comentario: diferencia entre print y echo, o qué muestra este párrafo */ ?>
    <p>Versión de PHP: <?php print PHP_VERSION; ?></p>

    <?php # [8] tu comentario: el formato de la fecha ?>
    <p>Fecha y hora actual: <?= $fechaHora ?></p>
</body>
</html>