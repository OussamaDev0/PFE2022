<?php
    session_start();
    $passorigin=$_SESSION['PROFILE']['user_password'];
    $id=$_SESSION['PROFILE']['id_user'];
    require_once 'dbconn.php';
    echo $_POST['PASSWORD'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password=$_POST['PASSWORD'];
            $newPassword=md($_POST['NEWPASSWORD']);
                if(md5($password)==$passorigin){
                    $requet=$pdo->prepare("UPDATE utilisateur SET user_password=? WHERE id_user=?");
                    $params=array($newPassword,$id);
                    $requet->execute($params);
                    header("location:profile.php");
                }
                else{
                    echo "<script type=\"text/javascript\"> alert('Le mot de passe est incorrect');document.location='profile.php' </script>";
                }

        }

?>