<?php
    require './src/Persona.php';
    require './src/Persona1.php';
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
        $juan=new Persona("Juan Sanchez", "Gerente", "1234567-N");
        echo "<br>Datos de \$juan=$juan<br>";
        $juan->nombre="Juan Sanchez Diaz";
        echo "<br>Datos de \$juan=$juan<br>";
        //$juan->puesto="Administrativo";
        echo "<br>Datos de \$juan=$juan<br>";
        //
        echo $juan->nombre;
        //echo $juan->dni;
        $juan->setDni("6767675-J");
        $juan->setPuesto("Administrativo");
        
        //fluent interface
        echo "<br>Datos de \$juan=$juan<br>";
        $juan->setPuesto("Becario")->setDni("44444444-P");
        echo "<br>Datos de \$juan=$juan<br>";
        //-----------------------------------------
        echo "<hr>";
        $p1=new Persona1();
        $p2=new Persona1("Manolo Jimenez", "Becario", "1234567-J");
        $p3=new Persona1("67585858-K");
        echo $p1."<br>";
        echo $p2."<br>";
        echo $p3."<br>";
        //--------------------------------
        echo "<br>";
        echo "Hemos instanciado ".Persona1::$contador." objetos de la clase Persona1";
        echo "<br>";
        echo "Hemos instanciado ".$p3::$contador." objetos de la clase Persona1";
        $p1::$contador=100;
        echo "<br>Hemos instanciado ".Persona1::$contador." objetos de la clase Persona1";
    //----------------
        $p1::setContador1(100);
        Persona1::setContador1(100);
        echo "<br>";
        echo "Contador1 = ".Persona1::getContador1();
        echo "<br>";
        echo "Contador1 = ".$p1::getContador1();
        echo "<br>";
        echo "Contador1 = ".$p2::getContador1();
        echo "<br>";
        echo "Contador1 = ".$p3::getContador1();

    //-----------------------------------------Funciones útiles para las clases
    echo "<br>La clase del objeto \$p1=".get_class($p1);
    echo "<br>La clase del objeto \$juan=".get_class($juan);
    if(class_exists("Vehiculo")){
        $coche=new Vehiculo();
    }
    else{
        echo "<br>No existe la clase Vehiculo !!!";
    }
    //$coche=new Vehiculo();
    echo "<br>";
    echo var_dump(get_class_methods("Persona1"));
    if(method_exists("Persona1", "PonerNombre")){
        $p1->PonerNombre("Manolo");
    }
    else{
        echo "<br>No existe el método PonerNombre para Persona1";
    }
    //------------------------------------------------------------------------
    echo "<hr>persona_1 y persona_2<hr>";
    $persona_1 = new Persona("Ana Perez", "Jefa", "123456789-K");
    echo "<hr><br>$persona_1";
    $persona_2=$persona_1;
    echo "<hr><br>$persona_2";
    $persona_2->nombre="Ana Perez Gil";
    echo "<hr><br>$persona_1";
    echo "<hr><br>$persona_2";
    echo "<br><br><br><br><br><br><br>";
    
    $persona_3=clone($persona_1);
    $persona_3->nombre="Pedro Salmeron";
    echo "<hr><br>$persona_1";
    echo "<hr><br>$persona_3";


    ?>
    
</body>
</html>