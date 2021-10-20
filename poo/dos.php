<?php
require 'src/Persona1.php';
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
        $persona1=new Persona1;
        echo $persona1->username;
        echo $persona1->mail;
        echo $persona1->dni;

        $persona1->mail="cooreo@corre.es";
        $persona1->username="username_23";
        echo "<br>Hola</br>";
    ?>
    
</body>
</html>