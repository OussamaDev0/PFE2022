<?php
require_once('dbconn.php');
//all categorie...
$size=16;
$req ="SELECT * FROM produit LIMIT $size";
$ps=$pdo->prepare($req);
$ps->execute(); ?>
<?php
//prix entre 100 et 200 MAD
$req2="SELECT * FROM produit WHERE(prod_prix>100 AND prod_prix<200) LIMIT 16";
$ps2=$pdo->prepare($req2);
$ps2->execute();
//prix entre 200 et 300 MAD
$ps3=$pdo->prepare("SELECT * FROM produit WHERE(prod_prix>200 AND prod_prix<300) LIMIT 16");
$ps3->execute();
//prix entre 300 et 400 MAD
$ps4=$pdo->prepare("SELECT * FROM produit WHERE(prod_prix>300 AND prod_prix<400) LIMIT 16");
$ps4->execute();
//prix entre 400 et 500 MAD
$ps5=$pdo->prepare("SELECT * FROM produit WHERE(prod_prix>400 AND prod_prix<500) LIMIT 16");
$ps5->execute();
//prix 500 MAD ou plus
$ps6=$pdo->prepare("SELECT * FROM produit WHERE(prod_prix>500) LIMIT 16");
$ps6->execute();
//catégorie: chemis
$psChemis=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=1) LIMIT 16");
$psChemis->execute();
//catégorie: polos
$psPolos=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=2) LIMIT 16");
$psPolos->execute();
//catégorie: pantalons
$psPantalons=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=3) LIMIT 16");
$psPantalons->execute();
//catégorie: pantalons de survêtement
$psPantalonsSur=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=4) LIMIT 16");
$psPantalonsSur->execute();
//catégorie: shorts
$psShorts=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=5) LIMIT 16");
$psShorts->execute();
//catégorie: jeans
$psJeans=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=6) LIMIT 16");
$psJeans->execute();
//catégorie: chaussures
$psChaussures=$pdo->prepare("SELECT * FROM produit WHERE(id_cat=7) LIMIT 16");
$psChaussures->execute();

//select aliatoirement les produits
$psAliatoire=$pdo->prepare("SELECT * FROM produit ORDER BY RAND() LIMIT 7");
$psAliatoire->execute();
?>
<?php
    if(isset($_GET['cat'])){
        $cat=$_GET['cat'];
    }else { $cat=200;}
?>
<?php
$mc="";
$size=10;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=0;
}
$offset=$size*$page;
if(isset($_GET['motcle'])){
    $mc=$_GET['motcle'];
    $req="SELECT * FROM produit WHERE prod_nom LIKE '%$mc%' LIMIT $size OFFSET $offset ";
}
else{
    $req="SELECT * FROM produit LIMIT $size OFFSET $offset ";
}
$ps=$pdo->prepare($req);
$ps->execute();
if(isset($_GET['motcle']))
    $pss=$pdo->prepare("SELECT COUNT(*) AS NB FROM produit where prod_nom LIKE '%$mc%' ");
else
    $pss=$pdo->prepare("SELECT COUNT(*) AS NB FROM produit");
$pss->execute();
$ligne=$pss->fetch(PDO::FETCH_ASSOC);
$NBP=$ligne['NB'];
if(($NBP % $size)==0)  $Nbpages=floor($NBP / $size);
else $Nbpages=floor($NBP / $size) + 1;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS_files/ecommerce-price-men.css">
    <script src="JS_files/ecommerce-price-men.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="Plugins/slick-master/slick/slick-theme1.css"/>
    <script type="text/javascript" src="Plugins/slick-master/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css"/>
    <style>
        .for-small-devices-2{display:none}
        @media screen and (max-width:1200px){
            .hide-big-container{display: none;}
        }
        @media screen and (max-width:810px){
            .hide-big-container-1{display: none;}
            .for-small-devices-2{display:block}
        }
        a:hover{color:black}
        a{color:black}

    </style>
</head>
<body>

<!--header part start-->
<?php require_once('hps.php');?>
<!--header part end-->
<!--middle-->
<div class="container-fluid mt-5 pt-5">
    <div class="row">

        <!--left side col start-->
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="container large-left-sider">
                <div class="row">
                    <div class="col-12 px-0 pt-5 pb-4 text-center pl-0">
                        <form method="get" action="all-top-container.php">
                            <input class="search-box" type="text" name="motcle" placeholder="Search.." ><span><button class="search-button"><i class="fa fa-search" id="search-icon"></i></button></span>
                        </form> </div>
                </div>
                <div class="row pl-3">
                    <div class="col-12 pt-3">
                        <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">price</p>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price-cat" class="open-content-one-hundred">&nbsp; 100-200 MAD</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price-cat" class="open-content-two-hundred">&nbsp; 200-300 MAD</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price-cat" class="open-content-three-hundred">&nbsp; 300-400 MAD</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio"  name="price-cat" class="open-content-four-hundred">&nbsp; 400-500 MAD</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio"  name="price-cat" class="open-content-five-hundred">&nbsp; plus de 500 MAD</span><br>
                    </div>
                    <div class=" col-12 pt-5">
                        <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">CATÉGORIE</p>
                        <span class="text-bold"><input type="radio" name="price-cat" class="open-content-chemis-categorie" <?php if($cat==1) echo("checked");else echo("unchecked"); ?> > &nbsp;Chemis</span><br>
                        <span class="text-bold"><input type="radio" name="price-cat" class="open-content-polos-categorie" <?php if($cat==2) echo("checked");else echo("unchecked"); ?> > &nbsp;Polos</span><br>
                        <span class="text-bold"><input type="radio" name="price-cat" class="open-content-pantalons-categorie" <?php if($cat==3) echo("checked");else echo("unchecked"); ?>  > &nbsp;Pantalons</span><br>
                        <span class="text-bold"><input type="radio" name="price-cat" class="open-content-pantalonssur-categorie" <?php if($cat==4) echo("checked");else echo("unchecked"); ?>  > &nbsp;Pantalons de surêtement</span><br>
                        <span  class="text-bold"><input type="radio" name="price-cat" class="open-content-shorts-categorie" <?php if($cat==5) echo("checked");else echo("unchecked"); ?>  > &nbsp;Shorts</span><br>
                        <span  class="text-bold"><input type="radio" name="price-cat" class="open-content-jeans-categorie" <?php if($cat==6) echo("checked");else echo("unchecked"); ?>  > &nbsp;Jeans</span><br>
                        <span  class="text-bold"><input type="radio" name="price-cat" class="open-content-chaussures-categorie" <?php if($cat==7) echo("checked");else echo("unchecked"); ?>  > &nbsp; Chaussures</span><br>
                    </div>
                </div>
            </div>
        </div>
        <!--left side col end-->

        <!--right side col start-->

        <!--front look-->
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 pl-0" style="border-left:1px solid grey">
            <div class="container-fluid hide-big-container-1">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 text-right">
                        <span><img src="Images/big-sale-2.jpg" height="200px"></span>
                    </div>
                    <div class="col-xl-4 col-lg-8 col-md-8 col-sm-6 col-12 ">
                        <span><img src="Images/big-sale.jpg" height="150px"></span>
                    </div>
                    <div class="col-xl-4 pl-5 hide-big-container">
                        <span><img src="Images/big-sale-1.jpg" height="200px"></span>
                    </div>
                </div>
            </div>
            <div class="container large-right-sider">
                <div class="row pt-5 hide-front-page">
                    <?php while($produit=$ps->fetch()) { ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                            <a href="for-each-image.php?productID=<?php echo($produit['id_produit']);?>"><img src="productimages/<?php echo($produit['prod_img']); ?>" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a><br/>
                            <a href="for-each-image.php?productID=<?php echo($produit['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($produit['prod_nom']); ?><br><?php echo($produit['prod_prix']); ?> MAD</span></a>
                        </div>
                    <?php } ?>
                </div>
                <!--font look end-->

                <!--100-200 page start-->
                <div class="container show-two-hundred-page">

                    <div class="row pt-5">
                        <?php while($produit2=$ps2->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($produit2['id_produit']);?>"><img src="productimages/<?php echo($produit2['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($produit2['id_produit']);?>"><span class="image-lable"><?php echo($produit2['prod_nom']); ?><br> <?php echo($produit2['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <!--100-200 page end-->

                <!--200-300 page start-->

                <div class="container show-three-hundred-page">

                    <div class="row pt-5">
                        <?php while($produit3=$ps3->fetch()){ ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($produit3['id_produit']);?>"><img src="productimages/<?php echo($produit3['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($produit3['id_produit']);?>"><span class="image-lable"><?php echo($produit3['prod_nom']) ?><br> <?php echo($produit3['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <!--200-300 page end-->

                <!--300-400 page start-->

                <div class="container show-four-hundred-page">

                    <div class="row pt-5">
                        <?php while($produit4=$ps4->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($produit4['id_produit']);?>"><img src="productimages/<?php echo($produit4['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($produit4['id_produit']);?>"><span class="image-lable"><?php echo($produit4['prod_nom']) ?><br> <?php echo($produit4['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--300-400 page end-->


                <!--400-500 page start-->

                <div class="container show-five-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <?php while($produit5=$ps5->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($produit5['id_produit']);?>"><img src="productimages/<?php echo($produit5['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($produit5['id_produit']);?>"><span class="image-lable"><?php echo($produit5['prod_nom']) ?><br> <?php echo($produit5['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--400-500 page end-->
                <!--500 ou plus page start-->

                <div class="container show-six-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <?php while($produit6=$ps6->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($produit6['id_produit']);?>"><img src="productimages/<?php echo($produit6['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($produit6['id_produit']);?>"><span class="image-lable"><?php echo($produit6['prod_nom']) ?><br> <?php echo($produit6['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!--500 ou plus page end-->

                <!--Catégorie: Chemis start -->
                <div class="show-chemis-categorie-page">

                    <div class="row pt-5">
                        <?php while($Chemis=$psChemis->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Chemis['id_produit']);?>"><img src="productimages/<?php echo($Chemis['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Chemis['id_produit']);?>"><span class="image-lable"><?php echo($Chemis['prod_nom']) ?><br> <?php echo($Chemis['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: Chemis end -->
                <!--Catégorie: polos start -->
                <div class="show-polos-categorie-page">

                    <div class="row pt-5">
                        <?php while($Polos=$psPolos->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><img src="productimages/<?php echo($Polos['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Polos['id_produit']);?>"><span class="image-lable"><?php echo($Polos['prod_nom']) ?><br> <?php echo($Polos['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: polos end -->
                <!--Catégorie: pantalons start -->
                <div class="show-pantalons-categorie-page">

                    <div class="row pt-5">
                        <?php while($Pantalons=$psPantalons->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><img src="productimages/<?php echo($Pantalons['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Pantalons['id_produit']);?>"><span class="image-lable"><?php echo($Pantalons['prod_nom']) ?><br> <?php echo($Pantalons['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: pantalons end -->
                <!--Catégorie: pantalons de survêtement start -->
                <div class="show-pantalonssur-categorie-page">

                    <div class="row pt-5">
                        <?php while($PantalonsSur=$psPantalonsSur->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($PantalonsSur['id_produit']);?>"><img src="productimages/<?php echo($PantalonsSur['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($PantalonsSur['id_produit']);?>"><span class="image-lable"><?php echo($PantalonsSur['prod_nom']) ?><br> <?php echo($PantalonsSur['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: pantalons de survêtement end -->
                <!--Catégorie: shorts start -->
                <div class="show-shorts-categorie-page">

                    <div class="row pt-5">
                        <?php while($Shorts=$psShorts->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Shorts['id_produit']);?>"><img src="productimages/<?php echo($Shorts['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Shorts['id_produit']);?>"><span class="image-lable"><?php echo($Shorts['prod_nom']) ?><br> <?php echo($Shorts['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: shorts end -->
                <!--Catégorie: jeans start -->
                <div class="show-jeans-categorie-page">

                    <div class="row pt-5">
                        <?php while($Jeans=$psJeans->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Jeans['id_produit']);?>"><img src="productimages/<?php echo($Jeans['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Jeans['id_produit']);?>"><span class="image-lable"><?php echo($Jeans['prod_nom']) ?><br> <?php echo($Jeans['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: jeans end -->
                <!--Catégorie: chaussures start -->
                <div class="show-chaussures-categorie-page">

                    <div class="row pt-5">
                        <?php while($Chaussures=$psChaussures->fetch()) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                                <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><img src="productimages/<?php echo($Chaussures['prod_img']); ?>" class="img-men" style="border-radius:20px;height:180px"><br></a>
                                <a href="for-each-image.php?productID=<?php echo($Chaussures['id_produit']);?>"><span class="image-lable"><?php echo($Chaussures['prod_nom']) ?><br> <?php echo($Chaussures['prod_prix']); ?> MAD</span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--Catégorie: Chaussures end -->
                <!--pagination-->
                <div id="pagination">
                    <div >
                        <div >
                            <ul class="pagination" style="display: flex;justify-content: center;">
                                <?php for ($i=0;$i<$Nbpages;$i++) { ?>
                                    <li class="page-item <?php if($page==$i) echo("active") ?>">
                                        <a class="page-link"  href="all-top-container.php?page=<?php echo($i)?>&motcle=<?php echo($mc)?>"  style="color:black"><?php echo($i+1)?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--pagination-->
                <!--500-600 page end-->
            </div>
        </div>
        <!--right side col end-->
    </div>
</div>
<!--middle large device end-->
<!--middle part of small device start-->
<!--comment-->
<!--filter-->
<div class="container-fluid hide-me-for-font">
    <div class="row first-next-page pt-4 mt-1">
        <div class="col-12 text-right pr-5 filter-button">
            <div class="dropdown">
                <button class="filter-toggler"><i class="fa fa-filter" aria-hidden="true"></i>filter</button>
                <!-- The Modal -->
                <div class="container mt-1" id="small-left-sider" style="position:absolute;z-index:5;border:0.1px solid;background-color:rgb(255, 255, 255);width:50%;transform: translateX(100%);">
                    <div class="row">
                        <div class="col-12 text-left pt-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">price</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-one-hundred"> &nbsp;100-200</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-two-hundred"> &nbsp;200-300</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-three-hundred"> &nbsp;300-400</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-small-content-four-hundred"> &nbsp;400-500</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-small-content-five-hundred"> &nbsp;500-600</span><br>
                        </div>
                        <div class="col-12  text-left pt-3 pb-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">colour</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-three-hundred"> &nbsp;blue</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-five-hundred"> &nbsp;green</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-two-hundred"> &nbsp;yellow</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-four-hundred"> &nbsp;black</span><br>
                        </div>
                        <div class="col-12  text-left pb-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">brand</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-two-hundred"> &nbsp;LOUIS VUITTON</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-three-hundred"> &nbsp;GUCCI</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-four-hundred">  <span class="ml-1">HERMES</span></span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-five-hundred"> &nbsp;PRADA</span><br>
                        </div>
                    </div>
                </div>
                <!--The Modal-->
            </div>
        </div>
    </div>
</div>
<!--filter-->
<!--middle part-->
<div class="container-fluid for-small-devices-2">
    <div class="row">
        <div class="col-12 text-center">
            <span><img src="big-sale.jpg" height="150px"></span>
        </div>
    </div>
</div>
<div class="container mt-5 pt-2 for-small-devices">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="logged_in_for-each-image.php#\"><img src="Images/mens-dress.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>150MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>120MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="logged_in_for-each-image.php#\"><img src="Images/ladies-dress.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>180MAD</span></a>
        </div>
    </div>
    <!--second row-->
    <div class="row pt-5">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="logged_in_for-each-image.php#\"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>100MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="logged_in_for-each-image.php#\"><img src="Images/men.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>180MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="logged_in_for-each-image.php#\"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable" data-aos="fade-up">tradesional dress<br>120MAD</span></a>
        </div>
    </div>
    <!--third row-->
    <div class="row pt-5">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="logged_in_for-each-image.php#\"><img src="Images/men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>180MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="logged_in_for-each-image.php#\"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>120MAD</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="logged_in_for-each-image.php#\"><img src="Images/boys-kids-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
            <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>100MAD</span></a>
        </div>
    </div>
</div>
<!--comment-->

<!--100-200 page start-->
<!--header- of all the right side container--->
<div class="hide-me-for-font">
    <!--header- of all the right side container--->
    <div class="container show-two-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/mens-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>130MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/ladies-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>120MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/kids-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>.150MAD</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/kids-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>180MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/mens-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>100MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/ladies-dress-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>135MAD</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/ladies-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>155MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/mens-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>176MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/boys-dress-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>133MAD</span></a>
            </div>
        </div>
    </div>

    <!--100-200 page end-->

    <!--200-300 page start-->

    <div class="container show-three-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>130MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>120MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>.150MAD</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>180MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>100MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>135MAD</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-girls-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>155MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>176MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"><img src="Images/two-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"><span class="image-lable">tradesional dress<br>133MAD</span>
            </div>
        </div>
    </div>


    <!--200-300 page end-->

    <!--300-400 page start-->

    <div class="container show-four-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>130MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>120MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>.150MAD</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>180MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>100MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>135MAD</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>155MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>176MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/three-hundred-boys-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>133MAD</span></a>
            </div>
        </div>
    </div>

    <!--300-400 page end-->

    <!--400-500 page start-->

    <div class="container show-five-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-men.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>130MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-boys.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>120MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-men-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>.150MAD</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-boys-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>180MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="#/"></a><img src="Images/four-hundred-ladies.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>100MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-men-2.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>135MAD</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-girls-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>155MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-men-3.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>176MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/four-hundred-men-4.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>133MAD</span></a>
            </div>
        </div>
    </div>

    <!--400-500 page end-->

    <!--500-600 page start-->

    <div class="container show-six-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>130MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>120MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>.150MAD</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>180MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>100MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>135MAD</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-girls-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>155MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>176MAD</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="logged_in_for-each-image.php#\"></a><img src="Images/five-hundred-men-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="logged_in_for-each-image.php#\"></a><span class="image-lable">tradesional dress<br>133MAD</span></a>
            </div>
        </div>
    </div>
    <!--pagination-->
    <div class="row next-page-header pt-5">
        <div class="col next-page" style="z-index: 0;">
            <ul class="pagination" style="display: flex;justify-content: center;">
                <li class="page-item prev"><a class="page-link" href="#/"  style="color:black">Previous</a></li>
                <li class="page-item open-small-content-one-hundred "><a class="page-link" href="#/"  style="color:black">1</a></li>
                <li class="page-item open-small-content-five-hundred active "><a class="page-link" href="#/"  style="color:black">2</a></li>
                <li class="page-item open-small-content-three-hundred"><a class="page-link" href="#/"  style="color:black">3</a></li>
                <li class="page-item open-small-content-four-hundred "><a class="page-link" href="#/"  style="color:black">4</a></li>
                <li class="page-item open-small-content-five-hundred "><a class="page-link" href="#/"  style="color:black">5</a></li>
                <li class="page-item next"><a class="page-link" href="#/"  style="color:black">Next</a></li>
            </ul>
        </div>
    </div>
    <!--pagination-->
    <!--header- of all the right side container--->
</div>

<!--500-600 page end-->

<!--small device of middle part end-->
<!--recommend-->
<div class="container" style="height:80vh">
    <div class="row">
        <div class="col-sm-12 text-center pt-5">
            <a href="#"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;">recommend</span></a>
        </div>
    </div>
    <div class="row single-slider pt-5">
        <?php while($aliatoire=$psAliatoire->fetch()) { ?>
            <div class="col text-center">
                <span style="display:flex;justify-content: center;"><a href="for-each-image.php?productID=<?php echo($aliatoire['id_produit']);?>"><img src="productimages/<?php echo($aliatoire['prod_img']); ?>" height="250px" style="background-color:black"></a></span>
                <a href="for-each-image.php?productID=<?php echo($aliatoire['id_produit']);?>"><span class="image-lable"><?php echo($aliatoire['prod_nom']); ?><br> <?php echo($aliatoire['prod_prix']); ?> MAD</span></a>
            </div>
        <?php } ?>
    </div>
</div>
<!--recommend end-->
<!--footer-->
<?php require_once('footer.php');?>
<!--footer-->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>