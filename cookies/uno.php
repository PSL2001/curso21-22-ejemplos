<?php
//Cookie contador de visitas
if (isset($_COOKIE['contador'])) {
    //ya existe le incrementamos en uno su valor
    setcookie('contador', $_COOKIE['contador'] + 1, time() + (60 * 60 * 24 * 7));
} else {
    //no existe, es nuestra primera visita, creamos la cookie
    setcookie('contador', 1, time() + (60 * 60 * 24 * 7));
}
//Cookie fecha ultima visita 
$date = date('d/m/Y, H:i:s');
if(isset($_COOKIE['fechaVisita'])){
    $mensaje = "Visito la página por última vez: ".$_COOKIE['fechaVisita'];
    setcookie('fechaVisita', $date, time()+(365*24*60*60));
}
else{
    $mensaje= "Es tu primea vista a nuestra página";
    setcookie('fechaVisita', $date, time()+(365*24*60*60));

}
//Para resetear contador de visitas
if (isset($_POST['btnEnviar'])) {
    //reseteamos el contador
    setcookie('contador', 23, time() - 10);
    header("Location:uno.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body style="background-color:blanchedalmond">
        <?php
        if (isset($_COOKIE['contador'])) {
            echo "Has visitado la página: <b>" . $_COOKIE['contador'] . "</b> veces<br>";
        } else {
            echo "Es tu primera visita";
        }
        ?>
        <br>
        <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name='a'>
                <input type='submit' name="btnEnviar" value='Resetear Contador' />
            </form>
        </center>
        <hr>
        <?php echo $mensaje ?>
    </body>

    </html>
<?php } ?>