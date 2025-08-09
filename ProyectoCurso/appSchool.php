<?php
require_once  "Teacher.php";
require_once  "Course.php";
require_once  "Student.php";

$teacher1 = new Teacher(
    name: "Saul",
    email: "saulmendozamoreira@gmail.com",
    title: "Ingeniero en TI"
);

$course1 = new Course(
    name: "Sciencias Cuanticas",
    teacher: $teacher1,
);
$student = new Student(name: "Maria",
lastName:"No me acuerdo",email:"mujerdesaul",phone:"convencional",Course:$course1)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela Proyecto</title>
</head>
<body>
    <h1>Libreta de estudiante</h1>
    <p><?=$student?></p>
</body>
</html>