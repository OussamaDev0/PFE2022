<?php
require_once 'securityProfile.php';
session_start();
require_once ('dbconn.php');
require_once 'Classes/Panier.php';
   $iduser=$_SESSION['PROFILE']['id_user'];
    $result = $pdo->prepare("SELECT * FROM produit WHERE id_produit=?");
    $params=array($_POST['id']);
    $result->execute($params);
    $produit=$result->fetch();
    $Panier=new Panier($iduser);
    $valeurs=array(
        'nom' => $produit['prod_nom'],
        'prix' => $produit['prod_prix'],
        'qte' => $_POST['qte'],
        'id'=> $produit['id_produit'],
        'image' => $produit['prod_img'],
    );

    $Panier->set($_POST['id'], $valeurs);
header("location:logged_in_for-each-image.php?productID=".$_POST['id']);
?>