<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:login.php");
    die();
}
echo "Te has logeado como ".$_SESSION["usuario"];
echo "<br><center>";
echo "<a href='logout.php'>Cerrar Sesion</a>";
