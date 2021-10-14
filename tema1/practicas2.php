<?php
    function pintarTabla($fil, $col){
        echo "<table align='center' border='2' cellpadding='4'>\n";
        for($i=0; $i<$fil; $i++){
            echo "<tr>";
            for($j=0; $j<$col; $j++){
                echo "<td>";
                echo "[".($i+1).", ".($j+1)."]";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>".PHP_EOL;

        
    }
    function error($text){
        echo "<h3 style='color:red'>$text</h3>";
    }
    function pintarTablero(){
        echo "<table align='center' border='2' cellpadding='6' cellspacing='6'>\n";
        for($f=0; $f<8; $f++){
            echo "<tr>";
            for($c=0; $c<8; $c++){
                if(($f+$c)%2==0){
                    pintarCelda("black", "white");
                    
                }else{
                    pintarCelda("white", "black");
                }
                
            }
            echo "</tr>";
        }
    }
    function pintarCelda($fondo, $texto){
        echo "<td style='color:{$texto}; background-color:{$fondo}'>A</td>\n";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

    <title>Document</title>
</head>
<body style="background-color:silver">
<?php
    if(isset($_GET['f']) && isset($_GET['c'])){
        $f=(int)$_GET['f'];
        $c=(int)$_GET['c'];
        if(!is_int($f) || !is_int($c) ){
            error("Los parametros deben ser enteros!!!");
        }else{
            if($f<1 || $c<1){
                error("Filas y Columnas deben ser mayor que 1!!!!");
            }
            else{
                pintarTabla($f, $c);
            }
        }
    }
    else{
        error("Debes pasar filas y columnas por <b>get</b> en la url");
    }
    echo "<hr>";
    pintarTablero();

           
?>

</body>
</html>