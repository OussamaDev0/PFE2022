<?php

session_start();
include("includes/db.php");
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else {
?>

<?php

    if(isset($_GET['OrderId'])){
        $confirm_id = $_GET['OrderId'];

        $confirm_order = "UPDATE commande SET com_status='Complete' where id_commande='$confirm_id'";

       $run_confirm = mysqli_query($con,$confirm_order);
        //get user info start
        /*    $get_User= "select u.user_email,u.user_nom,u.user_prenom
             from utilisateur u,commande c
             where c.user_id=u.id_user AND id_commande='$confirm_id'
             ";
            $run_User=mysqli_query($con,$get_User);
            $row_User=mysqli_fetch_array($run_User);
            $user_email=$row_User['user_email'];
            $user_nom=$row_User['user_nom'];
            $user_prenom=$row_User['user_prenom'];
        */
        //get user info end




       if($run_confirm){

            echo "<script>alert('La commande est confirmer')</script>";

            echo "<script>window.open('index.php?dashboard','_self')</script>";


        }


    }



?>

<?php }  ?>
