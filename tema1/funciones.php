<?php
  // include 'funciones/funciones1.php';
   //include_once 'funciones/funciones1.php';
   //require 'funciones/funciones1x.php';
   require_once 'funciones/funciones1x.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Funciones</title>
</head>
<body style="background-color:cadetblue">
<div class="container mt-6">
<?php
    echo suma("34", 90.56);
    pintarTabla(10);
    pintarTabla(20);
    pintarTabla();
    saludo("Manolo");
    saludo();
    //--------------
    $miNumero=45;
    echo '<br>El valor de $miNumero antes de llamar a la funcion es:'.$miNumero;
    cambiarNumero();
    echo '<br>El valor de $miNumero después de llamar a la funcion es:'.$miNumero;
    
    ///Probamos lo mismo con cambiarNumero1
    $miNumero=45;
    echo '<br>El valor de $miNumero antes de llamar a la funcion es:'.$miNumero;
    cambiarNumero1($miNumero);
    echo '<br>El valor de $miNumero después de llamar a la funcion es:'.$miNumero;
    contador();
    contador();
    contador();
    echo "<hr><hr>";

?>
</div>  
</body>
</html>