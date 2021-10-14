<!DOCTYPE html>
<?php
$tiposPermitidos=
    [   'image/jpg',
        'image/jpeg', 
        'image/png', 
        'image/webp', 
        'image/gif',
        'image/x-icon',
        'image/svg-xml',
        'image/tiff'
    ];
    if(isset($_POST['btnSubir'])){
        //procesamos la subida
        if($_FILES['foto']['error']==0){
            //se ha podido subir sin problema el fichero
            //1.- compruebo el tipo
            //die($_FILES['foto']['type']);
            if(in_array($_FILES['foto']['type'], $tiposPermitidos)){
                //el tipo es válido ie, es una imagen lo guardamos
                $dir_sub="/home/pacofer71/public_html/formularios/uploads/";
                //le damos un nombre único
                $nombre=uniqid()."_".basename($_FILES['foto']['name']);
                $destinoFinal=$dir_sub.$nombre;
                if(move_uploaded_file($_FILES['foto']['tmp_name'], $destinoFinal)){
                    echo "<br>Foto de perfil subida con éxito";
                }
                else{
                    echo "<br>Hubo un error al guardar el archivo";
                }
            }
            else{
                //El tipo NO es valido no he subido una imagen
                echo "Error se esperaba un archivo de tipo imagen";
            }

        }
        else{
            echo "<br>Hubo algun error al subir!!!";
        }
    }
    else{
        //pintamos el form
    
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="as" method='POST' action='subirfile2.php' enctype="multipart/form-data">
    <p><b>Sube tu foto de perfil</b></p>
    <input type='file' name="foto" accept="image/*" />
    <br><br>
    <center>
        <input type="submit" value="Subir" name="btnSubir" />
    </center>
</form>
</body>
</html>
<?php } ?>