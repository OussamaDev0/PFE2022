<?php
session_start();
if (isset($_SESSION['panier'])){
    $panier=$_SESSION['panier'];
}
else {
    $panier=array();
}
$index=count($panier);
$panier[$index]['prod_img']=$_POST['prod_img'];
$panier[$index]['prod_nom']=$_POST['prod_nom'];
$panier[$index]['prod_prix']=$_POST['prod_prix'];
$_SESSION['panier']=$panier;
header("location:cart.php?panier=1");
?>