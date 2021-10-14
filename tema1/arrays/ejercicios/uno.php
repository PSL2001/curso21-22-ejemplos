<?php
//1.- Crear un array con los primeros 50 numeros primos
//2.- Mostrar el array siguiente en una tabla HTML
/*
trabajadores[
    "Trabajador 1" =>[
        "Nombre": manolo, 
        "mail": mail@manolo
        "ciudad": Almeria
    ],
    "Trabajador 2" =>[
        "Nombre": Ana, 
        "mail": mail@Ana
        "ciudad": Granada
    ],
    "Trabajador 3" =>[
        "Nombre": Juan, 
        "mail": mail@juan
        "ciudad": Sevilla
    ],

]

*/
function isPrimo($n){
    if($n<2) return false;
    for($i=2; $i<$n; $i++){
        if($n%$i==0) return false;
    }
    return true;

}
function pintarArraySimple($a){
    echo "<br>[";
    foreach($a as $v){
        echo "$v, ";
    }
    echo "]<br>";

}
function pintarFilas1($tra, $valor){
    $campos=array_keys($valor); //nombre, mail, ciudad
    $valores=array_values($valor); //manolo, manolo@cad, Granada
    echo "<tr>\n
    <td colspan='".count($valor)."' align='center' style='background-color:silver'>
    <b>$tra</b></td>\n</tr>\n";
    pintarFilas2($campos, 1);
    pintarFilas2($valores, 0);

}
function pintarFilas2($array, $f){
    echo "<tr>\n";
    foreach ($array as $v){
        echo ($f==0) ? "<td>$v</td>\n" : "<td align='center'><b>$v</b></td>";
    }
    echo "</tr>\n";
}
//1.-
$contPrimos=0;
$primos=[];
$numero=1;
do{
    if(isPrimo($numero)){
        $primos[]=$numero;
        $contPrimos++;
    }
    $numero++;
}while($contPrimos<50);
echo "<br>".count($primos);
pintarArraySimple($primos);
// Lo mismo hecho con un for ------------
$primos1=[];
$contPrimos1=0;
for($i=1;;$i++){
    if(isPrimo($i)){
        //echo "$i<br>";
        $primos1[]=$i;
        $contPrimos1++;
    }
    if($contPrimos1==50) break;
}
echo "<br>".count($primos1);
pintarArraySimple($primos1);
//2.------------------
$trabajadores=[
    "Trabajador1"=>[
        "Nombre"=>"Manoloo Perez",
        "Mail"=>"manolo@mail",
        "Ciudad"=>"Granada",
        "telef"=>'123456678',
    ],
    "Trabajador2"=>[
        "Nombre"=>"Ana Lucas",
        "Mail"=>"mail@ana",
        "Ciudad"=>"Almería",
        "telef"=>'123456678',
    ],
    "Trabajador3"=>[
        "Nombre"=>"Leopoldo Perez",
        "Mail"=>"mail@leopoldo",
        "Ciudad"=>"Sevilla",
        "telef"=>'123456678',
    ],
    "Trabajador4"=>[
        "Nombre"=>"Leopoldo Perez",
        "Mail"=>"mail@leopoldo",
        "Ciudad"=>"Sevilla",
        "telef"=>'123456678',
    ],
];
echo "<hr><br>";

echo "\n<table border='3' cellpadding='6' cellspacing='4' align='center'>\n";
foreach($trabajadores as $trabajador=>$datos){
    pintarFilas1($trabajador, $datos);
}
echo "\n</table>";



