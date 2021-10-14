<!DOCTYPE html>
<?php 
    if(isset($_POST['btnSubir'])){
        //procesamos el formulario
        echo var_dump($_FILES);
        echo "<br>";
        $dir_subida="/home/pacofer71/public_html/formularios/uploads/";
        $fichero_subido=$dir_subida.basename($_FILES['fotoPerfil']['name']);
        echo "<br>$fichero_subido";
        //movemos de la carpeta temporal a uploads
        if(move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $fichero_subido)){
         echo "<br>Fichero subido con exito.";

        }
        else{
            echo "<br>Hubo un error al guardar el archivo";
        }
    }
    else{
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo</title>
</head>
<body>
    <form name="files" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <p><b>Sube tú foto de pérfil</b></p>
    <input type="file" name="fotoPerfil">
    
    <br><br>

    <center>
    <input type="submit" name="btnSubir" value="Subir">
</center>
    </form>
</body>
</html>
<?php } ?>