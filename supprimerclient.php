<?php require_once 'securityProfile.php'; ?>
<?php

    if(isset($_GET['id'])) {
        require_once 'dbconn.php';
        $id = $_GET['id'];
        $requete=$pdo->prepare("DELETE FROM client WHERE id_client=?");
        $requete->execute([$id]);
        header("location:profile.php");
    }
    else{
        header("location:profile.php");
    }
?>