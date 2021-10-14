<?php
 function suma($a, $b){
    return $a+$b;
}
function pintarTabla($numero=10){
    echo "<table class='table table-striped table-dark'>";
    echo "<tr><td colspan='5'>Tabla del $numero</td></tr>";
    for($i=1; $i<=$numero; $i++){
        echo "<tr>\n";
        echo "<td>$numero</td>\n";
        echo "<td>X</td>\n";
        echo "<td>$i</td>\n";
        echo "<td>=</td>\n";
        echo "<td>".$numero*$i."</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
function saludo($nombre="No me has indicado el nombre"){
    echo "<br>Hola $nombre";
}
function cambiarNumero(){
    global $miNumero;

    $miNumero=120;
}
function cambiarNumero1(&$n){
    echo "<br>\$n en la funcion=$n<br>";
    $n=123;
}
function contador(){
    static $a=0;
    echo "<br>$a";
    $a++;
}
//funciones con un numero indeterminado de argumentos
function suma1(...$numeros){
    //lo veremos al detalle
    //cuando veamos los arrays
}