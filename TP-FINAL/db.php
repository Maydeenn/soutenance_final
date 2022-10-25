<?php
$_SERVER = "localhost";
$user = "root";
$pass = "root";
$database = "tp_soutenance";

$connection = mysqli_connect($_SERVER, $user, $pass, $database);

if (!$connection) {
   die('erreur');    
}
?>