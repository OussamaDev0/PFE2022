<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Tableau de bord / Afficher les commandes

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Afficher les commandes

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Client</th>
<th>Facteur N</th>
<th>Produit</th>
<th>Qty</th>
<th>Taille</th>
<th>Numéro de téléphone</th>
<th>Adresse de livraison</th>
<th>Montant total</th>
<th>Statut</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from commande";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['id_commande'];

$c_id = $row_orders['user_id'];

$invoice_no = $row_orders['facteur_no'];

$product_id = $row_orders['id_produit'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_status = $row_orders['com_status'];

$order_date = $row_orders['com_date'];

$due_amount = $row_orders['prix_total'];

$get_products = "select * from produit where id_produit='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['prod_nom'];

$AdresseId=$row_orders['id_client'];
$get_adresse= "SELECT * FROM client WHERE id_client='$AdresseId'";
$run_adresse = mysqli_query($con,$get_adresse);
$row_adresse=mysqli_fetch_array($run_adresse);

$adresse=$row_adresse['cli_adresse'];
$phone=$row_adresse['cli_tel'];
$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_customer = "select * from utilisateur where id_user='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['user_email'];

echo $customer_email;

 ?>
 </td>

<td bgcolor="orange" ><?php echo $invoice_no; ?></td>

<td><?php echo $product_title; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td>
<?php

echo $phone;

?>
</td>
<td>
    <?php

    echo $adresse;

    ?>
</td>

<td><?php echo $due_amount; ?> MAD</td>

<td>
<?php

if($order_status=='pending'){

echo $order_status='<div style="color:red;">Pending</div>';

}
else{

echo $order_status='<div style="color:green;">Complete</div>';

}


?>
</td>

<td>

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>