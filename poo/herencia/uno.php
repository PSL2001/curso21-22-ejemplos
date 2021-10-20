<?php
    require 'src/Producto.php';
    require 'src/Interfaz1.php';
    require 'src/Ordenador.php';
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pro=new Producto(123, "Producto 1", 456.78);
        echo $pro;
        echo "<br>";
        $pc1=new Ordenador(678, "Pc Gaming", 1234.67, "Intel X64", "Linux");
        echo $pc1;
        $pc1->calculaDescuento(10);
        $pc1->muestra();
    ?>
</body>
</html>