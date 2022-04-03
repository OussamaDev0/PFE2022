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
<div class="container-fluid text-white" id="change-color">
    <div class="row" id="top-containt">
        <div class="col-4 text-center">
            <a href="login-ecommerce.php"><img src="Images/shopping-logo.png" style="width:150px;height:150px;" class="color logo-1 logo-sift"></a>
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
            <span class="menu"><a href="Logged_in_product_page.php" class="color">produits</a></span>
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
            <li class="pt-3"style="margin-left:-5%"><a href="Logged_in_product_page.php" class="color">produits</a></li>
            <li class="pt-3"style="margin-left:-5%"><a href="logged_in_about_us.php" class="color">à propos </a></li>
            <li class="pt-3"style="margin-left:-5%"><a href="contact-form.php" class="color">contact</a></li>
            <li class="pt-3"style="margin-left:-5%"><a href="#/" class="color">Mettre à jour le profil</a></li>
            <li class="pt-3"style="margin-left:-5%"><a href="ecommerce.php" class="color">Se déconnecter</a><span><a href="#" class="color"><img src="log-in..png" class="log-in"></a></span></li>
        </ul>
    </div>
</div>
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
    //on scroll plugin//
    AOS.init({
        once:true,
        duration:1000,
    });
    //on scroll plugin//
</script>
</body>
</html>