<?php require_once('dbconn.php');
    require_once 'Classes/Panier.php';
?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $login=$_POST['EMAIL'];
            $password=md5($_POST['PASSWORD']);
            $ps=$pdo->prepare("SELECT * FROM utilisateur WHERE user_email=? AND user_password=?");
            $params=array($login,$password);
            $ps->execute($params);
                if($user=$ps->fetch()){
                    session_start();
                    $_SESSION['PROFILE']=$user;
                   // $_SESSION['Panier']= new Panier("Produits",$user['id_user']);
                    header("location:login-ecommerce.php");
                }
                else{
                    header("location:login-form.php");
                }
    }
?>
