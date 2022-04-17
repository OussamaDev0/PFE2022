<?php
    require_once 'dbconn.php';
session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom=test_input($_POST['NOM']);
            $prenom=test_input($_POST['PRENOM']);
            $email=test_input($_POST['EMAIL']);
            $requet=$pdo->prepare("UPDATE utilisateur SET user_nom=?,user_prenom=? WHERE user_email=?");
            $params=array($nom,$prenom,$email);
            $requet->execute($params);
            $_SESSION['PROFILE']['user_nom']=$nom;
            $_SESSION['PROFILE']['user_prenom']=$prenom;
            header("location:profile.php");
        }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
