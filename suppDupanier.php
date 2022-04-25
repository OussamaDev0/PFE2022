<?php
session_start();
$iduser=$_SESSION['PROFILE']['id_user'];
require_once 'Classes/Panier.php';
$Panier= new Panier($iduser);
$Panier->delete($_GET['id']);
$redirection=$_GET['page'];
header("location:".$redirection);
?>