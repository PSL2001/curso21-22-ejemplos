<?php
//funciones recursiva
function calcularFactorial(int $num){
    if($num==0) return 1;
    return $num*calcularFactorial($num-1);
}
echo "<br>".calcularFactorial(0);
echo "<br>".calcularFactorial(3);
echo "<br>".calcularFactorial(4);
echo "<br>".calcularFactorial(170);
echo "<br>".calcularFactorial(171);
//funciones callback y anonimas
function isPrimo(int $n): bool{
    if($n<=1) return false;
    for($i=2; $i<$n; $i++){
        if($n%$i==0) return false;
    }
    return true;
}
function isMult3(int $n): bool{
    return ($n%3==0);
}
function isPositivo($n):bool{
    return ($n>0);
}
function pintarArray($a){
    echo "<br>[";
    foreach($a as $v){
        echo "$v, ";
    }
    echo "]<br>";

}
//Funcion callback
function seleccionEnArray($array, $funcion){
    $arrayDevuelto=[];
    foreach($array as $v){
        if($funcion($v)) $arrayDevuelto[]=$v;
    }
    return $arrayDevuelto;
}

//------
$numeros=range(-100,100);
//PintarArray($numeros);
$primos=[];
foreach($numeros as $v){
    if(isPrimo($v)) $primos[]=$v;
}
pintarArray($primos);
$positivos=[];
foreach($numeros as $v){
    if(isPositivo($v)) $positivos[]=$v;
}
pintarArray($positivos);
$mult3=[];
foreach($numeros as $v){
    if(isMult3($v)) $mult3[]=$v;
}
pintarArray($mult3);
$primos1=seleccionEnArray($numeros, "isPrimo");
pintarArray($primos1);
$mult3a=seleccionEnArray($numeros, "isMult3");
pintarArray($mult3a);
//----------------------------------------
$primos4=array_filter($numeros, "isPrimo");
pintarArray($primos4);
//-----------------------------Funciones anónimas
$saludo=function(){
    return "<br>Hola";
};
echo $saludo();
//------------------------------------
//array_map 
$numeros=range(5,10);
function doble($n){
    return $n*2;
}
$dobles=array_map("doble", $numeros);
pintarArray($dobles);
$dobles1=array_map(function($n){
    return 2*$n;}, $numeros);
pintarArray($dobles1);















