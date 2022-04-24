<?php require_once 'dbconn.php';
    session_start();
    $iduser=$_SESSION['PROFILE']['id_user'];
    require_once 'Classes/Panier.php';
    $Panier= new Panier($iduser);
    $listProduits=$Panier->getPanier();
?>
<head>
    <style>
        #change-color {
            position: absolute;
        }
        #number-panier {
            background: #ff4747;
            max-width: 24px;
            min-width: 15px;
            height: 17px;
            color: #fff;
            border-radius: 7px;
            position: absolute;
            text-align: center;
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
        }
        .containerr a {
            color: #a19696;
        }
        .containerr a:hover{
            color: black;
        }
        .containerr {
            background-color: white;
        }
        .containerr:hover {
            background-color: #ece9e9;
            transition: 0.5s;
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
                    <?php foreach ($listProduits as $produitX){ ?>
                    <!-- Start-->
                    <div class="row pb-3 containerr">
                        <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                            <img src="productimages/<?php echo($produitX['image']);?>" height="48px" width="48px">
                        </div>
                        <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-12 pt-5">
                            <a href="logged_in_for-each-image.php"><p style="width: 160px;line-height: inherit;max-height: 36px;font-size: smaller;"><?php echo($produitX['nom']);?></p></a>
                            <p style="font-size: 11px;width: 40px;">Qte : <?php echo($produitX['qte']);?></p>
                        </div>

                    </div>
                    <!-- End -->
                    <?php } ?>


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