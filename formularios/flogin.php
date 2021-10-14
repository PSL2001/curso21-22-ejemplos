
<?php
    function comprobarCampo($texto, $campo){
        if(strlen($texto)==0){
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Rellene el campo $campo !!!!";
            echo "</div>";
            echo "<a href='".$_SERVER['PHP_SELF']."' class='btn btn-primary'>Volver</a>";
            return false;
        }
        return true;
    }
?>
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

<body style="background-color: blanchedalmond;">
    <h4 class="mt-4 text-center">Gestiona S.A.</h4>
    <div class="container mt-4">
    <?php
            //echo var_dump($_REQUEST);
            if(isset($_POST['btnEnviar'])){
                //hemos dado al boton enviar, proceso los datos
                $usuario=trim($_POST['usuario']);
                $pass=trim($_POST['pass']);
                if(comprobarCampo($usuario, "Usuario") && comprobarCampo($pass, "Pass")){
                    echo "<br><b>Usuario: </b>$usuario";
                    echo "<br><b>Password: </b>$pass<br>";
                    echo "<a href='".$_SERVER['PHP_SELF']."'
                      class='btn btn-primary'>Volver</a>";

                }

                
            }
            else{
                //No hemos dado al boron enviar pinto el formulario

        ?>
        <form name="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="idN" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="idN" placeholder="Escribe tu usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="idP" class="form-label">Password</label>
                <input type="password" class="form-control" id="idP" placeholder="Escribe tu password" name="pass" required>
            </div>
            <div class="mt-2" >
                <button type="submit" class="btn btn-success" name="btnEnviar"><i class="fas fa-sign-in-alt"></i> Login</button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-broom"></i> Reset</button>
            </div>
            

            
            
        </form>
      <?php } ?>  
    </div>

</body>

</html>