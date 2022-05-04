<?php require_once 'securityProfile.php'; ?>
<?php
    session_start();
    require_once 'dbconn.php';
    require_once 'Classes/Panier.php';
    $idUser=$_SESSION['PROFILE']['id_user'];
    $requetClient=$pdo->prepare("SELECT * FROM client WHERE id_user=?");
    $requetClient->execute([$idUser]);
    $Panier= new Panier($idUser);
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
    <link rel="stylesheet" href="CSS_files/payment.css">
    <script src="JS_files/payment.js"></script>
</head>
<body>
<!--header part start-->
<?php require_once('hpsl.php');?>
<!--header part end-->
<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <div class="row pt-3">
                            <div class="col-2 text-center">
                                <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">1</span>
                            </div>
                            <div class="col-6">
                                <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">ADRESSE DE LIVRAISON</span>
                                <p>Adresse de l'utilisateur</p>
                            </div>
                            <div class="col-4 pl-0">
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" id="button-hidder" style='text-transform: uppercase;'>Changer</button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Startt test -->
                        <?php while($AdresseInfo=$requetClient->fetch()){ ?>
                            <div class="row pl-3 ">
                                <div class="col-6 ">
                                    <input value="<?php echo $AdresseInfo['id_client'];?>" type="radio" class="hide-for-front" name="address" checked>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-transform:uppercase;font-size:15px;"><?php echo $AdresseInfo['cli_nom']." ".$AdresseInfo['cli_prenom'];?></span>
                                </div>
                            <?php $idVille=$AdresseInfo['id_ville'];
                                  $RequeteVille=$pdo->prepare("SELECT * FROM ville WHERE id_ville=?");
                                  $RequeteVille->execute([$idVille]);
                                  $Ville=$RequeteVille->fetch();
                            ?>
                            </div>
                            <div class="row pl-5 pb-3 hide-for-front">
                                <div style="color: #a69f9f;" class="col">
                                    <span style="text-transform: uppercase;"></span><?php echo $AdresseInfo['cli_adresse'].", ".$Ville['ville_nom_reg'].", ".$Ville['ville_nom'];?></span>
                                </div>
                            </div>
                        <?php } ?>

                            <!-- End test --->

                            <div class="row pl-5 hide-for-front">
                                <div class="col">
                                    <p><button style="text-transform: uppercase;padding:2% 5%;background-color: tomato;color:white;border-color:transparent" data-toggle="collapse" data-target="#collapseOne,#collapseTwo" id="button-hidder-1">livraison ici</button></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row pt-3 pb-3">
                                <div class="col-2 text-center">
                                    <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">2</span>
                                </div>
                                <div class="col-10">
                                    <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">RÉCAPITULATIF DE LA COMMANDE</span>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" >
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
                                            <p style="padding-left: 79px;padding-top: 9px;">Qte : <?php echo $produit['qte'];?></p>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-8 pt-5">
                                        <p>Nom de l'article :&nbsp;<?php echo $produit['nom']; ?></p>
                                        <p>Prix:&nbsp;<?php echo($produit['prix']); ?> MAD</p>
                                        <p><a href="#/" style="font-weight:700">RETIRER</a></p>
                                    </div>
                                </div>
                                        <?php $totalPrix = $totalPrix + $produit['qte']*$produit['prix']; ?>
                                        <!-- Produits boucle end -->
                                    <?php } } ?>

                                <div class="row">
                                    <div class="col pr-5 text-right">
                                        <p><button style="text-transform: uppercase;padding:2% 5%;background-color: tomato;color:white;border-color:transparent" data-toggle="collapse" data-target="#collapseTwo,#payment-option">continue</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row pt-3 pb-3">
                                <div class="col-2 text-center">
                                    <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">3</span>
                                </div>
                                <div class="col-10">
                                    <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">OPTIONS DE PAIEMENT</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="payment-option">
                                <div class="row">
                                    <div class="col pl-4" id="debit-hidder">
                                        <p><input type="radio" name="payment-method" data-toggle="collapse" data-target="#debit">&nbsp;&nbsp;&nbsp;Carte de crédit / débit</p>
                                    </div>
                                </div>
                                <div class="collapse" id="debit">
                                    <div class="row">
                                        <div class="col pl-5">
                                            <p><input type="text" placeholder="Enter Card Number" class="pt-2 pb-2 pl-4 card-number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4  col-sm-6  col-12  pl-5">
                                            <p><input type="month" placeholder="mm/yyyy" class="pt-2 pb-2 pl-2 pr-2 date">
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2  col-sm-3  col-12 pl-5 ">
                                            <p><input type="text" placeholder="CVV" class="pt-2 pb-2 pl-4 cvv">
                                        </div>
                                        <div class="col-xl-6 pt-1 pl-5 ">
                                            <p><button style="text-transform: uppercase;padding:1.5% 7%;background-color: tomato;color:white;border-color:transparent" data-toggle="collapse" data-target="#payment-option" >PAYER <?php echo $totalPrix." MAD";?></button></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pl-4" id="net-banking-hidder">
                                        <p><input type="radio" name="payment-method" data-target="#net-banking" data-toggle="collapse">&nbsp;&nbsp;&nbsp;PayPal</p>
                                    </div>
                                </div>
                                <div class="collapse" id="net-banking">
                                    <div class="row pl-4 pr-4">

                                    </div>
                                    <div class="row pt-3 pl-4">
                                        <div class="col-12 pt-4">
                                            <p><button style="text-transform: uppercase;padding:1.5% 7%;background-color: grey;color:white;border-color:transparent;font-weight: 600;" data-toggle="collapse" data-target="#payment-option">PAYER <?php echo $totalPrix." MAD";?></button></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pl-4" id="cash-hidder">
                                        <p><input type="radio" name="payment-method" data-toggle="collapse" data-target="#cash">&nbsp;&nbsp;&nbsp;Paiement à la livraison</p>
                                        <div class="collapse" id="cash">
                                            <p class="pl-3"><button style="text-transform: uppercase;padding:1.5% 7%;background-color: grey;color:white;border-color:transparent;font-weight: 600;"  data-toggle="collapse" data-target="#payment-option">confirmer</button></p>
                                        </div>
                                    </div>
                                </div>
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
                                Prix(<?php echo count($listProduits);?>) :
                            </div>
                            <div class="col text-right">
                                <?php echo $totalPrix." MAD";?>
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
                                <?php echo $totalPrix." MAD";?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--footer-->
<?php require_once('footer.php');?>
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