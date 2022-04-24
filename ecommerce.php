<?php require_once('dbconn.php'); ?>
<?php
    $psPopulaire=$pdo->prepare("SELECT * FROM produit ORDER BY nb_ventes DESC LIMIT 8");
    $psPopulaire->execute();
    $psPolos=$pdo->prepare("SELECT * FROM produit WHERE id_cat=2 ORDER BY RAND() LIMIT 5");
    $psPolos->execute();
    $psChaussures=$pdo->prepare("SELECT * FROM produit WHERE id_cat=7 ORDER BY RAND() LIMIT 5");
    $psChaussures->execute();
    $psPantalons=$pdo->prepare("SELECT * FROM produit WHERE id_cat=3 ORDER BY RAND() LIMIT 4");
    $psPantalons->execute();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS_files/ecommerce.css">
    <script src="JS_files/ecommerce.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once('hps.php');?>
    <div class="carousel-inner text-center">
        <div class="carousel-item" style="height:100vh">
            <div style="height:100vh;width:100vw" class="text-right pr-5">
                <div class="container pt-4">
                    <div class="row mt-3 pt-5">
                        <div class="col-12 text-center pt-5">
                            <a href="all-top-container.php"><span class="box"><img src="Images/sale-box.jpg" height="320px"  style="transform: translateY(10%);"></span></a>
                            <a href="all-top-container.php"><img src="Images/sale-1..png" height="300px" class="sale-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height:100vh">
            <div class="container mt-4 pt-5">
                <div class="row pt-5 pb-5">
                    <div class="col-12 text-center pb-4">
                        <a href="all-top-container.php"><span class="hide-banner"><img src="Images/ballon.jpg" height="350px;"></span></a>
                        <a href="all-top-container.php"><img src="Images/sale-tag.jpg" height="450px" class="sift-girl" style="margin-top:-3%"></a>
                        <!-- <a href="all-top-container.php"><span class="hide-girl"><img src="" height="430px;"></span></a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item active" style="height:100vh">
            <div class="container pt-2 pt-5 pb-5">
                <div class="row pt-5 pb-5">
                    <div class="col-12 text-center pb-5 pt-4">
                        <a href="all-top-container.php"><span class="hide-lady-1"><img src="Images/background-image-1.jpg" height="350px" style="padding-left:6%;margin-top:3%;"></span></a>
                        <!--<a href="all-top-container.php"><span class="special"><img src="Images/sale.jpg" height="350px" style="padding-left:3%;margin-top:3%"></span></a>-->
                        <a href="all-top-container.php"><span class="hide-lady"><img src="Images/background-image-2.jpg" height="320px"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='container-fluid pb-3'>
    <div class="row">
        <div class="col text-center">
            <a href="all-top-container.php"><span style="font-size:30px;text-transform:uppercase;font-weight:bold" data-aos="zoom-in">populaire</span></a>
        </div>
    </div>
</div>
<div class="container-fluid pt-5" style="background-color:white">
    <div class="container">
        <div class="row text-center">
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center popular-sift-down">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 hide-lady-1">
                <div class="container pl-0 text-center" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 hide-lady">
                <div class="container pl-0 text-center" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-4 text-center">
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center popular-sift-down">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 text-center hide-lady-1">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 text-center hide-lady">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
        </div>
        <div class="row mb-1 pb-3">
            <div class="col-12 pb-5 text-center">
                <a href="all-top-container.php"><span style="font-weight:700;font-size:20px;color:blue" data-aos="zoom-in">voir plus</span><span class="pl-3" style="color:blue"><i class="fa fa-arrow-right" aria-hidden="true" data-aos="zoom-in"></i></span></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid transparent pt-5 pb-5" id="parallax1" style="background-image:url('Images/desktop.jpg');background-size:cover;background-attachment:fixed;">
    <div class="container sift-couple" height="200px">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-center">
                <a href="ecommerce-price-men.php"><img src="Images/wedding-couple.jpg" height="230px" class="pl-5" data-aos="fade-up"></a>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12 pt-4 text-center">
                  <span style="font-weight:700;font-size:20px;" data-aos="zoom-in">La plateforme vous propose de nombreux modes pour les occasions et les fêtes
                    et il y en a beaucoup,si vous voulez convaincre quelqu'un d'entre eux,
                    veuillez cliquer sur le lien ci-dessous pour rechercher a votre style</span><br><br><a href="all-top-container.php"><span style="font-size:20px;color:rgb(180, 69, 69);font-weight: 800;text-transform: uppercase;" data-aos="zoom-in">ici</span></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-sm-12 text-center pb-4 pt-4">
                <a href="all-top-container.php?cat=2"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">polos</span></a>
            </div>
        </div>
        <div class="row pt-1">
            <?php $Polos=$psPolos->fetch(); ?>
            <div class="col-xl-5 col-lg-5 text-center pt-5 hide-popular">
                <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']);?>" height="400px" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Polos['prod_nom']);?><br><?php echo($Polos['prod_prix']);?> MAD</span></a>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <?php $Polos=$psPolos->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']);?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Polos['prod_nom']);?><br><?php echo($Polos['prod_prix']);?> MAD</span></a>
                    </div>
                    <?php $Polos=$psPolos->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']);?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Polos['prod_nom']);?><br><?php echo($Polos['prod_prix']);?> MAD</span></a>
                    </div>
                </div>
                <div class="row">
                    <?php $Polos=$psPolos->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']);?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Polos['prod_nom']);?><br><?php echo($Polos['prod_prix']);?> MAD</span></a>
                    </div>
                    <?php $Polos=$psPolos->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']);?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Polos['prod_nom']);?><br><?php echo($Polos['prod_prix']);?> MAD</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pr-5 text-center mt-2 pb-3">
            <div class="row pt-5">
                <div class="col">
                    <a href="all-top-container.php?cat=2"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4 pt-2">
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-sm-12 text-center pb-4">
                <a href="all-top-container.php?cat=7"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">Chaussures</span></a>
            </div>
        </div>
        <div class="row">
            <?php $Chaussures=$psChaussures->fetch(); ?>
            <div class="col-xl-5 col-lg-5 text-center pt-5 hide-popular">
                <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" height="400px" data-aos="fade-up"><br></a>
                <a href="ecommerce-price-men.php"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
                    </div>
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
                    </div>
                </div>
                <div class="row">
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
                    </div>
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" height="200px" data-aos="fade-up"><br></a>
                        <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pr-5 text-center mt-4 pb-5">
        <div class="row pt-2 pb-3">
            <div class="col">
                <a href="all-top-container.php?cat=7"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="all-top-container.php?cat=3"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">pantalon</span></a>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-3 px-0" id = "parallax2" style="background-image:url('Images/desktop-1.jpg');background-size:cover;background-attachment: fixed;">
    <div class="container" height="200px">
        <div class="row pt-1">
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3  col-md-4 col-sm-6 col-12 pb-3 text-center">
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 col-md-4 hide-kids-dress text-center">
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 hide-popular text-center">
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col pt-4 pb-5 text-center">
            <a href="all-top-container.php?cat=3"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
        </div>
    </div>
</div>
<?php require_once('footer.php');?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once:true,
        duration:1000,
    });
    /* const parallax1 =document.getElementById('parallax1');
    const parallax2 =document.getElementById('parallax2');
    window.addEventListener("scroll",function(){
      let offset = window.pageYOffset;
      parallax1.style.backgroundPositionY = offset * 0.4 + 'px';
      parallax2.style.backgroundPositionY = offset * 0.9 + 'px';
    });*/
</script>
</body>
</html>