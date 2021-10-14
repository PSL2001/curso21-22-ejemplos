<?php
function pintarArray($a){
    echo "<hr>";
    foreach($a as $k=>$v){
        echo "$k=>$v<br>";
    }
    echo "<hr>";
}
$array=["Juan", "Manuel", "Ana"];
foreach($array as $v){
    echo "$v, ";
}
echo "<br>";
//------------------ count => dimension array
echo count($array);
echo "<br>";
//---compact nos permiter crear arrays asociativos
$nombre="Ana Perez";
$correo="ana@mail.es";
$array = compact('nombre', 'correo');
//------------creando arrays
$numeros=range(50, 150);
echo "<br>";
var_export($numeros);
$miArray=array_fill(0, 10, "");
echo "<br>";
var_export($miArray);
$miArray=array_fill(0, 5, array_fill(0,4, "Celdas"));
echo "<br>";
var_dump($miArray);
//rellenar arrays
$a=[1,2,3,4];
array_pop($a);
echo "<br>";
print_r($a);
//3.- Añadimos al principio
array_unshift($a, "Primer Elemento");
echo "<br>";
print_r($a);
//4.- quitamos el primer elemento
array_shift($a);
echo "<br>";
print_r($a);
//--------------extraer lo de un array en variables
$datos=["Manolo", "man@mail", "654216712"];
$nombre=$datos[0];
$mail=$datos[1];
$telef=$datos[2];
list($n, $m, $t)=$datos;
echo "<br>Nombre=$nombre...$n";
//---Buscando en un array
echo "<br>";
$images=["image/gif", "image/jpeg", "image/bmp"];
$miTipo="application/epub+zip";
$miTipo="image/gif";
if(in_array($miTipo, $images)){
    echo "El formato es correcto";

}
else{
    echo "El formato NO es correcto";
}
echo "<br>";
echo (in_array($miTipo, $images)) ? "El formato es correcto": "El formato NO es correcto";

//implode y explode convertir arrays en strings y viceversa
//1.- Array en string array_implode
$a=["usuario", "usuario@mail", "+34(950121212)"];
$texto=implode(":", $a);
echo "<br>$texto";
$texto="usuario:grupo:idg:idu:ssid";
$a=explode(":", $texto);
echo "<br>";
echo "<br>".var_dump($a);
//Metodos de ordenacion ----------
//sort, rsort, asort, arsort, ksort, krsort
$comunidades=[
    'Extremadura'=>'Badajoz',
    'Andalucia'=>'Sevilla', 
    'Region de Murcia'=>'Murcia'
];
$comunidades1=$comunidades;
$comunidades2=$comunidades;
$comunidades3=$comunidades;
$comunidades4=$comunidades;
$comunidades5=$comunidades;
echo "<br>\$comunidades antes de sort";
pintarArray($comunidades);
//1.- sort
sort($comunidades);
echo "<br>\$comunidades después de <b>sort</b>";
pintarArray($comunidades);  
//---------------------------------------------
echo "<br>\$comunidades antes de <b>rsort</b>";
pintarArray($comunidades1);
//2.- rsort
rsort($comunidades1);
echo "<br>\$comunidades después de <b>rsort</b>";
pintarArray($comunidades1);  
//---------------------------------------------
echo "<br>\$comunidades antes de <b>ksort</b>";
pintarArray($comunidades2);
//3.- ksort
ksort($comunidades2);
echo "<br>\$comunidades después de <b>ksort</b>";
pintarArray($comunidades2);  
//---------------------------------------------
echo "<br>\$comunidades antes de <b>krsort</b>";
pintarArray($comunidades3);
//4.- krsort
krsort($comunidades3);
echo "<br>\$comunidades después de <b>krsort</b>";
pintarArray($comunidades3);  
//---------------------------------------------
echo "<br>\$comunidades antes de <b>asort</b>";
pintarArray($comunidades4);
//4.- asort
asort($comunidades4);
echo "<br>\$comunidades después de <b>asort</b>";
pintarArray($comunidades4);  
//---------------------------------------------
echo "<br>\$comunidades antes de <b>arsort</b>";
pintarArray($comunidades5);
//4.- arsort
arsort($comunidades5);
echo "<br>\$comunidades después de <b>arsort</b>";
pintarArray($comunidades5);  
//-------------------------------------------------------
//mezclar arrays array_merge()
$a=["juan"=>"Valor de Juan", "manolo", 6, 7, "Ana"];
$b=["b1", "b2", "b3", 9, 1, "juan"=>34];
$mezcla=array_merge($a, $b);
echo "<hr><hr>";
print_r($mezcla);

//desordenar un array
$valores=range(1,6); //[1,2,3,4,6]
echo "<br><br>";
var_dump($valores);
shuffle($valores);
echo "<br><br>";
var_dump($valores);

//extraer claves o valores de un array
$comunidades=[
    'Extremadura'=>['Badajoz', "Caceres"],
    'Andalucia'=>'Sevilla', 
    'Region de Murcia'=>'Murcia'
];

$claves=array_keys($comunidades);
$valores=array_values($comunidades);
echo "<hr>";
echo "Los valores son:<br>";
var_dump($valores);
echo "Las claves son:<br>";
var_dump($claves);























































