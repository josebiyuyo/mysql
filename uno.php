<?php
//comprobacion de session

$user="jose";
$pass=2021;

if($_POST['user']==$user && $_POST['passw']==$pass){

session_start();
$_SESSION['user'] = "Jose Andres Clara";
$_SESSION['region'] = "Puerto Cabello, Edo. Carabobo";
header('location:v.php');

} else{
   echo "<br><br><center><h2>Error en la validación de datos</h2></center>";

  echo "<center><h2><a href='index.php'>Intentarlo nuevamente</a></center><br>";

  }


?>