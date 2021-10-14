<?php
//Longitud de una cadena
$cadena="Hola Mundo";
echo "<br>";
echo strlen($cadena); //Longitud
echo "<br>";
//buscar en cadenas strstr y stristr (no casesensitive)
$cadena="usuario@correo.es";
echo strstr($cadena, '@'); //@correo.es
echo "<br>";
echo strstr($cadena, '@', true); //usuario
$cadena ="holA_mundo";
echo "<br>";
echo "Valor: ".strstr($cadena, "a_"); //vacio
echo "<br>";
echo "Valor: ".stristr($cadena, "a_");
//strpos(cad1, cad2, [desplaz=0]) primera pos de cad2 en cad1
//strrpos Lo mismo pero la ultima posicion
$cadena="micorreo@.es@Hola";
echo "<br>";
echo "La primera pos de @ es: ".strpos($cadena, "@");
echo "<br>";
echo "La ultima pos de @ es: ".strrpos($cadena, "@");
//----strspn encuentra la longitud de la subcadena que contiene
// solo caracteres de la mascara
$cadena="1942 fue un gran año";
$cadena="fue 1942 un gran año";
echo "<br>";
echo strspn($cadena, "0123456789");
//strcspn la longitud mas larga que NO esta en la mascara
$micorreo="correo.masdatos@nombre.es";
echo "<br>";
echo strcspn($micorreo, "@");
$mascara=" abcdefghijklmnñopqrstuvwxuzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
$cadenaB="Solo tengo letras";
$cadenaM="1Tengo un poco2 de # todo";
if(strspn($cadenaM, $mascara)==strlen($cadenaB)){
    echo "<br>La cadena solo tiene letras";
}
else{
    echo "<br>La cadena tiene otros símbolos a parte de letras";
}
//Comparacion de cadenas
$cad1="Manolo";
$cade2="juN";
if($cad1==$cade2){

}
//el operador === compara valor y tipo
$a=5;
$b="5";
echo "<br>";
echo ($a===$b) ? "Los valores son iguales" : "No son iguales";

//strcmp(cad1, cad2) es casesensitive
$cadena1 ="abelardo";
$cadena2="zacarias";
echo "<br>";
echo strcmp($cadena1, $cadena2); //-
echo "<br>";
echo strcmp($cadena2, $cadena1);//+
echo "<br>";
echo strcmp($cadena1, $cadena1); // 0
//strcasecmp NO case sensitive
$cadena1 ="abelardo";
$cadena2="Zacarias";
echo "<br>";
echo strcasecmp($cadena1, $cadena2); 
echo "<br>";
echo strcasecmp($cadena2, $cadena1);
echo "<br>";
echo strcasecmp($cadena1, $cadena1); 
//strnatcmp strnatcasecmp lo mismo pero orden natural
//Operar con subcadenas
//substr(cad, inicio, tamaño)
$cadena="Hola Mundo, es Viernes";
echo "<br>";
echo substr($cadena, 0, 6);
echo "<br>";
echo substr($cadena, 1, 6);
$cad = "\n\rFormato de datos\n\r";
echo "<br>";
echo substr($cad,2, -2);
//str_replace($cad1, $cad2, $cad3) 
//sustituye cad1 por cad2 en cad3
$cadena="Manolo Perez Sanchez";
echo "<br>";
echo str_replace(" ", "_", $cadena);
$cadena="El año que viene vendrá el niño";
echo "<br>";
echo str_replace("ñ", "ni", $cadena);
//ltrim, trim, rtrim-->chop
$cadena="   Hola soy una cadena   ";
echo "<br>";
//echo ltrim($cadena)."<br>";
//echo rtrim($cadena)."<br>";
echo "la longitud de \$cadena=$cadena es: ".strlen($cadena);
echo "<br>la longitud de la cadena 'limpiada' es: ".strlen(trim($cadena));
//rellenar cadenas
$cadena="Hola Mundo";
$cadena1=str_pad($cadena, 20);
$cadena2=str_pad($cadena, 20, STR_PAD_BOTH);
echo "<br>";
echo '$cadena='.$cadena." longitud=".strlen($cadena)."<br>";
echo '$cadena1='.$cadena1." longitud=".strlen($cadena1)."<br>";
echo '$cadena2='.$cadena." longitud=".strlen($cadena2)."<br>";
//mayúsculas, minúsculas strtolower, strtoupper, ucwords, ucfirst

$nombre="manolo perez sánchez";
echo "<br>$nombre<br>";
echo strtoupper($nombre)."<br>";
echo ucfirst($nombre)."<br>";
echo ucwords($nombre)."<br>";

//html htmlspecialchars() htmlentities()
echo "<br>\n";
echo "La negrita la ponemos con <b>Texto</b>\n";
echo "<br>\n";
echo htmlspecialchars("La negrita la ponemos con <b>Texto</b>");






















































