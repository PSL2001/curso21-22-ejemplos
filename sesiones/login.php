<?php
session_start();
$usuarios = [
    ['admin@gmail.com', 'secret0', 0],
    ['usuario@gmail.com', 'usuari0', 1],
    ['manolo@correo.es', 'manol0', 1]
];
function comprobarUsuario($mail, $pass)
{
    global $usuarios;
    foreach ($usuarios as $v) {
        if ($mail == $v[0] && $pass == $v[1]) {
            return $v[2];
        }
    }
    return -5;
}
if (isset($_POST['btnLogin'])) {
    //hemos mandado el formulario
    $mail = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $valor=comprobarUsuario($mail, $pass);
    if ($valor==0 || $valor==1) {
        $_SESSION['usuario']=$mail;
        $_SESSION['perfil']=$valor;
        header("Location:index.php");
        
    } else {
        $_SESSION['error']="Error en la validación";
        header("Location:login.php");

        
    }
} else {
    //Pintamos el formulario
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
        <div class="container my-4">

            <!-- Añadimos el card -->
            <div class="card mx-auto bg-secondary" style="width: 30rem;">
                <div class="card-header text-center text-white">
                    <<< IES-ALANDALUS (Almería) >>>
                </div>
                <div class="card-body">
                    <form name="asd" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="m" class="form-label text-white">Dirección de Correo</label>
                            <input type="email" class="form-control" id="m" placeholder="Tu correo" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="p" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="p" placeholder="Tu contraseña" name="password">
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info" name="btnLogin"><i class="fas fa-sign-in-alt"></i> Login</button>
                    <button type="reset" class="btn btn-warning"><i class="fas fa-broom"></i> Limpiar</button>
                    </form>
                </div>
            </div>
            <?php
                
                if(isset($_SESSION['error'])){
                    echo <<< TEXTO
                        <div class="alert alert-danger mt-4 mx-auto" role="alert" style="width: 30rem;">
                            {$_SESSION['error']}
                        </div>
                    TEXTO;
                    unset($_SESSION['error']);
                }
            ?>

        </div>

    </body>

    </html>
<?php } ?>