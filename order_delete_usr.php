<?php

session_start();
require_once 'dbconn.php';
if($_SESSION['PROFILE']['id_user']!=$_GET['idU']){

    echo "<script>window.open('login-form.php','_self')</script>";

}

else {

    ?>

    <?php

    if(isset($_GET['idC'])){

        $delete_id = $_GET['idC'];

        $delete_order = "delete from commande where id_commande='$delete_id'";

        $run_delete = $pdo->prepare($delete_order);

        if($run_delete->execute()){

            echo "<script>alert('La commande est supprimer')</script>";

            echo "<script>window.open('profile.php','_self')</script>";


        }


    }



    ?>



<?php }  ?>