<?php
    require_once 'dbconn.php';
    session_start();
    if(isset($_SESSION['PROFILE'])) {
        $profilNom = $_SESSION['PROFILE']['user_nom'];
        $profilPrenom = $_SESSION['PROFILE']['user_prenom'];
        $profilEmail = $_SESSION['PROFILE']['user_email'];
        $profileID=$_SESSION['PROFILE']['id_user'];
    }
    else{
        $profilNom="Inconnu";
        $profilPrenom="Inconnu";
        $profilEmail="Email@inconnu.com";
    }
        ?>
<?php
    $requeteClients=$pdo->prepare("SELECT * FROM client WHERE id_user=?");
    $requeteClients->execute([$profileID]);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>profile: <?php echo $profilPrenom." ".$profilNom ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS_files/ecommerce.css">
    <link rel="stylesheet" href="CSS_files/profile.css">
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
<?php  require_once('hpsl.php');?>
<br/><br/>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $profilNom." ".$profilPrenom  ?></span><span class="text-black-50"><?php echo $profilEmail ?></span><span> </span></div>
        </div>
        <!-- Profile start -->
        <div class="col-md-5 border-right show-one-hundred-page">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="save-profile-settings.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Prénom</label><input name="PRENOM" type="text" class="form-control" placeholder="Prenom" value="<?php echo $profilPrenom ;?>"></div>
                    <div class="col-md-6"><label class="labels">Nom</label><input name="NOM" type="text" class="form-control" value="<?php echo $profilNom ;?>" placeholder="Nom"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input name="EMAIL" type="text" class="form-control" placeholder="Votre E-mail" value="<?php echo $profilEmail; ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </form>
            </div>
        </div>
        <!-- Profile end -->
        <!-- Change mot de passe start -->
        <div class="col-md-5 border-right show-two-hundred-page">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Change le mot de passe</h4>
                </div>
                <form action="changer-mot-de-passe.php" method="post">
                <div class="row mt-3">
                    <div class="col-md-12"><label name="PASSWORD" class="labels">Mot De Passe</label><input type="text" class="form-control" placeholder="entrer votre mot de passe" value=""></div>
                    <div class="col-md-12"><label name="NEWPASSWORD" class="labels">Nouveau Mot De Passe</label><input type="text" class="form-control" placeholder="entrer nouveau mot de passe" value=""></div>
                    <div class="col-md-12"><label class="labels">Repéter N. Mot De Passe</label><input type="text" class="form-control" placeholder="repéter nouveau mot de passe" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">confirmer</button></div>
                </form>
            </div>
        </div>
        <!-- Change mot de passe end -->
        <!-- Ajoute un client start -->
        <div class="col-md-5 border-right show-three-hundred-page">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Ajoute Un Client</h4>
                </div>
                <form action="ajouter-client.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Prenom</label><input name="cli_prenom" type="text" class="form-control" placeholder="prenom de client" value=""></div>
                    <div class="col-md-6"><label class="labels">Nom</label><input name="cli_nom" type="text" class="form-control" value="" placeholder="nom de client"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Numéro De Téléphone</label><input name="cli_tel" type="text" class="form-control" placeholder="entre numéro de téléphone" value=""></div>
                    <div class="col-md-12"><label class="labels">Adresse</label><input name="cli_adresse" type="text" class="form-control" placeholder="entre l'adresse de client" value=""></div>
                    <div class="col-md-12"><label class="labels">Ville</label><input name="ville_nom" type="text" class="form-control" placeholder="entre ville de client" value=""></div>
                    <div class="col-md-12"><label class="labels">Région</label><input name="ville_nom_reg" type="text" class="form-control" placeholder="entre région" value=""></div>
                    <div class="col-md-12"><label class="labels">Code Postal</label><input name="ville_cp" type="text" class="form-control" placeholder="entre code postal" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Ajoute Le Client</button></div>
                </form>
            </div>
        </div>
        <!-- Ajout un client end -->
        <!-- liste des clients start -->
        <div class="col-md-5 border-right show-four-hundred-page">
            <div class="p-3 py-5">
    <?php while($Client=$requeteClients->fetch()){
            $requeteVille=$pdo->prepare("SELECT * FROM ville WHERE id_ville=?");
            $requeteVille->execute([$Client['id_ville']]);
            $Ville=$requeteVille->fetch();
        ?>
                <div class="card back">
                    <div class="yellow"></div>
                    <div class="top dots"></div>
                    <div class="personal-info">
                        <p><?php echo $Client['cli_nom']." ".$Client['cli_prenom']; ?></p>
                        <p><?php echo $Client['cli_adresse']; ?></p>
                        <p><?php echo $Ville['ville_nom_reg'].", ".$Ville['ville_nom']." ".$Ville['ville_cp']; ?></p>
                        <p><?php echo $Client['cli_tel']; ?></p>
                    </div>
                    <div class="bottom dots">

                    </div>
                    <div class="pink">
                        <p><a href="modifierclient.php?id=<?php echo $Client['id_client']; ?>">Modifier</a></p>
                        <p><a href="supprimerclient.php?id=<?php echo $Client['id_client']; ?>">Supprimer</a></p>
                    </div>
                </div>

<?php } ?>
            </div>
        </div>
        <!-- liste des clients end -->
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="col-12 pt-3">
                    <span  class="text-bold"><button class="button-choix" onclick="one_page();">&nbsp; Profile</button></span><br><br>
                    <span  class="text-bold"><button class="button-choix" onclick="two_page();">&nbsp; Changée Mot De Passe</button></span><br><br>
                    <span  class="text-bold"><button class="button-choix" onclick="three_page();" >&nbsp; Ajoute Un Client</button></span><br><br>
                    <span  class="text-bold"><button class="button-choix" onclick="four_page();" >&nbsp; Liste des Clients</button></span><br><br>
                <!--    <span  class="text-bold" name="select-price"><button name="price-cat" class="open-content-five-hundred">&nbsp; plus de 500 MAD</button></span><br> -->
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<script type="text/javascript">
    function one_page(){
        $(".show-one-hundred-page").css("display","block");
        $(".show-two-hundred-page,.show-three-hundred-page,.show-four-hundred-page").css("display","none");
    };
    function two_page(){
        $(".show-two-hundred-page").css("display","block");
        $(".show-one-hundred-page,.show-three-hundred-page,.show-four-hundred-page").css("display","none");
    };
    function three_page(){
        $(".show-three-hundred-page").css("display","block");
        $(".show-one-hundred-page,.show-two-hundred-page,.show-four-hundred-page").css("display","none");
    };
    function four_page(){
        $(".show-four-hundred-page").css("display","block");
        $(".show-one-hundred-page,.show-two-hundred-page,.show-three-hundred-page").css("display","none");
    };

</script>

</body>

</html>
