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
        echo "Hola Mundo<br>\n";
        echo "Adios Mundo";
        //--------------------Comentario de 1 linea
        /*
            Comentario
            varias Lineas

        */
        echo'<br>Hola Mundo\n';
        echo'<br>Hola Mundo<br>';
        echo "<hr>";
        //---------------------------
        //Variables -
        $cadena="Primera Cadena";
        echo $cadena;
        echo "<br>";
        echo "$cadena";
        echo "<br>";
        echo '$cadena';
        echo "<br>";
        echo "\$dolar es el signo del dolar<br>";
        echo "Hola 'Manolo'";
        echo "<br>";
        echo 'Hola "Manolo"';
        
        echo "<br>";
        echo "Hola \"manolo\"";
        echo "<br>";
        echo 'Hola \'manolo\'<br>';
        //Sintaxis heredoc
        echo <<< TEXTO
            <table border='2'>
            <tr>
                <td>Hola</td>
                <td>Hola</td>
            </tr>
            <tr>
                <td>Hola</td>
                <td>Hola</td>
            </tr>
            </table>
        TEXTO;
        //---------------
        $cadena1="Soy la cadena1";
        echo "El tipo de \$cadena1 es: ".gettype($cadena1)."<br>";
        $cadena2="Soy la cadena1";
        echo '<hr>';
        echo $cadena1." ".$cadena2."<br>Otra linea<br>";
        $cadena1=23;
        echo "El tipo de \$cadena1 es: ".gettype($cadena1)."<br>";
        echo $cadena1;

        //---------Conversion de tipos
        $num1="34";
        echo "<br>\$num1=$num1 y el tipo es: ".gettype($num1);
        $num2=45.56;
        $num3=$num1+$num2;
        echo "<br>\$num3=$num3 y el tipo es: ".gettype($num3);
        $a="23Manolo";
        $b="23Vicente";
       //$c=$a+$b;
       // echo $c;
       //bucles ----------
       echo "<hr>";
        
    ?>
    
    
</div>
</body>
</html>