<?php
session_start();
$index=$_GET['index'];
$panier=$_SESSION['panier'];
unset($panier[$index]);
$_SESSION['panier']=$panier;
if (isset($_SESSION['panier'])){
    $panier=$_SESSION['panier'];
}
else {
    $panier=array();
}

header("location:cart.php?panier=1");
?>