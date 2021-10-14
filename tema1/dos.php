<?php
    define("PI", 3.1415);
    define("NOMBRE", "Mi Aplicación");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="background-color:cadetblue">
<div class="container mt-4">
<?php
    //bucle for
    for($i=0; $i<=10; $i++){
        echo $i."<br>".PHP_EOL;
    }
    //
    $num=9;
    echo "<table class='table table-striped table-dark'>";
    for($i=1; $i<11; $i++){
        echo "<tr>\n";
        echo "<td>$num</td>\n";
        echo "<td>X</td>\n";
        echo "<td>$i</td>\n";
        echo "<td>=</td>\n";
        echo "<td>".$num*$i."</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
    //-----------
    $num=80;
    echo "<table class='table table-striped table-dark'>";
    for($i=1; $i<=$num; $i++){
        echo "<tr>\n";
        echo "<td>$num</td>\n";
        echo "<td>X</td>\n";
        echo "<td>$i</td>\n";
        echo "<td>=</td>\n";
        echo "<td>".$num*$i."</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";

    //------
    echo "<hr>Bucle while<br>";
    $i=10;
    while($i<10){
        echo "$i<br>";
        $i++;
    }
    echo "<hr>Bucle do while<br>";
    $i=10;
    do{
        echo "$i<br>";
        $i++;
    }while($i<10);
    //--------------------------------------------------
    $a=50;
    if($a){
        echo "\$a=$a lo considera verdadero";
    }
    else{
        echo "\$a=$a lo considera falso";
    }
    // && || 
    $nombre="ju";
    echo "<br>";
    switch($nombre){
        case "manolo":
            echo "Biennn";
            break;
        case "juan":
            echo "veremos...";
            break;
        default :
            echo "No se tu nombre";
    }
    echo "<br>";
    echo "PI²=".PI*PI;
    echo "<br>";
    echo NOMBRE;











































?>
</div>
    
</body>
</html>