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
    <h2>
        Bienvenido al <?= $course ?>
    </h2>
    <h4>
        Fecha de inicio: <?= $date ?>
    </h4>
    <p>
        El precio del curso es de <?= $price ?> dolares.
    </p>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat nostrum odio distinctio illum in perferendis ad eligendi unde commodi? Ad quia impedit tempore voluptates tenetur quos, aut magni dolor blanditiis?
    </p>
    <p>
        El estado del curso es: <b><?= $status ?></b>.
    </p>
    <h5>Etiquetas del curso:</h5>
    <ul>
        <?php foreach ($tags as $tag): ?>
            <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>
    <p>
        Nivel del curso: <?= $courseLevel ?><br>
        Requisitos: <?= $levelMessage ?>
    </p>
    <h5>Cosas a necesitar:</h5>
    <ul>
        <li><?= $requeriments[1] ?></li>
        <li><?= $requeriments[3] ?></li>
    </ul>  
</body>
</html>
