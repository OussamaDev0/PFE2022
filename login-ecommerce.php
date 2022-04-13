<?php require_once('dbconn.php'); ?>
<?php
    $psPopulaire=$pdo->prepare("SELECT * FROM produit ORDER BY RAND() LIMIT 8");
    $psPopulaire->execute();
    $psRecommander=$pdo->prepare("SELECT * FROM produit  ORDER BY RAND() LIMIT 12");
    $psRecommander->execute();
    $psMieux=$pdo->prepare("SELECT * FROM produit ORDER BY RAND() LIMIT 5");
    $psMieux->execute();
    $psPantalons=$pdo->prepare("SELECT * FROM produit WHERE id_cat=3 ORDER BY RAND() LIMIT 4");
    $psPantalons->execute();
    $psChaussures=$pdo->prepare("SELECT * FROM produit WHERE id_cat=7 ORDER BY RAND() LIMIT 5");
    $psChaussures->execute();
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
    <script src="Js_files/ecommerce.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Plugins/slick-master/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="Plugins/slick-master/slick/slick-theme.css"/>
    <script type="text/javascript" src="Plugins/slick-master/slick/slick.min.js"></script>
    <style>
        .hide-slider{display:none}
        @media screen and (max-width:991px){
            .hide-slider{display:block}
        }
    </style>
</head>
<body>
<!--header part start-->
<div class="carousel slide" data-ride="carousel" style="z-index:1">
    <div class="container-fluid text-white" id="change-color">
        <div class="row" id="top-containt">
            <div class="col-4 text-center">
                <a href="login-ecommerce.php" style="font-size: 5px;"><img src="Images/shopping-logo.png" style="width:150px;height:150px;" class="color logo-1 logo-sift"></a>
                <a href="login-ecommerce.php"><img src="Images/pinterest_icon.png" height="70px" class=" color logo-2 mt-1 ml-2"></a>
            </div>
            <div class="col-8 pt-4 mt-1 text-center">
                  <span class="dropdown dropdown-toggle profile" data-toggle="dropdown" style="color:black" >
                    <a href="#/"><img src="Images/profile-icon.png" class="profile-icon color"></a>
                  </span>
                <ul class="dropdown-menu mt-4 text-center" style="margin-left:-6%;border-radius:10px;">
                    <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Historique des commandes</a></li>
                    <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Changer le mot de passe</a></li>
                    <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Mettre à jour le profil</a></li>
                    <li class="pre-profile-1 pt-2 pb-2"><a href="ecommerce.php" class="color" style="font-weight:600">Se déconnecter</a></li>
                </ul>
                <span class="menu-1"><a href="login-ecommerce.php" class="color">accueil</a></span>
                <span class="menu"><a href="logged_in_all_top_container.php" class="color">produits</a></span>
                <span class="menu"><a href="logged_in_about_us.php" class="color">à propos </a></span>
                <span class="menu"><a href="contact-form.php" class="color">contact</a></span>
                <span class="menu-bar text-right"><a href="#/" class="color">&#9776;</a></span>
                <span class="menu-bar-1 text-right"><a href="#/" class="color">&#9776;</a></span>
                <span class="menu-bar-2 text-right"><a href="#/" class="color">&#9776;</a></span>
            </div>
        </div>
        <div class="container-fluid side-bar px-0">
            <div class="col-12 text-right bg-danger">
                <span class="close"><a href="#/" class="color">&times;</a></span>
            </div>
            <ul class="pt-5 pre-side-bar">
                <li class="pt-4" style="margin-left:-5%;"><a href="login-ecommerce.php" class="color">accueil</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="logged_in_all_top_container.php" class="color">produits</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="logged_in_about_us.php" class="color">à propos </a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="contact-form.php" class="color">contact</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="#/" class="color">Mettre à jour le profil</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="ecommerce.php" class="color">Se déconnecter</a><span><a href="#" class="color"><img src="log-in..png" class="log-in"></a></span></li>
            </ul>
        </div>
    </div>
    <div class="carousel-inner text-center">
        <div class="carousel-item " style="height:100vh">
            <div style="height:100vh;width:100vw" class="text-right pr-5">
                <div class="container pt-4">
                    <div class="row mt-3 pt-5">
                        <div class="col-12 text-center pt-5">
                            <a href="logged_in_all_top_container.php"><span class="box"><img src="Images/sale-box.jpg" height="320px"  style="transform: translateY(10%);"></span></a>
                            <a href="logged_in_all_top_container.php"><img src="Images/sale-1..png" height="300px" class="sale-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item"  style="height:100vh">
            <div class="container mt-4 pt-5">
                <div class="row pt-5 pb-5">
                    <div class="col-12 text-center pb-4">
                        <a href="logged_in_all_top_container.php"><span class="hide-banner"><img src="Images/ballon.jpg" height="350px;"></span></a>
                        <!-- <a href="logged_in_all_top_container.php"><img src="Images/background-image.jpg" height="450px" class="sift-girl" style="margin-top:-3%"></a>-->
                        <a href="logged_in_all_top_container.php"><span class="hide-girl"><img src="Images/sale-tag.jpg" height="430px;"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item active" style="height:100vh">
            <div class="container pt-2 pt-5 pb-5">
                <div class="row pt-5 pb-5">
                    <div class="col-12 text-center pb-5 pt-4">
                        <a href="logged_in_all_top_container.php"><span class="hide-lady-1"><img src="Images/background-image-1.jpg" height="350px" style="padding-left:6%;margin-top:3%;"></span></a>
                        <!--<a href="logged_in_all_top_container.php"><span class="special"><img src="Images/sale.jpg" height="350px" style="padding-left:3%;margin-top:3%"></span></a>-->
                        <a href="logged_in_all_top_container.php"><span class="hide-lady"><img src="Images/background-image-2.jpg" height="320px"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='container-fluid pb-3'>
    <div class="row">
        <div class="col text-center">
            <a href="logged_in_all_top_container.php"><span style="font-size:30px;text-transform:uppercase;font-weight:bold" data-aos="zoom-in">populaire</span></a>
        </div>
    </div>
</div>
<div class="container-fluid pt-5" style="background-color:white">
    <div class="container">
        <div class="row text-center">
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center popular-sift-down">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 hide-lady-1">
                <div class="container pl-0 text-center" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 hide-lady">
                <div class="container pl-0 text-center" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-4 text-center">
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 text-center popular-sift-down">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 col-lg-4 text-center hide-lady-1">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
            <?php $Populaire=$psPopulaire->fetch();?>
            <div class="col-xl-3 text-center hide-lady">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><img src="productimages/<?php echo($Populaire['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php?productID=<?php echo($Populaire['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($Populaire['prod_nom']);?><br><?php echo($Populaire['prod_prix']);?> MAD</span></a>
                </div>
            </div>
        </div>
        <div class="row mb-1 pb-3">
            <div class="col-12 pb-5 text-center">
                <a href="logged_in_all_top_container.php"><span style="font-weight:700;font-size:20px;color:blue" data-aos="zoom-in">voir plus</span><span class="pl-3" style="color:blue"><i class="fa fa-arrow-right" aria-hidden="true" data-aos="zoom-in"></i></span></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid transparent pt-5 pb-5" id="parallax1" style="background-image:url('Images/desktop.jpg');background-size:cover;background-attachment:fixed;">
    <div class="container sift-couple" height="200px">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-center">
                <img src="Images/wedding-couple.jpg" height="230px" class="pl-5" data-aos="fade-up">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12 pt-4 text-center">
                  <span style="font-weight:700;font-size:20px;" data-aos="zoom-in">La plateforme vous propose de nombreux modes pour les occasions et les fêtes
                    et il y en a beaucoup,si vous voulez convaincre quelqu'un d'entre eux,
                    veuillez cliquer sur le lien ci-dessous pour rechercher a votre style
                  </span><br><br><a href="logged_in_all_top_container.php"><span style="font-size:20px;color:rgb(180, 69, 69);font-weight: 800;text-transform: uppercase;" data-aos="zoom-in">ici</span></a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 text-center pb-4 pt-4">
            <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">recommander</span>
        </div>
    </div>
    <div class="carousel slide pt-1" data-ride="carousel">
        <div class="carousel-inner">
            <!--first slider-->
            <div class="carousel-item text-center">
                <div class="row">
                        <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--second-slider-->
            <div class="carousel-item text-center">
                <div class="row">
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--third slider-->
            <div class="carousel-item active text-center">
                <div class="row">
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                    <?php $Recommander=$psRecommander->fetch(); ?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><img src="productimages/<?php echo($Recommander['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="logged_in_for-each-image.php?productID=<?php echo($Recommander['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Recommander['prod_nom']); ?><br><?php echo($Recommander['prod_prix']); ?> MAD</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-sm-12 text-center pb-4 pt-4">
<<<<<<< HEAD
                <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in"><a href="logged_in_all_top_container.php">LE MIEUX POUR VOUS</a></span>
||||||| 6ad8c94
                <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in"><a href="file:///C:/Users/Ujjwal/Documents/website_3/Logged_in_product_page.php">LE MIEUX POUR VOUS</a></span>
=======
                <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in"><a href="file:///C:/Users/Ujjwal/Documents/website_3/logged_in_all_top_container.php">LE MIEUX POUR VOUS</a></span>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
        </div>

        <div class="row pt-1">
            <?php $Mieux=$psMieux->fetch(); ?>
            <div class="col-xl-5 col-lg-5 text-center pt-5 hide-popular">
<<<<<<< HEAD
                <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']);?>"><img src="productimages/<?php echo($Mieux['prod_img']);?>" height="400px" data-aos="fade-up"><br></a>
                <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Mieux['prod_nom']);?><br><?php echo($Mieux['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/mens-dress.jpg" height="400px" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/mens-dress.jpg" height="400px" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <?php $Mieux=$psMieux->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><img src="productimages/<?php echo($Mieux['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Mieux['prod_nom']); ?><br><?php echo($Mieux['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/mens-dress-1.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/mens-dress-1.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                    <?php $Mieux=$psMieux->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><img src="productimages/<?php echo($Mieux['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Mieux['prod_nom']); ?><br><?php echo($Mieux['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/mens-dress-2.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/mens-dress-2.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                </div>
                <div class="row">
                    <?php $Mieux=$psMieux->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><img src="productimages/<?php echo($Mieux['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Mieux['prod_nom']); ?><br><?php echo($Mieux['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/mens-dress-3.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/mens-dress-3.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                    <?php $Mieux=$psMieux->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><img src="productimages/<?php echo($Mieux['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Mieux['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Mieux['prod_nom']); ?><br><?php echo($Mieux['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/mens-dress-4.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/mens-dress-4.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                </div>
            </div>
        </div>
        <div class="container pr-5 text-center mt-2 pb-3">
            <div class="row pt-5">
                <div class="col">
                    <a href="logged_in_all_top_container.php"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4 pt-2">
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-sm-12 text-center pb-4">
<<<<<<< HEAD
                <a href="Logged_in_product_page.php?cat=7"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">CHAUSSURES</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">CHAUSSURES</span></a>
=======
                <a href="logged_in_all_top_container.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">CHAUSSURES</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
        </div>
        <div class="row">
            <?php $Chaussures=$psChaussures->fetch(); ?>
            <div class="col-xl-5 col-lg-5 text-center pt-5 hide-popular">
<<<<<<< HEAD
                <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']);?>" height="400px" data-aos="fade-up"><br></a>
                <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Chaussures['prod_nom']);?><br><?php echo($Chaussures['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/ladies-dress.jpg" height="400px" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/ladies-dress.jpg" height="400px" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/ladies-dress-1.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/ladies-dress-1.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/ladies-dress-2.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/ladies-dress-2.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                </div>
                <div class="row">
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/ladies-dress-3.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/ladies-dress-3.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                    <?php $Chaussures=$psChaussures->fetch(); ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center pt-3">
<<<<<<< HEAD
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                        <a href="logged_in_for-each-image.php?productID=<?php echo($Chaussures['id_produit']); ?>"><span class="image-lable" data-aos="fade-up"><?php echo($Chaussures['prod_nom']); ?><br><?php echo($Chaussures['prod_prix']); ?> MAD</span></a>
||||||| 6ad8c94
                        <a href="Logged_in_product_page.php"><img src="Images/ladies-dress-4.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                        <a href="logged_in_all_top_container.php"><img src="Images/ladies-dress-4.jpg" height="200px" data-aos="fade-up"><br></a>
                        <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pr-5 text-center mt-4 pb-5">
        <div class="row pt-2 pb-3">
            <div class="col">
<<<<<<< HEAD
                <a href="Logged_in_product_page.php?cat=7"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
=======
                <a href="logged_in_all_top_container.php"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-sm-12 text-center">
<<<<<<< HEAD
            <a href="Logged_in_product_page.php?cat=3"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">pantalons</span></a>
||||||| 6ad8c94
            <a href="Logged_in_product_page.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">pantalons</span></a>
=======
            <a href="logged_in_all_top_container.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">pantalons</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-3 px-0" id = "parallax2" style="background-image:url('Images/desktop-1.jpg');background-size:cover;background-attachment: fixed;">
    <div class="container" height="200px">
        <div class="row pt-1">
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3  col-md-4 col-sm-6 col-12 pb-3 text-center">
<<<<<<< HEAD
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/kids-dress-1.jpg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/kids-dress-1.jpg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 text-center">
<<<<<<< HEAD
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/boys-dress-1.jpeg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/boys-dress-1.jpeg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 col-md-4 hide-kids-dress text-center">
<<<<<<< HEAD
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/kids-dress-2.jpg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/kids-dress-2.jpg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
            <?php $Pantalons=$psPantalons->fetch(); ?>
            <div class="col-xl-3 col-lg-3 hide-popular text-center">
<<<<<<< HEAD
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']);?>" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable" data-aos="zoom-in"><?php echo($Pantalons['prod_nom']); ?><br><?php echo($Pantalons['prod_prix']);?> MAD</span></a>
||||||| 6ad8c94
                <a href="Logged_in_product_page.php"><img src="Images/boys-dress-2.jpeg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="Logged_in_product_page.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
=======
                <a href="logged_in_all_top_container.php"><img src="Images/boys-dress-2.jpeg" height="200px" style="border-radius:20px;" data-aos="fade-up"><br></a>
                <a href="logged_in_all_top_container.php"><span class="image-lable" data-aos="zoom-in">accessories & tradesional dress<br>117MAD</span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col pt-4 pb-5 text-center">
<<<<<<< HEAD
            <a href="Logged_in_product_page.php?cat=3"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
||||||| 6ad8c94
            <a href="Logged_in_product_page.php"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
=======
            <a href="logged_in_all_top_container.php"><span style="border:3px solid rgb(180, 69, 69);border-radius:10px;padding:1% 2%;background-color:rgb(177, 84, 84);" class="ml-4" data-aos="zoom-in"><span style="font-weight:700;font-size:20px;color:white;text-transform: uppercase;">plus</span><span class="pl-3" style="color:white;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></span></a>
>>>>>>> 93925a8108cb7bec1c893122fc707e8914efd388
        </div>
    </div>
</div>
<!--history-->
<!--multi carousel-->
<div class="container-fluid hide-slider mt-5" style="padding-bottom:6%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center pb-4 pt-4">
                <a href="#/"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">history</span></a>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel slide pt-1" data-ride="carousel">
                <div class="carousel-inner">
                    <!--first slider-->
                    <div class="carousel-item text-center">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="container" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br>101MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>400MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 hide-lady-1">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/girl.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>101MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 hide-lady">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>400MAD</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second-slider-->
                    <div class="carousel-item text-center">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="container" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/men-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">accessories & tradesional dress<br>117MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/blazers.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">men's black sweatshirt<br>60MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 hide-lady-1">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/men-1.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">accessories & tradesional dress<br>117MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 hide-lady">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/blazers.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">men's black sweatshirt<br>60MAD</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--third slider-->
                    <div class="carousel-item active text-center">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="container" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">toddler children's dress<br>203MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">boys flower print shirt<br>320MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 hide-lady-1">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/girl (2).jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">girls flower print skirt<br>400MAD</span></a>
                                </div>
                            </div>
                            <div class="col-xl-3 hide-lady">
                                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                                    <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids-1.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">formal black toxedo dress suits<br>117MAD</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--carousel each slider-->
<div class="container-fluid mt-5 hide-popular" style="padding-bottom:6%;">
    <div class="container pt-2 pb-5" style="height:70vh;padding-left:5%;">
        <div class="row">
            <div class="col-sm-12 text-center pb-4 pt-4">
                <a href="logged_in_for-each-image.php#\"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">l'histoire</span></a>
            </div>
        </div>
        <div class="row history pt-5">
            <div class="col">
                <div class="container text-center" height="50px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br>&nbsp;101MAD</span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/men.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/men-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/blazers.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\/"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/girl (2).jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
            <div class="col">
                <div class="container" height="30px" width="250px" style="overflow:hidden">
                    <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                    <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br><p style="text-align: center;padding-right:20%">101MAD</p></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<div class="container-fluid bg-dark text-white">
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 footer pt-5">
                <p style="font-size:20px;text-transform: uppercase;font-weight: 800;" data-aos="slide-right">ShopMen</p>
                <p data-aos="slide-right">une entreprise de vente les vêtements<br>
                    pour les hommes en ligne cette plateforme<br>
                    doit bien évidemment comporter une boutique<br>
                    pour faciliter a vos d'acheter plus vite en ligne.<br>
                </p>
            </div>
            <div class="col-xl-3 pt-5 hide-girl">
                <span style="font-size:20px;text-transform: uppercase;font-weight: 800;" data-aos="zoom-in-left">products</span><br>
                <p style="margin-top:3%" data-aos="slide-up">Chaussures</p>
                <p style="margin-top:-3%" data-aos="slide-up">pantalons</p>
                <p style="margin-top:-3%" data-aos="slide-up">chemises</p>
                <p style="margin-top:-3%" data-aos="slide-up">Autre</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 footer  pt-5">
                <span style="font-size:20px;text-transform: uppercase;font-weight: 800;" class="text-center" data-aos="zoom-in-left">Nous Accepetons</span><br>
                <p style="margin-top:3%;margin-left:1%;"data-aos="fade-up">Visa card</p>
                <p style="margin-top:-3%;margin-left:1%;"data-aos="fade-up">MasterCard</p>
                <p style="margin-top:-3%;margin-left:1%;"data-aos="fade-up">paypal</p>
                <p style="margin-top:-3%;margin-left:1%;"data-aos="fade-up">skrill</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12 footer pt-5 pb-3">
                <p style="font-size:20px;text-transform: uppercase;font-weight: 800;" data-aos="slide-left">contact</p>
                <p data-aos="fade-up"><i class="fa fa-home" aria-hidden="true" style="font-size:20px;"></i>&nbsp; Aklim,berkane</p>
                <p data-aos="fade-up"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; PFE@gmail.com</p>
                <p data-aos="fade-up"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; + 212 76 68 62 809</p>
                <p data-aos="fade-up"><i class="fa fa-print" aria-hidden="true"></i>&nbsp; + 212 76 68 62 809</p>
            </div>
        </div>
    </div>
    <hr style="color:white;width:100%;border:1px solid">
    <div class="container mt-4 pb-4">
        <div class="row">
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                <p><a href="#/" style="color:white">© 2020 Copyright:</a><span style="font-weight:600"><a href="#" style="color:white">MDBootstrap</a></span></p>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 icon-head">
                <a href="#/" style="color:white"><span class="icons-2"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                <a href="#/" style="color:white"><span class="icons-3"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                <a href="#/" style="color:white"><span class="icons-1"><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                <a href="#/" style="color:white"><span class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
            </div>
        </div>
    </div>
</div>
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
    $('.history').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        infinite:false,
        autoplaySpeed: 2000,
    });
    /*$(window).width > 991){
      alert("hello user")
    }
    else{
      $(".show").css("display","none")
    }

    /*$( window ).resize(function() {
      if ($(window).innerWidth() <= 991){
        $('.history').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      }else{
        $('.history').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      }
    });*/

</script>
</body>
</html>