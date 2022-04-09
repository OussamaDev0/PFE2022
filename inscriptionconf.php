<?php require_once('dbconn.php'); ?>
<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nom = $_POST['NOM'];
            $prenom = $_POST['PRENOM'];
            $Email = $_POST['EMAIL'];
            $password = md5($_POST['PASSWORD']);
            $ps1=$pdo->prepare("SELECT * FROM utilisateur WHERE user_email=?");
            $ps1->execute([$Email]);
            $user=$ps1->fetch();
            if($user){
                echo "<script type=\"text/javascript\"> alert('vous êtes déjà inscrit');document.location='login-form.php' </script>";
            }
            else {
                $ps = $pdo->prepare("INSERT INTO utilisateur(user_email,user_password,user_nom,user_prenom) VALUES (?,?,?,?)");
                $params = array($Email, $password, $nom, $prenom);
                $ps->execute($params);
                header("location:login-form.php");
            }
        }

?>
