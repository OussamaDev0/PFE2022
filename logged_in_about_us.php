<?php require_once 'securityProfile.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>À propos de nous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS_files/about-us.css">
    <script src="JS_files/about-us.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header part start-->
<?php require_once('hpsl.php');?>
<!--header part end-->

<!--middle part start-->
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 mt-5 text-center">
            <span class="header">à propos de notre plateforme</span>
        </div>
    </div>

    <!--main content-->
    <div class="row mt-5">
        <div class="col-xl-6 col-lg-6 col-sm-12 text-center">
            <img src="Images/about-images.jpg"  class="header-part">
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12 pt-5" style="font-weight: 600;">
            "ShopMen" est une entreprise de vente les vêtements pour les hommes en ligne,cette plateforme doit bien évidemment comporter
            une boutique en ligne. Cette boutique en ligne doit par défaut afficher l'ensemble des vêtements mis en ligne depuis le back-office,
            et disponibles en stocks
            <span class="card-3">
                    Chaque fiche produit est composée des informations structurées suivantes:<br>
                        - Nom du produit<br>
                        - Photo du produit<br>
                        - Description du produit<br>
              </span>
        </div>
    </div>
    <!--main content-->

    <!--cards-->
    <br><h1 style="text-align: center;">Types de produits : </h1>
    <div class="row mt-5 mb-5">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
            <div class="card">
                <div class="card-header text-center">Chaussure</div>
                <div class="card-body"><img src="Images/about-images-1.jpg" height="200px" width="100%">
                    <p class="pt-3">cette platforme contient des nombreux types des chaussures, que vous pouvez acheter a tout moment  .</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4">
            <div class="card">
                <div class="card-header text-center">Pantalons</div>
                <div class="card-body"><img src="Images/about-images-2.jpg" height="200px" width="100%">
                    <p class="pt-3">Obtenez Pantalon de haute qualité, Soyez votre propre style, Shopper les nouveaux. Une
                        grande sélection de Pantalon.Best Seller en solde maintenant.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  mt-4 card-3">
            <div class="card">
                <div class="card-header text-center">Chemises</div>
                <div class="card-body"><img src="Images/about-images-3.jpg" height="200px" width="100%">
                    <p class="pt-3">Plus de 10 modèles avec de nouveaux designs à des prix abordables. Gros rabais pour un temps limité.
                        Tous nos produits sont fabriqués par des machines car nous sommes méticuleux sur les détails et les conceptions.
                        Paiement rapide et sécurisé.</p>
                </div>
            </div>
        </div>
    </div>
    <!--cards-->
</div>
<!--middle part end-->

<!--footer-->
<?php require_once('footer.php');?>
<!--footer-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    //on scroll plugin//
    AOS.init({
        once:true,
        duration:1000,
    });
    //on scroll plugin//
</script>
</body>
</html>