<?php require_once 'securityProfile.php'; ?>
<?php
    session_start();
    $iduser=$_SESSION['PROFILE']['id_user'];
    require_once 'Classes/Panier.php';
    $Panier= new Panier($iduser);
    $listProduits=$Panier->getPanier();
    $totalPrix=0;
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS_files/cart.css">
    <script src="JS_files/cart.js"></script>
</head>
<body>
<!--header part start-->
<?php require_once ('hpsl.php');?>
<!--header part end-->
<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row pt-3 pb-3">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <span style="font-size:20px;font-weight:700;color:grey;color:black">Mon panier(<?php echo(count($listProduits)); ?>)</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  text-right">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Livrer à &nbsp;<input type="text" placeholder="adresse">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body">
                        <?php if(!$listProduits) { ?>

                            <!-- Produits boucle start -->
                            <div class="row pb-3 ">
                                <p>Votre Panier est vide</p>
                            </div>
                            <!-- Produits boucle end -->

                        <?php } else{ ?>
                                <?php foreach ($listProduits as $produit){ ?>
                        <!-- Produits boucle start -->
                        <div class="row pb-3 ">
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                                <img src="productimages/<?php echo $produit['image'];?>" height="200px">
                                <div class="text-left">
                                    <?php// echo "Qty : ".$produit['qte'] ;?>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-12 pt-5">
                                <p>Nom de l'article :&nbsp; <?php echo($produit['nom']); ?></p>
                                <p>Prix:&nbsp;<?php echo($produit['prix']); ?> MAD</p>
                                <p>Size:&nbsp;<?php echo($produit['size']); ?></p>
                                <p>Quantité:&nbsp;<?php echo($produit['qte']); ?></p>
                                <p><a href="suppDupanier.php?id=<?php echo($produit['id']);?>&page=<?php echo($_SERVER['PHP_SELF']);?>" style="font-weight:700">RETIRER</a></p>
                            </div>
                        </div>
                                <?php $totalPrix = $totalPrix + $produit['qte']*$produit['prix']; ?>
                        <!-- Produits boucle end -->
                        <?php } } ?>
                        <div class="row">
                            <div class="col pr-5 text-right">
                                <p><button style="text-transform: uppercase;padding:2% 5%;background-color: tomato;color:white;border-color:transparent" data-toggle="collapse" data-target="#collapseTwo,#payment-option"><a href="payment.php" style="color: white;">Passer la commande</a></button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pt-4">
            <div class="container">
                <div class="card">
                    <div class="card-header">DÉTAILS DES PRIX</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-left">
                                Prix(<?php echo(count($listProduits)); ?>) :
                            </div>
                            <div class="col text-right">
                                <?php echo ($totalPrix);?> MAD
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-7 text-left ">
                                Frais de livraison :
                            </div>
                            <div class="col text-right">
                                Free
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col text-left">
                                Montant total :
                            </div>
                            <div class="col text-right">
                                <?php echo ($totalPrix);?> MAD
                            </div>
                        </div>
                    </div>
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
                <p>© 2020 Copyright:<span style="font-weight:600">MDBootstrap</span></p>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 icon-head">
                <span class="icons-2"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                <span class="icons-3"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                <span class="icons-1"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                <span class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once:true,
        duration:1000,
    });
</script>
</body>
</html>