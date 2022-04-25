<?php require_once 'dbconn.php';
    session_start();
    $iduser=$_SESSION['PROFILE']['id_user'];
    require_once 'Classes/Panier.php';
    $Panier= new Panier($iduser);
    $listProduits=$Panier->getPanier();
?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <style>
        #change-color {
            position: absolute;
        }
        #number-panier {
            z-index: 1;
            background: #ff1616;
            min-width: 18px;
            height: 18px;
            line-height: 16px;
            padding: 0 3px;
            border-radius: 12px;
            position: absolute;
            left: 41px;
            font-size: smaller;
        }

        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }


        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        .dropdown #change-color dropdown-content {
            z-index: 2;
            top: 38px;
            right: 4px;
            width: 340px;
            -webkit-box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
            box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
            border-radius: 4px;
            padding: 8px 0 24px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 252px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            line-height: 1;
            right: 0;
            top: 63px;
            width: auto;
            font-family: 'Montserrat', sans-serif;

        }
        .containerr a {
            color: #888686;
        }
        .containerr a:hover{
            color: black;
        }
        .containerr {
            background-color: white;
            height: 88px;
            width: 370px;
        }
        .containerr:hover {
            background-color: #ece9e9;
            transition: 0.5s;
            color: black;
        }

        .productsPanier{
            float:left;
            overflow-y: auto;
           /* height: 352px;*/
            overflow-x:hidden ;
            scrollbar-gutter: stable;
        }
        .view-cart button a {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;

            height: 40px;
            line-height: 40px;
            background: #ff1616;
            font-weight: 700;
            border-radius: 4px;
        }
        .view-cart {
            z-index: 2;
            top: 38px;
            right: 4px;
            width: 340px;
            -webkit-box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
            box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
            border-radius: 4px;
            padding: 8px 0 24px;
            background: white;
        }
        .view-cart button a:hover {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            transition: 0.5s;
            height: 40px;
            line-height: 40px;
            background: #ee0000;
            font-weight: 700;
            border-radius: 4px;
        }
        .button-cart {
            border-style: none;
            background: white;
            margin-top: 13px;
            border-bottom-width: 12px;
            margin-bottom: 9px;
            height: 21px;
        }
        .productsPanier::-webkit-scrollbar {
            width: 7px;
        }
        .productsPanier::-webkit-scrollbar-track {
            background-color: darkgrey;
            border-radius: 100px;
        }
        .productsPanier::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 100px;
        }
        .remove-product img {
         /*   display: none;*/
        }
        .remove-product img:hover {
                background: red;
            border-radius: 100px;
        }
    </style>
</head>
<div class="container-fluid text-white" id="change-color">
    <div class="row" id="top-containt">
        <div class="col-4 text-center">
            <a href="login-ecommerce.php"><img src="Images/shopping-logo.png" style="width:150px;height:150px;" class="color logo-1 logo-sift"></a>
            <div class="small-devices-logo"><a href="login-ecommerce.php"><img src="Images/pinterest_icon.png" height="70px" class=" color logo-2 mt-1 ml-2"></a></div>
        </div>
        <div class="col-8 pt-4 mt-1 text-center">
            <span class="dropdown dropdown-toggle profile" data-toggle="dropdown" style="color:black" >
              <a href="#/"><img src="Images/profile-icon.png" class="profile-icon color"></a>
            </span>
            <ul class="dropdown-menu mt-4 text-center" style="margin-left:-6%;border-radius:10px;">
                <li class="pre-profile-1 pt-2 pb-2"><a href="#/" class="color" style="font-weight:600">Historique des commandes</a></li>
                <li class="pre-profile-1 pt-2 pb-2"><a href="cart.php" class="color" style="font-weight:600">Panier</a></li>
                <li class="pre-profile-1 pt-2 pb-2"><a href="profile.php" class="color" style="font-weight:600">Mettre à jour le profil</a></li>
                <li class="pre-profile-1 pt-2 pb-2"><a href="LougOut.php" class="color" style="font-weight:600">Se déconnecter</a></li>
            </ul>
            <span class="menu-1"><a href="login-ecommerce.php" class="color">accueil</a></span>
            <span class="menu"><a href="logged_in_all_top_container.php" class="color">produits</a></span>
            <span class="menu"><a href="logged_in_about_us.php" class="color">à propos </a></span>
            <span class="menu"><a href="contact-form.php" class="color">contact</a></span>
            <span class="menu-bar text-right"><a href="#/" class="color">&#9776;</a></span>
            <span class="menu-bar-1 text-right"><a href="#/" class="color">&#9776;</a></span>
            <span class="menu-bar-2 text-right"><a href="#/" class="color">&#9776;</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:black" class="dropdown">
                <button class="dropbtn" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;"><img src="Images/panier-icone.png" class="profile-icon color"><span id="number-panier"><?php echo(count($listProduits)) ?></span></button>

                <div class="dropdown-content">
                    <!-- test start -->
                <div style="height: <?php if(count($listProduits)==0) echo "0";elseif(count($listProduits)==1) echo "88";elseif(count($listProduits)==2) echo "176";elseif(count($listProduits)==3) echo "264";else echo "352"; ?>px;" class="productsPanier">
                    <?php foreach ($listProduits as $produitX){ ?>
                    <div class="row pb-3 containerr">
                        <div class="col-sm-4 pt-4 text-center">
                            <img src="productimages/<?php echo($produitX['image']);?>" height="48px" width="48px">
                        </div>
                        <div class="col-sm-4 pt-4">
                            <a href="logged_in_for-each-image.php?productID=<?php echo($produitX['id']);?>"><p style="width: 160px;line-height: inherit;max-height: 36px;font-size: smaller;position: absolute;top: auto;left: -28px;"><?php echo($produitX['nom']);?></p></a>
                            <p style="font-size: 11px;width: 40px;position: absolute;left: -21px;top: 62px;">Qte : <?php echo($produitX['qte']);?></p>
                        </div>
                        <div class="col-sm-4 pt-4 remove-product">
                            <i class=""><a href="suppDupanier.php?id=<?php echo($produitX['id']);?>&page=<?php echo($_SERVER['PHP_SELF']);?>"><img src="Images/remove-icone.png" height="29px" width="29px"></a></i>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- test end -->
                    <div class="view-cart">
                        <button class="button-cart" style="border-style: none;background: white;"><a style="padding-top: 10px;padding-bottom: 10px;padding-left: 59px;padding-right: 64px;" href="cart.php">Voir le panier (<?php echo(count($listProduits)) ?> articles)</a></button>

                    </div>

                </div>


            </span>

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
            <li class="pt-3"style="margin-left:-5%"><a href="profile.php" class="color">Mettre à jour le profil</a></li>
            <li class="pt-3"style="margin-left:-5%"><a href="LougOut.php" class="color">Se déconnecter</a><span><a href="#" class="color"><img src="log-in..png" class="log-in"></a></span></li>
        </ul>
    </div>
</div>
