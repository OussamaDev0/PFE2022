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
<?php
    $categorieProduit=$produit['id_cat'];
    $psCategorie=$pdo->prepare("SELECT * FROM produit ORDER BY RAND() LIMIT 12");//WHERE id_cat=$categorieProduit
    $psCategorie->execute();
    $psRecommande=$pdo->prepare("SELECT * FROM produit ORDER BY RAND() LIMIT 7 ");
    $psRecommande->execute();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
    <script src="JS_files/CommentaireScript.js"></script>
    <style>
        a:hover,a{color:black}

        .progress-label-left {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right {
            float: right;
            margin-right: 0.3em;
            line-height: 1em;
        }
        .star-light {
            color: #e9ecef;
        }

        .taille {
            display: flex;
            align-items: flex-start;
            margin-bottom: 5px;
        }

        .taille-label {
            margin-right: 15px;
            line-height: 32px;
        }

        .taille-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;

            border-radius: 50%;
            width: 16px;
            height: 16px;

            border: 2px solid #999;
            transition: 0.2s all linear;
            margin-right: 5px;

            position: relative;
            top: 4px;
        }

        .taille-input:checked {
            border: 6px solid black;
        }

        .descriptionprod{
            float:left;
            overflow-y: auto;
            height: 127px;
            width: inherit;
            overflow-x:hidden ;
            scrollbar-gutter: stable;
        }
        .descriptionprod::-webkit-scrollbar {
            width: 7px;
        }
        .descriptionprod::-webkit-scrollbar-track {
            background-color: darkgrey;
            border-radius: 100px;
        }
        .descriptionprod::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 100px;
        }
    </style>
</head>
<body>
<!--pop up-->
<div class="container-fluid mt-5 pop-container" style="position:absolute;z-index:3;background-color: transparent;">
    <div class="container bg-light mt-2 mb-2 pt-2" style="border-radius:20px;">
        <div class="row pt-5">
            <div class="col-6 text-left pt-2 table-header">
                <span style="font-size:25px;">Size Chart</span>
            </div>
            <div class="col-6 text-right pr-5">
                <span style="font-size:35px;" class="close-pop"><a href="#/" style="color:black">&times;</a></span>
            </div>
        </div>
        <div class="row pt-3 table-header" style="font-size:20px;">
            <div class="col-12">
                Veirdo Men's Shirts size chart
            </div>
            <div class="col-12">
                shirts
            </div>
        </div>
        <div class="row pt-3 pb-5 table">
            <div class="col">
                <table class="table table-bordered table-hover table-striped hide-for-tablate">
                    <thead>
                    <tr>
                        <th>Label size</th>
                        <th>India</th>
                        <th>Chest(in inches)</th>
                        <th>Waist(in inches)</th>
                        <th>Length(in inches)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>S</td>
                        <td>Small</td>
                        <td>38</td>
                        <td>37.5</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>Medium</td>
                        <td>40</td>
                        <td>39.5</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Large</td>
                        <td>42</td>
                        <td>41.5</td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <td>XL</td>
                        <td>X-Large</td>
                        <td>44</td>
                        <td>43.5</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>XXL</td>
                        <td>XX-Large</td>
                        <td>46</td>
                        <td>45.5</td>
                        <td>30.5</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-hover table-striped show-for-tablate">
                    <thead>
                    <tr>
                        <th>Label size</th>
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
                        <td>Small</td>
                        <td>Medium</td>
                        <td>Large</td>
                        <td>X-Large</td>
                        <td>XXL-large</td>
                    </tr>
                    <tr>
                        <td>Chest(in inches)</td>
                        <td>38</td>
                        <td>40</td>
                        <td>42</td>
                        <td>44</td>
                        <td>46</td>
                    </tr>
                    <tr>
                        <td>Waist(in inches)</td>
                        <td>37.5</td>
                        <td>39.5</td>
                        <td>41.5</td>
                        <td>43.5</td>
                        <td>45.5</td>
                    </tr>
                    <tr>
                        <td>Length(in inches)</td>
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
                        <th>Label size</th>
                        <th>Chest(in inches)</th>
                        <th>Waist(in inches)</th>
                        <th>Length(in inches)</th>
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
                <table class="table table-hover table-striped show-for-extra-small-devices">
                    <thead>
                    <tr>
                        <th>Label size</th>
                        <th>Chest(in inches)</th>
                        <th>Waist(in inches)</th>
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
                <table class="table table-hover table-striped show-for-extra-small-devices">
                    <thead>
                    <tr>
                        <th>Label size</th>
                        <th>Length(in inches)</th>
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
                <p class="pt-3">Measuring T Shirt Size</p>
                <span>Not sure about your t shirt size? Follow these simple steps to figure it out:</span><br>
                <span style="font-weight: 600;">Shoulder</span> - Measure the shoulder at the back, from edge to edge with arms relaxed on both sides<br>
                <span style="font-weight:600;">Chest</span> - Measure around the body under the arms at the fullest part of the chest with your arms relaxed at both sides.<br>
                <span style="font-weight:600;">Sleeve</span> - Measure from the shoulder seam through the outer arm to the cuff/hem<br>
                <span style="font-weight:600;">Neck</span> - Measured horizontally across the neck Length - Measure from the highest point of the shoulder seam to the bottom hem of the garment's<br>
            </div>
            <div class="col-12 text-center pt-5 pb-5">
                <img src="Images/shirt-detail.jpg" height="300px" width="50%">
            </div>
        </div>
    </div>
</div>
<!--pop up-->
<!--header part start-->
<?php require_once('hps.php');?>
<!--header part end-->
<!--middle part start-->
<div class="container mt-5 pt-4 hide-for-tablate">
    <div class="row pt-5">
        <div class="col-1">
            <div class="row pt-3 pb-2">
                <?php $nb_photos=1;
                if($produit['prod_img3']!="") $nb_photos++;
                if($produit['prod_img4']!="") $nb_photos++;

                ?>
                <?php if($produit['prod_img']!=""){ ?>
                <div class="col-xl-12 text-center">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="95px" class="zooming"></a>
                </div>
                <?php }?>
                <?php if($produit['prod_img1']!=""){ ?>
                <div class="col-xl-12 mt-3">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img1']); ?>" height="50px" width="100px" class="zooming"></a>
                </div>
                <!--image +3....-->
                <?php } if($produit['prod_img2']!=""){ ?>
                <div class="col-xl-12 mt-3 front-show">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img2']); ?>" height="55px" width="75px" class="zooming-2"></a>
                    <a href="#/"><div style="font-size:25px;z-index:1;color:black;position: absolute;padding-left:20%;" class="pt-1 front-show">+<?php echo $nb_photos;?></div></a>
                </div>
                <!--image +3....-->
                <?php } if($produit['prod_img2']!=""){ ?>
                <div class="col-xl-12 mt-3 front-hide">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img2']); ?>" height="50px" width="100px" class="zooming-5"></a>
                </div>
                <?php }?>
                <?php if($produit['prod_img3']!=""){ ?>
                <div class="col-xl-12 mt-3 front-hide">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img3']); ?>" height="50px" width="100px" class="zooming-3"></a>
                </div>
                <?php }?>
                <?php if($produit['prod_img4']!=""){ ?>
                <div class="col-xl-12 mt-3 front-hide">
                    <a href="#/"><img src="productimages/<?php echo($produit['prod_img4']); ?>" height="50px" width="100px" class="zooming-4"></a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php if($produit['prod_img']!=""){ ?>
        <div class="col-5 text-center zooming-open-head wm-zoom-container my-zoom-1">
            <div class="wm-zoom-box">
                <img src="productimages/<?php echo($produit['prod_img']); ?>" height="400px" width="405px" class="wm-zoom-default-img" alt="alternative text" data-hight-src="for-each-image-1.jpg">
            </div>
        </div>
        <?php }?>
        <?php if($produit['prod_img1']!=""){ ?>
        <!--hidden--> <div class="col-5 text-center zooming-open-1 wm-zoom-container my-zoom-1">
            <div class="wm-zoom-box">
                <img src="productimages/<?php echo($produit['prod_img1']); ?>" height="400px" width="405px" class="wm-zoom-default-img" alt="alternative text" data-hight-src="for-each-image-2.jpg">
            </div>
        </div>
        <?php }?>
        <?php if($produit['prod_img2']!=""){ ?>
        <!--hidden--> <div class="col-5 text-center zooming-open-2">
            <img src="productimages/<?php echo($produit['prod_img2']); ?>" height="400px" width="95%">
        </div>
        <?php }?>
        <?php if($produit['prod_img3']!=""){ ?>
        <!--hidden--> <div class="col-5 text-center zooming-open-3">
            <img src="productimages/<?php echo($produit['prod_img3']); ?>" height="400px" width="95%">
        </div>
        <?php }?>
        <?php if($produit['prod_img4']!=""){ ?>
        <!--hidden--> <div class="col-5 text-center zooming-open-4">
            <img src="productimages/<?php echo($produit['prod_img4']); ?>" height="400px" width="95%">
        </div>
        <?php } ?>
        <div class="col-5">
            <div class="row">
                <div class="col-12 pt-3">
                    <p style="font-size:25px;font-weight:600"><?php echo($produit['prod_nom']) ?></p>
                </div>
                <div class="col-12 pl-5">
                    <p style="font-weight:600;font-size:20px;"> Price:<span style="color:red"> <?php echo($produit['prod_prix']) ?> MAD</span></p>
                </div>
                <div class="col-12 pl-5">
                    <p style="font-weight:600;font-size:20px;">size:
                        <?php if($categorieProduit!=7){ ?>
                            <span class="taille">
                        <input class="taille-input" type="radio" id="contactChoice1"
                               name="size" value="S" checked>
                        <label class="taille-label" for="contactChoice1">S</label>

                        <input class="taille-input" type="radio" id="contactChoice2"
                               name="size" value="M">
                        <label class="taille-label" for="contactChoice2">M</label>

                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="L">
                        <label class="taille-label" for="contactChoice3">L</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="XL">
                        <label class="taille-label" for="contactChoice3">XL</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="XXL">
                        <label class="taille-label" for="contactChoice3">XXL</label>
                    </span>
                        <?php }else{ ?>

                            <span class="taille">
                        <input class="taille-input" type="radio" id="contactChoice1"
                               name="size" value="39" checked>
                        <label class="taille-label" for="contactChoice1">39</label>

                        <input class="taille-input" type="radio" id="contactChoice2"
                               name="size" value="40">
                        <label class="taille-label" for="contactChoice2">40</label>

                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="41">
                        <label class="taille-label" for="contactChoice3">41</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="42">
                        <label class="taille-label" for="contactChoice3">42</label>
                    </span>
                        <?php } ?>

                </div>
                <div class="col-12">
                    <p style="font-weight:600;font-size:20px;"> Description :</p><br>
                    <div class="descriptionprod">
                    <p><?php echo($produit['prod_description']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-6">
            <span style="visibility: hidden;;">hello user</span>
        </div>
        <div class="col-6 pl-5 text-white">
            <a href="login-form.php" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:rgb(255, 174, 0);border-radius:10px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="ml-2">add to card</span></span></a>
            <a href="login-form.php" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:orangered;border-radius:10px;" class="ml-3"><i class="fa fa-bolt" aria-hidden="true"></i><span class="ml-2"> buy now</span></span></a>
        </div>
    </div>
    <div class="rows pb-5">
        <div class="col">
            <span style="visibility:hidden;">hello user</span>
        </div>
    </div>
</div>
<div class="container show-for-small-devices mt-5 pt-1">
    <div class="row pt-5 mt-5">
        <div class="col-2 col-xs-3">
            <div class="row pt-3 pb-2">
                <div class="col-xl-12 text-center">
                    <a href="#/"><img src="productimages/<?php echo $produit['prod_img'];?>" class="zooming"></a>
                </div>
                <div class="col-xl-12 mt-3">
                    <a href="#/"><img src="productimages/<?php echo $produit['prod_img1'];?>" class="zooming-1"></a>
                </div>
                <div class="col-xl-12 mt-3 front-show">
                    <a href="#/"><img src="productimages/<?php echo $produit['prod_img2'];?>" height="55px" width="75%" class="zooming-2"></a>
                    <a href="#/"><div class="pt-2 front-show block-img-for-tablate">+<?php echo $nb_photos;?></div></a>
                </div>
                <div class="col-xl-12 mt-3 front-hide">
                    <a href="#/"><img src="productimages/<?php echo $produit['prod_img2'];?>" class="zooming-5"></a>
                </div>
                <?php if($produit['prod_img3']!=""){ ?>
                    <div class="col-xl-12 mt-3 front-hide">
                        <a href="#/"><img src="productimages/<?php echo $produit['prod_img3'];?>" class="zooming-3"></a>
                    </div>
                <?php }
                if($produit['prod_img4']!=""){
                    ?>
                    <div class="col-xl-12 mt-3 front-hide">
                        <a href="#/"><img src="productimages/<?php echo $produit['prod_img4'];?>" class="zooming-4"></a>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="col-10 col-xs-9 text-center zooming-open-head ">
            <img src="productimages/<?php echo $produit['prod_img'];?>" height="400px" width="95%">
        </div>
        <!--hidden--> <div class="col-10 text-center zooming-open-1">
            <img src="productimages/<?php echo $produit['prod_img1'];?>" height="400px" width="95%">
        </div>
        <!--hidden-->   <div class="col-10 text-center zooming-open-2">
            <img src="productimages/<?php echo $produit['prod_img2'];?>" height="400px" width="95%">
        </div>
        <?php if($produit['prod_img3']!=""){ ?>
            <!--hidden--> <div class="col-10 text-center zooming-open-3">
                <img src="productimages/<?php echo $produit['prod_img3'];?>" height="400px" width="95%">
            </div>
        <?php }
        if($produit['prod_img4']!=""){
            ?>
            <!--hidden--> <div class="col-10 text-center zooming-open-4">
                <img src="productimages/<?php echo $produit['prod_img4'];?>" height="400px" width="95%">
            </div>
        <?php } ?>
    </div>
        <div class="row mt-5 pt-5">
            <div class="col-12 pt-3">
                <p style="font-size:25px;font-weight:600"><?php echo $produit['prod_nom'];?></p>
            </div>
            <div class="col-12 pl-5">
                <p style="font-weight:600;font-size:20px;"> Prix:<span style="color:red"><?php echo $produit['prod_prix'];?> MAD</span></p>
            </div>
            <div class="col-12 pl-5">
                <p style="font-weight:600;font-size:20px;">size: </p><?php if($categorieProduit!=7){ ?>
                    <span class="taille">
                        <input class="taille-input" type="radio" id="contactChoice1"
                               name="size" value="S" checked>
                        <label class="taille-label" for="contactChoice1">S</label>

                        <input class="taille-input" type="radio" id="contactChoice2"
                               name="size" value="M">
                        <label class="taille-label" for="contactChoice2">M</label>

                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="L">
                        <label class="taille-label" for="contactChoice3">L</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="XL">
                        <label class="taille-label" for="contactChoice3">XL</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="XXL">
                        <label class="taille-label" for="contactChoice3">XXL</label>
                    </span>
                <?php }else{ ?>

                    <span class="taille">
                        <input class="taille-input" type="radio" id="contactChoice1"
                               name="size" value="39" checked>
                        <label class="taille-label" for="contactChoice1">39</label>

                        <input class="taille-input" type="radio" id="contactChoice2"
                               name="size" value="40">
                        <label class="taille-label" for="contactChoice2">40</label>

                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="41">
                        <label class="taille-label" for="contactChoice3">41</label>
                        <input class="taille-input" type="radio" id="contactChoice3"
                               name="size" value="42">
                        <label class="taille-label" for="contactChoice3">42</label>
                    </span>
                <?php } ?>
            </div>
            <div class="col-12">
                <p style="font-weight:600;font-size:20px;">Description: </p>
                <div class="descriptionprod">
                    <p><?php echo($produit['prod_description']) ?></p></div>
            </div>
        </div><br/>
        <div class="row">
            <div class="col">
                <a href="login-form.php" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:rgb(255, 174, 0);border-radius:10px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="ml-2">add to card</span></span></a>
                <a href="login-form.php" style="color:white"><span style="width:30%;border:1px solid;padding:2% 5%;text-transform: uppercase;font-size:15px;font-weight:600;background-color:orangered;border-radius:10px;" class="ml-3"><i class="fa fa-bolt" aria-hidden="true"></i><span class="ml-2"> buy now</span></span></a>

            </div>
        </div>
        <div class="container-fluid mt-5">
            <span style="visibility: hidden;">hi user</span>
        </div>
</div>

<!--middle part end-->

<!---Commentaire et Review Start-->

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center pb-4 pt-4">
            <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">Les Commentaires</span>
        </div>
    </div>
    <?php
    $average_ratingQ=$pdo->prepare("SELECT AVG(user_rating) AS average FROM product_review WHERE id_produit=?");
    $average_ratingQ->execute([$code]);
    $average_rating=$average_ratingQ->fetch();
    ?>

    <?php
    $TotalReviewQ=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE id_produit=?");
    $TotalReviewQ->execute([$code]);
    $TotalReview =$TotalReviewQ->fetch();
    ?>
    <!-- Table statique Rating start-->

    <div class="card">
        <div class="card-header">Commentaires Des Clients</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <?php  ?>
                    <h1 class="text-warning mt-4 mb-4">
                        <b><span id="average_rating"><?php echo round($average_rating['average'],1) ; ?></span> / 5</b>
                    </h1>
                    <div class="mb-3">
                        <?php for($star=1;$star<=5;$star++){
                            if($star<=$average_rating['average']){
                                ?>
                                <i class="fas fa-star text-warning mr-1 main_star"></i>
                            <?php }
                            else { ?>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                            <?php }
                        } ?>
                    </div>

                    <h3><span id="total_review"><?php echo $TotalReview['review'];?></span> Commentaires</h3>
                </div>
                <div class="col-sm-4">
                    <p>
                        <?php
                        $TotalReview5Q=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE(id_produit=? AND user_rating=5)");
                        $TotalReview5Q->execute([$code]);
                        $TotalReview5 =$TotalReview5Q->fetch();
                        ?>
                    <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                    <div class="progress-label-right">(<span id="total_five_star_review"><?php echo $TotalReview5['review'];?></span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                    </div>
                    </p>
                    <p>
                        <?php
                        $TotalReview4Q=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE(id_produit=? AND user_rating=4)");
                        $TotalReview4Q->execute([$code]);
                        $TotalReview4 =$TotalReview4Q->fetch();
                        ?>
                    <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                    <div class="progress-label-right">(<span id="total_four_star_review"><?php echo $TotalReview4['review'];?></span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                    </div>
                    </p>
                    <p>
                        <?php
                        $TotalReview3Q=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE(id_produit=? AND user_rating=3)");
                        $TotalReview3Q->execute([$code]);
                        $TotalReview3 =$TotalReview3Q->fetch();
                        ?>
                    <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                    <div class="progress-label-right">(<span id="total_three_star_review"><?php echo $TotalReview3['review'];?></span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                    </div>
                    </p>
                    <p>
                        <?php
                        $TotalReview2Q=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE(id_produit=? AND user_rating=2)");
                        $TotalReview2Q->execute([$code]);
                        $TotalReview2 =$TotalReview2Q->fetch();
                        ?>
                    <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                    <div class="progress-label-right">(<span id="total_two_star_review"><?php echo $TotalReview2['review'];?></span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                    </div>
                    </p>
                    <p>
                        <?php
                        $TotalReview1Q=$pdo->prepare("SELECT count(*) AS review FROM product_review WHERE(id_produit=? AND user_rating=1)");
                        $TotalReview1Q->execute([$code]);
                        $TotalReview1 =$TotalReview1Q->fetch();
                        ?>
                    <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                    <div class="progress-label-right">(<span id="total_one_star_review"><?php echo $TotalReview2['review'];?></span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                    </div>
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <h3 class="mt-4 mb-3">Connectez vous maintenant</h3>
                    <button class="btn btn-primary"><a href="login-form.php">Connectez</a></button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showCommentform(){
            var x = document.getElementById("commentaire-form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <!-- Table statique Rating End-->

    <!--Commentaire forms start-->
    <form method="post" action="submit_rating.php">
        <div class="commentaire" id="commentaire-form">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Poster le commentaire</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mt-2 mb-4">
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                        </h4>
                        <div class="form-group">
                            <textarea name="user_review" id="user_review" class="form-control" placeholder="tapez votre commentaire ici"></textarea>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary" id="save_review">Poster</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <!--Commentaire forms End-->



    <!--Les commentaires start-->

    <?php
    $CommentRequet=$pdo->prepare("SELECT * FROM product_review WHERE id_produit=? order by review_id desc");
    $CommentRequet->execute([$code]);
    while($Commentaire = $CommentRequet->fetch()){
        $useridComm=$Commentaire['id_user'];
        $userInfoReq=$pdo->prepare("SELECT * FROM utilisateur WHERE id_user=?");
        $userInfoReq->execute([$useridComm]);
        $userInfo=$userInfoReq->fetch();
        $userCompNom=$userInfo['user_prenom']." ".$userInfo['user_nom'];
        ?>


        <div class="row mb-3 mt-5">
            <div class="col-sm-1">
                <div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center"><?php echo $userCompNom[0];?></h3></div>
            </div>
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-header"><b><?php echo $userCompNom;?></b></div>
                    <div class="card-body">
                        <?php
                        $rate=$Commentaire['user_rating'];
                        for($star=1;$star<=5;$star++){
                            if($star<=$rate){
                                ?>
                                <i class="fas fa-star text-warning mr-1"></i>
                            <?php }
                            else {
                                ?>
                                <i class="fas fa-star star-light mr-1"></i>
                            <?php }
                        } ?>
                        <br />
                        <?php echo $Commentaire['user_review'] ?>
                    </div>
                    <div class="card-footer text-right">On <?php echo date('r', $Commentaire['date_time']); ?></div>
                </div>
            </div>
        </div>


    <?php } ?>
    <!--Les commentaires end-->
</div>

<!-- Commentaire et Review End -->


<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 text-center pb-4 pt-4">
            <span style="text-transform: uppercase;font-weight: 700;font-size:30px;" data-aos="zoom-in">similar</span>
        </div>
    </div>
    <div class="carousel slide pt-1" data-ride="carousel">
        <div class="carousel-inner">
            <!--first slider-->
            <div class="carousel-item text-center">
                <div class="row">
                    <?php $similar=$psCategorie->fetch(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--second-slider-->
            <div class="carousel-item text-center">
                <div class="row">
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" data-aos="fade-up" style="border-radius:20px;"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--third slider-->
            <div class="carousel-item active text-center">
                <div class="row">
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="container" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 col-md-6 hide-kids-dress text-center">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 col-lg-4 hide-lady-1">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
                        </div>
                    </div>
                    <?php $similar=$psCategorie->fetch();?>
                    <div class="col-xl-3 hide-lady">
                        <div class="container pl-0" height="250px" width="250px" style="overflow:hidden">
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><img src="productimages/<?php echo($similar['prod_img']);?>" class="img-men" style="border-radius:20px;" data-aos="fade-up"><br></a>
                            <a href="for-each-image.php?productID=<?php echo($similar['id_produit']);?>"><span class="image-lable" data-aos="fade-up"><?php echo($similar['prod_nom']);?><br><?php echo($similar['prod_prix']);?> MAD</span></a>
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
            <a href="for-each-image.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;">recommend</span></a>
        </div>
    </div>
    <div class="row single-slider pt-5">
        <?php while($recommande=$psRecommande->fetch()) { ?>
        <div class="col text-center">
            <a href="for-each-image.php?productID=<?php echo($recommande['id_produit']);?>"><span style="display:flex;justify-content: center;"><img src="productimages/<?php echo($recommande['prod_img']);?>" height="250px" style="background-color:black"></span></a>
            <a href="for-each-image.php?productID=<?php echo($recommande['id_produit']);?>"><span class="image-lable"><?php echo($recommande['prod_nom']);?><br><?php echo($recommande['prod_prix']);?> MAD</span></a>
        </div>
        <?php } ?>
    </div>
</div>
<!--recommend end-->
<!--footer-->
<?php require_once('footer.php');?>
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