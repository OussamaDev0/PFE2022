<?php require_once 'securityProfile.php'; ?>
<?php
    if(isset($_GET['id'])){
        require_once 'dbconn.php';
        session_start();
        $profilNom = $_SESSION['PROFILE']['user_nom'];
        $profilPrenom = $_SESSION['PROFILE']['user_prenom'];
        $profilEmail = $_SESSION['PROFILE']['user_email'];
        $profileID=$_SESSION['PROFILE']['id_user'];
        $Clientid=$_GET['id'];
        $requet=$pdo->prepare("SELECT * FROM client WHERE id_client=?");
        $requet->execute([$Clientid]);
        $Client=$requet->fetch();
        $reqVille=$pdo->prepare("SELECT * FROM ville WHERE id_ville=?");
        $reqVille->execute([$Client['id_ville']]);
        $Ville=$reqVille->fetch();
    }
    else{
        header("location:profile.php");
    }
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

        <!-- Ajoute un client start -->
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Modifier Un Client</h4>
                </div>
                <form action="update-client.php" method="post">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Prenom</label><input name="cli_prenom" type="text" class="form-control" placeholder="prenom de client" value="<?php echo $Client['cli_prenom']; ?>"></div>
                        <div class="col-md-6"><label class="labels">Nom</label><input name="cli_nom" type="text" class="form-control" value="<?php echo $Client['cli_nom']; ?>" placeholder="nom de client"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Numéro De Téléphone</label><input name="cli_tel" type="text" class="form-control" placeholder="entre numéro de téléphone" value="<?php echo $Client['cli_tel']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Adresse</label><input name="cli_adresse" type="text" class="form-control" placeholder="entre l'adresse de client" value="<?php echo $Client['cli_adresse']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Ville</label><input name="ville_nom" type="text" class="form-control" placeholder="entre ville de client" value="<?php echo $Ville['ville_nom']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Région</label><input name="ville_nom_reg" type="text" class="form-control" placeholder="entre région" value="<?php echo $Ville['ville_nom_reg']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Code Postal</label><input name="ville_cp" type="text" class="form-control" placeholder="entre code postal" value="<?php echo $Ville['ville_cp']; ?>"></div>
                        <input name="id_ville" value="<?php echo $Ville['id_ville']; ?>" type="hidden" >
                        <input name="id_client" value="<?php echo $Client['id_client']; ?>" type="hidden" >
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Modifier le Client</button></div>
                </form>
            </div>
        </div>
        <!-- Ajout un client end -->
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="col-12 pt-3">
                    <span  class="text-bold"><button class="button-choix" onclick="one_page();">&nbsp; Profile</button></span><br><br>
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

