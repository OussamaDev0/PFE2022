<?php
require_once 'dbconn.php';
session_start();
$iduser=$_SESSION['PROFILE']['id_user'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ville_nom=test_input($_POST['ville_nom']);
    $ville_nom_reg=test_input($_POST['ville_nom_reg']);
    $ville_cp=test_input($_POST['ville_cp']);
    $cli_nom=test_input($_POST['cli_nom']);
    $cli_prenom=test_input($_POST['cli_prenom']);
    $cli_tel=test_input($_POST['cli_tel']);
    $cli_adresse=test_input($_POST['cli_adresse']);
    $villeID=test_input($_POST['id_ville']);
    $cliID=test_input($_POST['id_client']);

    $requetVille=$pdo->prepare("UPDATE ville SET ville_cp=?, ville_nom=?, ville_nom_reg=? WHERE id_ville=?");
    $params=array($ville_cp,$ville_nom,$ville_nom_reg,$villeID);
    $requetVille->execute($params);

    $requetClient=$pdo->prepare("UPDATE client SET cli_nom=?, cli_prenom=?, cli_adresse=?, cli_tel=? WHERE id_client=?");
    $params1=array($cli_nom,$cli_prenom,$cli_adresse,$cli_tel,$cliID);
    $requetClient->execute($params1);

    header("location:profile.php");
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
