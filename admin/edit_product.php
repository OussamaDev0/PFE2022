<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_product'])){

$edit_id = $_GET['edit_product'];

$get_p = "select * from produit where id_produit='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['id_produit'];

$p_title = utf8_encode($row_edit['prod_nom']);

$p_cat = $row_edit['id_cat'];



$p_image = $row_edit['prod_img'];

$p_image1 = $row_edit['prod_img1'];
$p_image2 = $row_edit['prod_img2'];
$p_image3 = $row_edit['prod_img3'];
$p_image4 = $row_edit['prod_img4'];

$new_p_image = $row_edit['prod_img'];

$new_p_image1 = $row_edit['prod_img1'];

$new_p_image2 = $row_edit['prod_img2'];
$new_p_image3 = $row_edit['prod_img3'];
$new_p_image4 = $row_edit['prod_img4'];

$p_price = $row_edit['prod_prix'];

$p_desc = $row_edit['prod_description'];


}



$get_p_cat = "select * from categorie_prod where id_cat='$p_cat'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['cat_libelle'];


?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Products

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Title </label>

<div class="col-md-6" >

<input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->





<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Category </label>

<div class="col-md-6" >

<select name="product_cat" class="form-control" >

    <?php echo "<option value='$p_cat' >$p_cat_title</option>"; ?>


<?php

$get_p_cats = "select * from categorie_prod";

$run_p_cats = mysqli_query($con,$get_p_cats);

while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {

$p_cat_id = $row_p_cats['id_cat'];

$p_cat_title = $row_p_cats['cat_libelle'];

echo "<option value='$p_cat_id' >$p_cat_title</option>";

}


?>


</select>

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image </label>

<div class="col-md-6" >

<input type="file" name="product_img" class="form-control" >
<br><img src="../productimages/<?php echo $p_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 1 </label>

<div class="col-md-6" >

<input type="file" name="product_img1" class="form-control" >
<br><img src="../productimages/<?php echo $p_image1; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 2 </label>

<div class="col-md-6" >

<input type="file" name="product_img2" class="form-control" >
<br><img src="../productimages/<?php echo $p_image2; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-3 control-label" > Product Image 3 </label>

        <div class="col-md-6" >

            <input type="file" name="product_img3" class="form-control" >
            <br><img src="../productimages/<?php echo $p_image3; ?>" width="70" height="70" >

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-3 control-label" > Product Image 4 </label>

        <div class="col-md-6" >

            <input type="file" name="product_img4" class="form-control" >
            <br><img src="../productimages/<?php echo $p_image4; ?>" width="70" height="70" >

        </div>

    </div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Price </label>

<div class="col-md-6" >

<input type="text" name="product_price" class="form-control" required value="<?php echo $p_price; ?>" >

</div>

</div><!-- form-group Ends -->




<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Product Description </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="product_desc" class="form-control" rows="15" id="product_desc">

<?php echo $p_desc; ?>

</textarea>

</div><!-- description tab-pane fade in active Ends -->





</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$product_title = $_POST['product_title'];
$product_cat = $_POST['product_cat'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];


$product_img = $_FILES['product_img']['name'];
    if($product_img!="") {
        $characts = 'abcdefghijklmnopqrstuvwxyz';
        $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characts .= '1234567890';
        $code_aleatoire = '';
        for ($i = 0; $i < 30; $i++) {
            $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
        }
        if ($_FILES['product_img']['type'] == 'image/jpeg') {
            $extention = '.jpeg';
        }
        if ($_FILES['product_img']['type'] == 'image/jpeg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img']['type'] == 'image/png') {
            $extention = '.png';
        }
        if ($_FILES['product_img']['type'] == 'image/gif') {
            $extention = '.gif';
        }
        if ($_FILES['product_img']['type'] == 'image/bmp') {
            $extention = '.bmp';
        }
        if ($_FILES['product_img']['type'] == 'image/jpg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img']['type'] == 'image/ico') {
            $extention = '.ico';
        }
        $product_img = $code_aleatoire . $extention;
        $temp_name = $_FILES['product_img']['tmp_name'];
        move_uploaded_file($temp_name,"../productimages/$product_img");
    }else{
        $product_img = $new_p_image;
    }



$product_img1 = $_FILES['product_img1']['name'];
    if($product_img1!="") {
        $characts = 'abcdefghijklmnopqrstuvwxyz';
        $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characts .= '1234567890';
        $code_aleatoire = '';
        for ($i = 0; $i < 30; $i++) {
            $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
        }
        if ($_FILES['product_img1']['type'] == 'image/jpeg') {
            $extention = '.jpeg';
        }
        if ($_FILES['product_img1']['type'] == 'image/jpeg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img1']['type'] == 'image/png') {
            $extention = '.png';
        }
        if ($_FILES['product_img1']['type'] == 'image/gif') {
            $extention = '.gif';
        }
        if ($_FILES['product_img1']['type'] == 'image/bmp') {
            $extention = '.bmp';
        }
        if ($_FILES['product_img1']['type'] == 'image/jpg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img1']['type'] == 'image/ico') {
            $extention = '.ico';
        }
        $product_img1 = $code_aleatoire . $extention;
        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        move_uploaded_file($temp_name1,"../productimages/$product_img1");
    }else{
        $product_img1 = $new_p_image1;
    }

$product_img2 = $_FILES['product_img2']['name'];
    if($product_img2!="") {
        $characts = 'abcdefghijklmnopqrstuvwxyz';
        $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characts .= '1234567890';
        $code_aleatoire = '';
        for ($i = 0; $i < 30; $i++) {
            $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
        }
        if ($_FILES['product_img2']['type'] == 'image/jpeg') {
            $extention = '.jpeg';
        }
        if ($_FILES['product_img2']['type'] == 'image/jpeg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img2']['type'] == 'image/png') {
            $extention = '.png';
        }
        if ($_FILES['product_img2']['type'] == 'image/gif') {
            $extention = '.gif';
        }
        if ($_FILES['product_img2']['type'] == 'image/bmp') {
            $extention = '.bmp';
        }
        if ($_FILES['product_img2']['type'] == 'image/jpg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img2']['type'] == 'image/ico') {
            $extention = '.ico';
        }
        $product_img2 = $code_aleatoire . $extention;
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        move_uploaded_file($temp_name2,"../productimages/$product_img2");
    }else{
        $product_img2 = $new_p_image2;
    }
$product_img3 = $_FILES['product_img3']['name'];
    if($product_img3!="") {
        $characts = 'abcdefghijklmnopqrstuvwxyz';
        $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characts .= '1234567890';
        $code_aleatoire = '';
        for ($i = 0; $i < 30; $i++) {
            $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
        }
        if ($_FILES['product_img3']['type'] == 'image/jpeg') {
            $extention = '.jpeg';
        }
        if ($_FILES['product_img3']['type'] == 'image/jpeg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img3']['type'] == 'image/png') {
            $extention = '.png';
        }
        if ($_FILES['product_img3']['type'] == 'image/gif') {
            $extention = '.gif';
        }
        if ($_FILES['product_img3']['type'] == 'image/bmp') {
            $extention = '.bmp';
        }
        if ($_FILES['product_img3']['type'] == 'image/jpg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img3']['type'] == 'image/ico') {
            $extention = '.ico';
        }
        $product_img3 = $code_aleatoire . $extention;
        $temp_name3 = $_FILES['product_img3']['tmp_name'];
        move_uploaded_file($temp_name3,"../productimages/$product_img3");
    }else{
        $product_img3 = $new_p_image3;
    }
$product_img4 = $_FILES['product_img4']['name'];
    if($product_img4!="") {
        $characts = 'abcdefghijklmnopqrstuvwxyz';
        $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characts .= '1234567890';
        $code_aleatoire = '';
        for ($i = 0; $i < 30; $i++) {
            $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
        }
        if ($_FILES['product_img4']['type'] == 'image/jpeg') {
            $extention = '.jpeg';
        }
        if ($_FILES['product_img4']['type'] == 'image/jpeg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img4']['type'] == 'image/png') {
            $extention = '.png';
        }
        if ($_FILES['product_img4']['type'] == 'image/gif') {
            $extention = '.gif';
        }
        if ($_FILES['product_img4']['type'] == 'image/bmp') {
            $extention = '.bmp';
        }
        if ($_FILES['product_img4']['type'] == 'image/jpg') {
            $extention = '.jpg';
        }
        if ($_FILES['product_img4']['type'] == 'image/ico') {
            $extention = '.ico';
        }
        $product_img4 = $code_aleatoire . $extention;
        $temp_name4 = $_FILES['product_img4']['tmp_name'];
        move_uploaded_file($temp_name4,"../productimages/$product_img4");
    }else{
        $product_img4 = $new_p_image4;
    }


$update_product = "UPDATE produit SET prod_nom='$product_title',prod_description='$product_desc',prod_prix='$product_price',prod_img='$product_img',id_cat='$product_cat',prod_img1='$product_img1',prod_img2='$product_img2',prod_img3='$product_img3',prod_img4='$product_img4' WHERE id_produit='$p_id'";

$run_product = mysqli_query($con,$update_product);

if($run_product){

echo "<script> alert('Product has been updated successfully:') </script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}else {

    echo "<script> alert('Errreur.......') </script>";
}



}

?>

<?php } ?>
