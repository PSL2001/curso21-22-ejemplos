<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ejemplo</title>
</head>
<body style="background-color:cadetblue">
<h3 class="mt-4 text-center">Procesando Formulario 1</h3>
    <div class="container">
        <?php
            //recogemos lo mandado por el formulario
            //$_REQUEST
            echo "<br>";
            var_dump($_REQUEST);
            echo "<br>";

            //-------------------------------------
            $nombre = trim(ucwords($_REQUEST['nombre']));
            $email=trim($_POST['email']);
            $texto=trim(ucfirst($_POST['texto']));
            /*if(isset($_POST['provincia'])){
                echo "La provincia elegida es: ".$_POST['provincia'];
            }else{
                echo "No has eligido provincia";
           }*/
           echo (isset($_POST['provincia'])) ? "La provincia elegida es: ".$_POST['provincia'] : "No has elegido prov";
            echo "<br>Tu nombre es: $nombre</br>";
            echo "<br>Tu Correo es: $email</br>";
            echo "<br>Esto es lo que hablaste sobre ti: $texto</br>";

        ?>
        <div class="mt-2">
            <a href="funo.php" class="btn btn-primary"><i class="fas fa-backward"></i> Volver</a>
        </div>
    </div>
    
</body>
</html>