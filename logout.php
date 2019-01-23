<?php 
session_start();
//Destruimos la sesion
session_destroy();
//Redirigimos
header('Location: index.php');
?>