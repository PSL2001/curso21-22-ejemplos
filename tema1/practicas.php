<?php
function operaciones($a, $b, $operacion)
{
    switch ($operacion) {
        case "suma":
            return "La suma es: " . $a + $b . "<br>";
        case "resta":
            return "La resta es: " . $a - $b . "<br>";
        case "producto":
            return "El producto es: " . $a * $b . "<br>";
        case "division":
            if ($b != 0) {
                return "La division es: " . $a / $b . "<br>";
            }
            return "<div class='alert alert-danger' role='alert'>
            Error al dividir por cero</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Prácticas</title>
</head>

<body style="background-color:cadetblue">
    <div class="container mt-2">
        <h1 class="text-center my-2">Prácticas</h1>
        <?php
        echo operaciones(12, 56.9, "suma");
        echo operaciones(12, 56.9, "resta");
        echo operaciones(12, 56.9, "producto");
        echo operaciones(12, 56.9, "division");
        echo operaciones(12, 56.9, "xxxxx");
        echo operaciones(12, 0, "division");
        //Vamos a pasar los numeros y la operacion por get
        //usando la url
        //comprobamos que le pasamos los datos pot get
        //antes de procesarlos
        if (isset($_GET['num1']) && isset($_GET['num2']) & isset($_GET['op'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $op = $_GET['op'];
            echo "<br>Datos pasados por get<br>";
            echo operaciones($num1, $num2, $op);
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            No has pasado los datos por get</div>";
        }
        ?>
    </div>
</body>

</html>