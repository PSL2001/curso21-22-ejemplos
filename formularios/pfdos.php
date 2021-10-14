<?php
//echo var_dump($_REQUEST)."<br>";
/*
if(isset($_POST['prov'])){
   echo "Provincias elegidas en checkbox: <br>";
   echo "<ul>";
   foreach($_POST['prov'] as $v){
       echo "<li>$v</li>";
   }
   echo "</ul>";
}
else{
    echo "No has mandado nada en check";
}
if(isset($_POST['prov1'])){
    echo "<br>Provincias elegidas en el select: <br>";
    echo "<ul>";
    foreach($_POST['prov1'] as $v){
        echo "<li>$v</li>";
    }
    echo "</ul>";
 }
 else{
     echo "<br>No has mandado nada en el select";
 }
 */
if(isset($_POST['rb'])){
    echo "<br>Has elegido la opción: ".$_POST['rb'];
}else{
    echo "<br>NO elegiste ninguna opcion en el radio button";
}
 
