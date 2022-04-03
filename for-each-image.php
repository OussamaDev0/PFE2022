<?php
    require_once('dbconn.php');
?>
<?php
    if(!isset($_GET['productID'])){
        $code=(int)rand(1,80);
    }else{
        $code=$_GET['productID'];
    }
    $psProduit=$pdo->prepare("SELECT * FROM produit WHERE id_produit=?");
    $params=array($code);
    $psProduit->execute($params);
    $produit=$psProduit->fetch();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS_files/for-each-image.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="Plugins/slick-master/slick/slick-theme1.css"/>
        <script type="text/javascript" src="Plugins/slick-master/slick/slick.min.js"></script>
        <script src="JS_files/for-each-image.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Plugins\jQuery-Plugin-For-Image-Hover-Zoom-WM-Zoom\wm-zoom\jquery.wm-zoom-1.0.min.css">
        <style>
          a:hover,a{color:black}
        </style>
    </head>
    <body>
            <!--pop up-->
    <div class="container-fluid mt-5 pop-container" style="position:absolute;z-index:3;background-color: transparent;">
        <div class="container bg-light mt-2 mb-2 pt-2" style="border-radius:20px;">
            <div class="row pt-5">
                <div class="col-6 text-left pt-2 table-header">
                    <span style="font-size:25px;">Tableau des tailles</span>
                </div>
                <div class="col-6 text-right pr-5">
                    <span style="font-size:35px;" class="close-pop"><a href="#/" style="color:black">&times;</a></span>                                                                
                </div>
            </div>
            <div class="row pt-3 table-header" style="font-size:20px;">
                <div class="col-12">

                </div>
                <div class="col-12">
                    Tableau des tailles des chemises pour hommes Veirdo chemises
                </div>
            </div>
            <div class="row pt-3 pb-5 table">
                <div class="col">
                    <table class="table table-bordered table-hover table-striped hide-for-tablate">
                        <thead>
                          <tr>
                            <th>Taille de l'étiquette</th>
                            <th>DOMICILE</th>
                              <th>Coffre(en pouces)</th>
                            <th>Taille(en pouces)</th>
                            <th>Longueur(en pouces)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>S</td>
                            <td>Petit</td>
                            <td>38</td>
                            <td>37.5</td>
                            <td>27</td>
                          </tr>
                          <tr>
                            <td>M</td>
                            <td>Moyen</td>
                            <td>40</td>
                            <td>39.5</td>
                            <td>27</td>
                          </tr>
                          <tr>
                            <td>L</td>
                            <td>Grand</td>
                            <td>42</td>
                            <td>41.5</td>
                            <td>29</td>
                          </tr>
                          <tr>
                            <td>XL</td>
                            <td>X-Grand</td>
                            <td>44</td>
                            <td>43.5</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <td>XXL</td>
                            <td>XX-Grand</td>
                            <td>46</td>
                            <td>45.5</td>
                            <td>30.5</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-striped show-for-tablate">
                        <thead>
                          <tr>
                            <th>Taille de l'étiquette</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>XXL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>India</td>
                            <td>Petit</td>
                            <td>Moyen</td>
                            <td>Grand</td>
                            <td>X-Grand</td>
                            <td>XXL-Grand</td>
                          </tr>
                          <tr>
                            <td>Coffre(en pouces)</td>
                            <td>38</td>
                            <td>40</td>
                            <td>42</td>
                            <td>44</td>
                            <td>46</td>
                          </tr>
                          <tr>
                            <td>Taille(en pouces)</td>
                            <td>37.5</td>
                            <td>39.5</td>
                            <td>41.5</td>
                            <td>43.5</td>
                            <td>45.5</td>
                          </tr>
                          <tr>
                            <td>Longueur(en pouces)</td>
                            <td>27</td>
                            <td>27</td>
                            <td>29</td>
                            <td>30</td>
                            <td>30.5</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-striped show-for-mobile">
                        <thead>
                          <tr>
                            <th>Taille de l'étiquette</th>
                            <th>Coffre(en pouces)</th>
                            <th>Taille(en pouces)</th>
                            <th>Longueur(en pouces)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>s</td>
                            <td>38</td>
                            <td>37.5</td>
                            <td>27</td>
                          </tr>
                          <tr>
                            <td>M</td>
                            <td>40</td>
                            <td>39.5</td>
                            <td>27</td>
                          </tr>
                          <tr>
                            <td>L</td>
                            <td>42</td>
                            <td>41.5</td>
                            <td>29</td>
                          </tr>
                          <tr>
                            <td>XL</td>
                            <td>44</td>
                            <td>43.5</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <td>XXL</td>
                            <td>46</td>
                            <td>45.5</td>
                            <td>30.5</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-striped show-for-extra-Petit-devices">
                        <thead>
                          <tr>
                            <th>Taille de l'étiquette</th>
                            <th>Coffre(en pouces)</th>
                            <th>Taille(en pouces)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>s</td>
                            <td>38</td>
                            <td>37.5</td>
                          </tr>
                          <tr>
                            <td>M</td>
                            <td>40</td>
                            <td>39.5</td>
                          </tr>
                          <tr>
                            <td>L</td>
                            <td>42</td>
                            <td>41.5</td>
                          </tr>
                          <tr>
                            <td>XL</td>
                            <td>44</td>
                            <td>43.5</td>
                          </tr>
                          <tr>
                            <td>XXL</td>
                            <td>46</td>
                            <td>45.5</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-striped show-for-extra-Petit-devices">
                        <thead>
                          <tr>
                            <th>Taille de l'étiquette</th>
                            <th>Longueur(en pouces)</th>
                          </tr>
                          <tr>
                            <td>s</td>
                            <td>27</td>
                          </tr>
                          <tr>
                          <td>M</td>
                          <td>27</td>
                          </tr>
                          <tr>
                          <td>L</td>
                          <td>29</td>
                          </tr>
                          <tr>
                          <td>XL</td>
                          <td>30</td>
                          </tr>
                          <tr>
                          <td>XXL</td>
                          <td>30.5</td>
                          </tr>
                        </thead>
                      </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 table-header">
                    <p class="pt-3">Mesurer la taille du t-shirt</p>
                    <span>Vous n'êtes pas sûr de la taille de votre t-shirt ? Suivez ces étapes simples pour le comprendre :</span><br>
                    <span style="font-weight: 600;">Shoulder</span> - Mesurez l'épaule à l'arrière, d'un bord à l'autre avec les bras détendus des deux côtés<br>
                    <span style="font-weight:600;">Coffre</span> - Mesurez autour du corps sous les bras dans la partie la plus complète du Coffre avec vos bras détendus des deux côtés.<br>
                    <span style="font-weight:600;">Sleeve</span> - Mesurez de la couture de l'épaule à l'extérieur du bras jusqu'au poignet/ourlet<br>
                    <span style="font-weight:600;">Neck</span> - Mesuré horizontalement à travers le cou Longueur - Mesurez du point le plus haut de la couture de l'épaule à l'ourlet inférieur du vêtement.<br>
                </div>
                <div class="col-12 text-center pt-5 pb-5">
                    <img src="Images/shirt-detail.jpg" height="300px" width="50%">
                </div>
            </div>
        </div>
    </div>
    <!--pop up-->
             <!--header part start-->                
     <div class="container-fluid text-white" id="change-color">
        <div class="row" id="top-containt">
          <div class="col-4 text-center">
            <a href="ecommerce.html"><img src="Images/shopping-logo.png" style="width:150px;height:150px;" class="color logo-1 logo-sift"></a>
            <a href="ecommerce.html"><img src="Images/pinterest_icon.png" height="70px" class=" color logo-2 mt-1 ml-2"></a>
          </div>
          <div class="col-8 pt-4 mt-1 text-center">
            <span class="dropdown dropdown-toggle profile" data-toggle="dropdown" style="color:black" >
              <a href="#/"><img src="Images/profile-icon.png" class="profile-icon color"></a>
            </span>
              <ul class="dropdown-menu mt-4 text-center" style="margin-left:-6%;border-radius:10px;">
                  <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Historique des commandes</a></li>
                  <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Changer le mot de passe</a></li>
                  <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Mettre à jour le profil</a></li>
                  <li class="pre-profile-1 pt-2 pb-2"><a href="login-form.html" class="color" style="font-weight:600">Connexion</a></li>
              </ul>
              <span class="menu-1"><a href="ecommerce.html" class="color">accueil</a></span>
              <span class="menu"><a href="ecommerce-price-men.html" class="color">produits</a></span>
              <span class="menu"><a href="#/" class="color">à propos </a></span>
              <span class="menu"><a href="contact-form.html" class="color">contact</a></span>
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
                <li class="pt-4" style="margin-left:-5%;"><a href="ecommerce.html" class="color">home</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="ecommerce-price-mSymbol Men's Solid Regular fit Half Sleeve Poloen.html" class="color">produits</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="#/" class="color">à propos </a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="contact-form.html" class="color">contact</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="#/" class="color">Mettre à jour le profil</a></li>
                <li class="pt-3"style="margin-left:-5%"><a href="login-form.html" class="color">Connexion</a><span><a href="#" class="color"><img src="log-in..png" class="log-in"></a></span></li>
            </ul>
        </div>
    </div>
    <!--header part end-->
    <!--middle part start-->
    <div class="container mt-5 pt-4 hide-for-tablate">
        <div class="row pt-5">
            <div class="col-1">
                <div class="row pt-3 pb-2">
                    <div class="col-xl-12 text-center">
                        <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="95px" class="zooming"></a>
                    </div>
                    <div class="col-xl-12 mt-3">
                       <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="50px" width="100px" class="zooming"></a>
                    </div>
                    <div class="col-xl-12 mt-3 front-show">
                      <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="55px" width="75px" class="zooming-2"></a>
                      <a href="#/"><div style="font-size:25px;z-index:1;color:black;position: absolute;padding-left:20%;" class="pt-1 front-show">+3</div></a>  
                    </div>
                    <div class="col-xl-12 mt-3 front-hide">
                        <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="50px" width="100px" class="zooming-5"></a>
                    </div>
                    <div class="col-xl-12 mt-3 front-hide">
                     <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="50px" width="100px" class="zooming-3"></a>
                    </div>
                    <div class="col-xl-12 mt-3 front-hide">
                      <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="50px" width="100px" class="zooming-4"></a>
                    </div>
                </div>
            </div>
            <div class="col-5 text-center zooming-open-head wm-zoom-container my-zoom-1">
              <div class="wm-zoom-box">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="405px" class="wm-zoom-default-img" alt="alternative text" data-hight-src="for-each-image-1.jpg">
              </div>
            </div>
<!--hidden--> <div class="col-5 text-center zooming-open-1 wm-zoom-container my-zoom-1">
              <div class="wm-zoom-box">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="405px" class="wm-zoom-default-img" alt="alternative text" data-hight-src="for-each-image-2.jpg">
              </div>
            </div>
<!--hidden--> <div class="col-5 text-center zooming-open-2">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="95%">
              </div>
<!--hidden--> <div class="col-5 text-center zooming-open-3">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="95%">
            </div>
<!--hidden--> <div class="col-5 text-center zooming-open-4">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="95%">
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-12 pt-3">
<<<<<<< HEAD:for-each-image.php
                        <p style="font-size:25px;font-weight:600"><?php echo($produit['prod_nom']) ?></p>
                    </div>
                    <div class="col-12 pl-5">
                        <p style="font-weight:600;font-size:20px;"> Price:<span style="color:red"> <?php echo($produit['prod_prix']) ?> MAD</span></p>
=======
                        <p style="font-size:25px;font-weight:600">Symbol Polo à manches mi-longues coupe régulière pour homme</p>
                    </div>
                    <div class="col-12 pl-5">
                        <p style="font-weight:600;font-size:20px;"> Prix:<span style="color:red">200MAD-300MAD</span></p>
>>>>>>> 49eb4349442fe39a83ab13f60e4ab997cf7d755e:for-each-image.html
                    </div>
                    <div class="col-12 pl-5">
                        <p style="font-weight:600;font-size:20px;">Taille: <span style="border:1px solid;padding:1% 3%" class="ml-3">M</span> <span style="border:1px solid;padding:1% 4%" class="ml-2">L</span> <span style="border:1px solid;padding:1% 3%" class="ml-2">XL</span> <br class="break"><a href="#/" style="color:black" class="ml-3 open-pop-container"><br>tableau des tailles <img src="Images/size-icon.png" height="20px"></a></p>
                    </div>
                    <div class="col-12">
<<<<<<< HEAD:for-each-image.php
                        <p style="font-weight:600;font-size:20px;"> Description :</p><br>
                        <p><?php echo($produit['prod_description']) ?></p>
=======
                        <ul>
                            <li>Conseils d'entretien : lavage à la main</li>
                            <li>Type de coupe : coupe standard</li>
                            <li>Couleur :Bleu Éclat</li>
                            <li>60 % polyester et 40 % coton</li>
                            <li>Coupe régulière</li>
                            <li>Demi-manches</li>
                            <li>Polo à col classique</li>
                            <li>Lavage à la main</li>
                        </ul>
>>>>>>> 49eb4349442fe39a83ab13f60e4ab997cf7d755e:for-each-image.html
                    </div>
                </div>
            </div>  
        </div>
        <div class="row pt-2">
            <div class="col-6">
              <span style="visibility: hidden;;">hello user</span>
            </div>
            <div class="col-6 pl-5 text-white">
                <a href="login-form.html" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:rgb(255, 174, 0);border-radius:10px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="ml-2">ajouter à la panier</span></span></a>
                <a href="login-form.html" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:orangered;border-radius:10px;" class="ml-3"><i class="fa fa-bolt" aria-hidden="true"></i><span class="ml-2"> </span>Acheter maintenant</span></a>
            </div>
        </div>
        <div class="rows pb-5">
          <div class="col">
            <span style="visibility:hidden;">salut</span>
          </div>
        </div>
    </div>
    <div class="container show-for-Petit-devices mt-5 pt-1">
      <div class="row pt-5 mt-5">
        <div class="col-2 col-xs-3">
          <div class="row pt-3 pb-2">
            <div class="col-xl-12 text-center">
                <a href="#/"><img src="Images/for-each-image-1.jpg" class="zooming"></a>
            </div>
            <div class="col-xl-12 mt-3">
               <a href="#/"><img src="Images/for-each-image-2.jpg" class="zooming-1"></a>
            </div>
            <div class="col-xl-12 mt-3 front-show">
              <a href="#/"><img src="Images/for-each-image-3.jpg" height="55px" width="75%" class="zooming-2"></a>
              <a href="#/"><div class="pt-2 front-show block-img-for-tablate">+3</div></a>  
            </div>
            <div class="col-xl-12 mt-3 front-hide">
                <a href="#/"><img src="Images/for-each-image-3.jpg" class="zooming-5"></a> 
            </div>
            <div class="col-xl-12 mt-3 front-hide">
             <a href="#/"><img src="Images/for-each-image-5.jpg" class="zooming-3"></a>  
            </div>
            <div class="col-xl-12 mt-3 front-hide">
              <a href="#/"><img src="Images/for-each-image-6.jpg" class="zooming-4"></a>  
            </div>
        </div>
        </div>
        <div class="col-10 col-xs-9 text-center zooming-open-head ">
          <img src="Images/for-each-image-1.jpg" height="400px" width="95%">
        </div>
<!--hidden--> <div class="col-10 text-center zooming-open-1">
          <img src="Images/for-each-image-2.jpg" height="400px" width="95%">
              </div>
<!--hidden-->   <div class="col-10 text-center zooming-open-2">
          <img src="Images/for-each-image-3.jpg" height="400px" width="95%">
                </div>
<!--hidden--> <div class="col-10 text-center zooming-open-3">
          <img src="Images/for-each-image-5.jpg" height="400px" width="95%">
              </div>
<!--hidden--> <div class="col-10 text-center zooming-open-4">
          <img src="Images/for-each-image-6.jpg" height="400px" width="95%">
              </div>
      </div>
      <div class="row mt-5 pt-5">
        <div class="col-12 pt-3">
          <p style="font-size:25px;font-weight:600">Symbol Men's Solid Regular fit Half Sleeve Polo</p>
      </div>
      <div class="col-12 pl-5">
          <p style="font-weight:600;font-size:20px;"> Price:<span style="color:red">200MAD-300MAD</span></p>
      </div>
      <div class="col-12 pl-5">
          <p style="font-weight:600;font-size:20px;">size: <span style="border:1px solid;padding:1% 3%" class="ml-3">M</span> <span style="border:1px solid;padding:1% 4%" class="ml-2">L</span> <span style="border:1px solid;padding:1% 3%" class="ml-2">XL</span> <br class="break"><a href="#/" style="color:black" class="ml-3 open-pop-container">tableau des tailles <img src="size-icon.png" height="20px"></a></p>
      </div>
      <div class="col-12">
          <ul>
              <li>Instructions d'entretien : lavage à la main</li>
              <li>Type de coupe : coupe standard</li>
              <li>Couleur :Bleu Éclat</li>
              <li>60 % polyester et 40 % coton</li>
              <li>Coupe régulière</li>
              <li>Demi-manches</li>
              <li>Polo à col classique</li>
              <li>Lavage à la main</li>
          </ul>
      </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="#/" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:rgb(255, 174, 0);border-radius:10px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="ml-2">ajouter Panier</span></span></a><br class="break-1"><br class="break-1">
          <a href="#/" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:orangered;border-radius:10px;" class="ml-3"><i class="fa fa-bolt" aria-hidden="true"></i><span class="ml-2"> </span>Acheter maintenant</span></a>
        </div>
      </div>
      <div class="container-fluid mt-5">
        <span style="visibility: hidden;">hi user</span>
      </div>
    </div>
    <!--middle part end-->

    <div class="container mb-5"> 
      <div class="row">
        <div class="col-sm-12 text-center pb-4 pt-4">
         <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">similaire</span>
        </div>
      </div>
      <div class="carousel slide pt-1" data-ride="carousel">
        <div class="carousel-inner">
                                              <!--first slider-->
          <div class="carousel-item text-center">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="container" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">afordable & tradesional dress<br>101MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>400MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 hide-lady-1">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/girl.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>101MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 hide-lady">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">plain pink cotton saree<br>400MAD</span></a>
                </div>
              </div>
            </div>
          </div>
                                             <!--second-slider-->
          <div class="carousel-item text-center">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="container" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/men-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">accessories & tradesional dress<br>117MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/blazers.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">men's black sweatshirt<br>60MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 hide-lady-1">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/men-1.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">accessories & tradesional dress<br>117MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 hide-lady">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/blazers.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">men's black sweatshirt<br>60MAD</span></a>
                </div>
              </div>
            </div>
          </div>
                                      <!--third slider-->
          <div class="carousel-item active text-center">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="container" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">toddler children's dress<br>203MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/boys-kids.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">boys flower print shirt<br>320MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 hide-lady-1">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/girl (2).jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">girls flower print skirt<br>400MAD</span></a>
                </div>
              </div>
              <div class="col-xl-3 hide-lady">
                <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                  <a href="for-each-image.html#/"><img src="Images/boys-kids-1.jpg" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                  <a href="for-each-image.html#/"><span class="image-lable" data-aos="fade-up">formal black toxedo dress suits<br>117MAD</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
              <!--recommend-->
              <div class="container" style="height:80vh">
                <div class="row">
                  <div class="col-sm-12 text-center pt-5">
                   <a href="for-each-image.html"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;">RECOMMANDER</span></a>
                  </div>
                </div>
                <div class="row single-slider pt-5">
                  <div class="col text-center">
                    <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/boys-dress-1.jpeg" height="250px" style="background-color:black"></span></a>
                     <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a> 
                  </div>
                  <div class="col  text-center">
                    <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-2.jpg" height="250px"></span></a>
                     <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a> 
                  </div>
                  <div class="col  text-center">
                    <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-1.jpg" height="250px"></span></a>
                     <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a> 
                  </div>
                  <div class="col text-center">
                    <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-4.jpg" height="250px"></span></a>
                    <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a> 
                  </div>
                  <div class="col  text-center">
                    <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-2.jpg" height="250px"></span></a>
                     <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a> 
                  </div>
                  <div class="col text-center">
                   <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-3.jpg" height="250px"></span></a>
                    <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a>  
                  </div>
                  <div class="col  text-center">
                   <a href="for-each-image.html"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-3.jpg" height="250px"></span></a>
                    <a href="for-each-image.html"><span class="image-lable">tradesional dress<br>180MAD</span></a>  
                  </div>
                </div>
              </div>
              <!--recommend end-->
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

            <script type="text/javascript">
                //for single slider
                $('.single-slider').slick({
                    dots: false,
                    infinite:false,
                    autoplaySpeed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                arrows: false,
                                dots: false
                            }
                        },
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                                arrows: false
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                                arrows: false
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            </script>
            <script type="text/javascript" src="Plugins\jQuery-Plugin-For-Image-Hover-Zoom-WM-Zoom\assets\js\jquery-1.11.1.js"></script>
            <script type="text/javascript" src="Plugins\jQuery-Plugin-For-Image-Hover-Zoom-WM-Zoom\wm-zoom\jquery.wm-zoom-1.0.min.js"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.my-zoom-1').WMZoom();
                    config : {
                        inner : true
                    }
                });
            </script>
            <script>
                AOS.init({
                    once:true,
                    duration:1000,
                });
            </script>

    </body>
</html>