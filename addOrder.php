<?php
session_start();
require_once 'dbconn.php';
require_once 'Classes/Panier.php';
$idUser=$_SESSION['PROFILE']['id_user'];
$Panier= new Panier($idUser);
$listProduits=$Panier->getPanier();


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $idAdresse=test_input($_POST['address']);
    $paimentMethod=test_input($_POST['payment-method']);
    $facteurNo=rand(10000000,99999999);
    foreach ($listProduits as $produit){
            $tableax=Array($facteurNo,$produit['qte'],$produit['prix']*$produit['qte'],$produit['size'],$produit['id'],$paimentMethod,$idUser,$idAdresse);
            $Req=$pdo->prepare("INSERT INTO commande(`facteur_no`,`qty`,`prix_total`,`size`,`id_produit`,`id_paiment`,`user_id`,`id_client`) VALUES (?,?,?,?,?,?,?,?)");
            $Req->execute($tableax);
    }
    $Panier->clear();
   header("location:login-ecommerce.php");

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}