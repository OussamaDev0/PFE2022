<?php
$panier=$_SESSION['panier'];
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
<?php require_once('hpsl.php');?>
<!--header part end-->
<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row pt-3 pb-3">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <span style="font-size:20px;font-weight:700;color:grey;color:black">Mon panier</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  text-right">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Livrer à &nbsp;<input type="text" placeholder="adresse">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body">
                        <div class="row pb-3 ">
                            <?php
                            $total=0;
                            $totalp=0;
                            for ($i=0;$i<count($panier);$i++){
                                $total++;
                                $totalp=$totalp+$panier[$i]['prod_prix'];

                             ?>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                                <img src="<?php echo ($panier[$i]['prod_img'])?>" height="200px">
                                <div class="text-left">
                                    <select name="Qunatity" class="custom-select mt-2 first">
                                        <option selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-12 pt-5">
                                <p>Nom de l'article :&nbsp;<?php echo ($panier[$i]['prod_nom'])?></p>
                                <p>Prix:&nbsp;<?php echo ($panier[$i]['prod_prix'])?></p>
                                <p><a href="suppDupanier.php?index=<?= $i?>" style="font-weight:700">RETIRER</a></p>
                            </div>
                            <?php } ?>
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
                                Prix(<?php echo ($total)?>) :
                            </div>
                            <div class="col text-right">
                                <?php echo ($totalp)?>
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
                                <?php echo ($totalp)?>
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