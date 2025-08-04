<?php
$course = "curso de PHP";
$price = 10;
$date = "2023-07-13";
$archived = true; // or false, depending on the course status
$status = $archived ? "archivado" : "activo"; // esta es la tercer manera usando operacion ternaria. Esto para mantener todo el codigo en este campo y tener solo el espacio de HTML para la presentacion.

$courseLevel = "básico"; // nivel del curso, puede ser "básico", "intermedio" o "avanzado"
$levelMessages = [
    "básico" => "Cualquiera puede tomar el curso",
    "intermedio" => "Se necesitan skills básicos de programación",
    "avanzado" => "Necesitas buen dominio del lenguaje"
];
$levelMessage = $levelMessages[$courseLevel] ?? "Nivel no especificado";

$tags = [
    "PHP",
    "Laravel",
    "HTML",
];

$requeriments = [
    "Computadora",
    "Conexión a Internet",
    "Suscripcion a platzi.com",
    "1 hora diaria de estudio",
    "Disposición para aprender",
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
   <ul>
   <?php foreach ($requeriments as $requeriment): ?>
            <li><?= $requeriment ?></li>
        <?php endforeach; ?>
   </ul>
</body>
</html>
