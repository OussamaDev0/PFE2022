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

        if($run_confirm){

            echo "<script>alert('La commande est confirmer')</script>";

            echo "<script>window.open('index.php?dashboard','_self')</script>";


        }


    }



?>

<?php }  ?>
