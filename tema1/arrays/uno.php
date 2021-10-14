<?php
//Definicion
$a=[1,2,3,4,5,6,7,8,9]; //forma moderna
$b=array(1,2,3,4,5,6, "Manolo"); //forma clásica
echo gettype($a);
echo "<br>";
echo gettype($b);
//forma rapida
//1.-print_r   solo arrays
echo "<br>";
print_r($a);
//2.- var_dump para cualquier variable
echo "<br>";
var_dump($b);
//3.- var_export para cualquier variable
echo "<br>";
var_export($b);
//------------------------------------------
$vector=[1,2];
$vector[]=4;
$vector[]="Manolo";
echo "<br>";
var_export($vector);
echo "<hr>[";
for($i=0; $i<count($vector); $i++){
    echo "$vector[$i], ";
}
echo "]<br>";
//---------------------------------
$vector2=[1,2];
$vector2[8]="Elemento 8";
$vector2[3]="Elemento 3";
$vector2[]="No se que elemento soy";
$vector2[15]="Se que soy el 15";
$vector2[]="Sigo perdido";
$vector2[0]="Soy el cero";
$vector2["manolo"]="Soy el indice manolo???";
$vector2[]="Sigo pero que muy perdido";
echo "<br>";
var_export($vector2);
echo "<br>".$vector2["manolo"];
//Veamos la manera de recorrer arrays en php
echo "<br>[";
foreach($vector2 as $k=>$v){
    echo "$k='$v', ";
}
echo "]<br>";
//--------------------------------------------
//Array de dimensión mayor que 1
$comunidades=[
    'Andalucia'=>['Almería', 'Cadiz', 'Cordoba'],
    'Extremadura'=>['Caceres', 'Badajoz'],
    'Murcia'=>['Murcia']
];
echo "<br>".var_export($comunidades);
echo "<br>".var_dump($comunidades);
echo "<hr>";
$comunidades['Aragón']=['Zaragoza', 'Huesca', 'Teruel'];
echo "<br>".var_dump($comunidades);
$comunidades[]="No tengo nombre";
echo "<br>".var_dump($comunidades);
//--------------------
unset($comunidades); //destruyo comunidades;
$andalucia=['Almería', 'Cadiz', 'Cordoba', 'Granada', 'Huelva', 'Jaen', 'Málaga', 'Sevilla'];
$extremadura=['Caceres', 'Badajoz'];
$murcia=['Murcia'];
$comunidades=[
    'Andalucia'=>$andalucia, 
    'Extremadura'=>$extremadura,
];
$comunidades['Murcia']=$murcia;

echo "<br>".var_dump($comunidades);
//funcion compact hace lo de arriba;
$comunidades2=compact('andalucia', 'extremadura', 'murcia');
echo "<br>".var_dump($comunidades2);
//Recorramos un array de dimension 2 con el foreach
echo "<hr><br>";
echo "[<br>";
foreach($comunidades as $k=>$v){
    echo "$k=>[";
    foreach($v as $k1=>$v1){
        echo "$v1, ";
    }
    echo "],<br>";
}
echo "]";
//-------------------------------------------------------
foreach($comunidades as $k=>$v){
    echo "\n<table border=5 cellpadding='4' align='center'>
            \n<tr>\n<td colspan='".count($v)."' align='center'>
            $k</td></tr>\n<tr>";
    foreach($v as $k1=>$v1){
        echo "<td>$v1</td>\n";
    }
    echo "</tr></table><br>\n";
}















