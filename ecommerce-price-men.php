<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS_files/ecommerce-price-men.css">
    <script src="JS_files/ecommerce-price-men.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="Plugins/slick-master/slick/slick-theme1.css"/>
    <script type="text/javascript" src="Plugins/slick-master/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css"/>
    <style>
        a{color:black}
        a:hover{color:black}
    </style>
</head>
<body>

<!--header part start-->
<?php require_once('hps.php');?>
<!--header part end-->
<!--middle-->
<div class="container-fluid mt-5 pt-5">
    <div class="row">

        <!--left side col start-->
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="container large-left-sider">
                <div class="row">
                    <div class="col-12 px-0 pt-5 pb-4 text-center pl-0">
                        <input class="search-box" type="text" placeholder="Search.." ><span><button class="search-button"><i class="fa fa-search" id="search-icon"></i></button></span>
                    </div>
                </div>
                <div class="row pl-3">
                    <div class="col-12 pt-3">
                        <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">price</p>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-content-one-hundred"> &nbsp;&#8377;100-200</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-content-two-hundred"> &nbsp;&#8377;200-300</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-content-three-hundred"> &nbsp;&#8377;300-400</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-content-four-hundred"> &nbsp;&#8377;400-500</span><br>
                        <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-content-five-hundred"> &nbsp;&#8377;500-600</span><br>
                    </div>
                    <div class=" col-12 pt-5">
                        <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">colour</p>
                        <span class="text-bold"><input type="radio" name="color" class="open-content-three-hundred"> &nbsp;blue</span><br>
                        <span class="text-bold"><input type="radio" name="color" class="open-content-five-hundred"> &nbsp;green</span><br>
                        <span class="text-bold"><input type="radio" name="color" class="open-content-two-hundred"> &nbsp;yellow</span><br>
                        <span class="text-bold"><input type="radio" name="color" class="open-content-four-hundred"> &nbsp;black</span><br>
                    </div>
                    <div class=" col-12 pb-5 pt-5">
                        <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">brand</p>
                        <span  class="text-bold"><input type="radio" name="brand" class="open-content-two-hundred"> &nbsp;LOUIS VUITTON</span><br>
                        <span  class="text-bold"><input type="radio" name="brand" class="open-content-three-hundred"> &nbsp;GUCCI</span><br>
                        <span  class="text-bold"><input type="radio" name="brand" class="open-content-four-hundred"> &nbsp; HERMES</span><br>
                        <span  class="text-bold"><input type="radio" name="brand" class="open-content-five-hundred"> &nbsp;PRADA</span><br>
                    </div>
                </div>
            </div>
        </div>
        <!--left side col end-->

        <!--right side col start-->

        <!--front look-->
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 pl-0" style="border-left:1px solid grey">
            <div class="container large-right-sider">
                <div class="row pt-5 hide-front-page">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;303.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/men.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">pink saree<br>&#8377;232.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-tablate">
                        <a href="for-each-image.php"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;303.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 text-center hide-containt-small-device">
                        <a href="for-each-image.php"><img src="Images/men.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">pink saree<br>&#8377;232.00</span></a>
                    </div>
                </div>

                <!--second-->
                <div class="row pt-5 hide-front-page">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/men-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">accessories dress<br>&#8377;340.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/blazers.jpg" class="img-men" data-aos="fade-up" style="height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">black shirt<br>&#8377;210.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-tablate">
                        <a href="for-each-image.php"><img src="Images/men-1.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">accessories dress<br>&#8377;340.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 text-center hide-containt-small-device">
                        <a href="for-each-image.php"><img src="Images/blazers.jpg" class="img-men" data-aos="fade-up" style="height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">black shirt<br>&#8377;210.00</span></a>
                    </div>
                </div>

                <!--third-->
                <div class="row pt-5 hide-front-page">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">toddler dress<br>&#8377;150.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">flower print shirt<br>&#8377;335.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-tablate">
                        <a href="for-each-image.php"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">toddler dress<br>&#8377;150.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 text-center hide-containt-small-device">
                        <a href="for-each-image.php"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">flower print shirt<br>&#8377;335.00</span></a>
                    </div>
                </div>

                <!--fourth-->
                <div class="row pt-5 pb-5 hide-front-page">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;303.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                        <a href="for-each-image.php"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">toddler dress<br>&#8377;150.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-tablate">
                        <a href="for-each-image.php"><img src="Images/blazers.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">black shirt<br>&#8377;340.00</span></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 text-center hide-containt-small-device">
                        <a href="for-each-image.php"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
                        <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">flower print shirt<br>&#8377;335.00</span></a>
                    </div>
                </div>
                <!--font look end-->

                <!--100-200 page start-->
                <div class="container show-two-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/mens-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/kids-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;170.00</span></a>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/kids-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/mens-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/mens-dress-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;126.00</span></a>
                        </div>
                    </div>
                    <!--third row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/mens-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/boys-dress-1.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/boys-dress-2.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;187.00</span></a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/mens-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/kids-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/ladies-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                    </div>

                </div>

                <!--100-200 page end-->

                <!--200-300 page start-->

                <div class="container show-three-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/two-hundred-girls.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;170.00</span></a>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/two-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;126.00</span></a>
                        </div>
                    </div>
                    <!--third row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-girls-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="#/"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/two-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;187.00</span></a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-ladies-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/two-hundred-men-4.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/two-hundred-girls-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                    </div>

                </div>

                <!--200-300 page end-->

                <!--300-400 page start-->

                <div class="container show-four-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/three-hundred-girls.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;170.00</span></a>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;126.00</span></a>
                        </div>
                    </div>
                    <!--third row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-boys-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-4.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;187.00</span></a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-girls-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-ladies-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-5.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/three-hundred-men-6.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                    </div>
                </div>

                <!--300-400 page end-->

                <!--400-500 page start-->

                <div class="container show-five-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-boys.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-1.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/four-hundred-girls.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;170.00</span></a>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-boys-1.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-ladies.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-2.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/four-hundred-boys-2.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;126.00</span></a>
                        </div>
                    </div>
                    <!--third row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-girls-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-3.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-4.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/four-hundred-ladies-1.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;187.00</span></a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-5.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-ladies-2.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/four-hundred-men-6.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/four-hundred-boys-3.jpeg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                    </div>

                </div>

                <!--400-500 page end-->

                <!--500-600 page start-->

                <div class="container show-six-hundred-page">
                    <!--first row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/five-hundred-girls.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;170.00</span></a>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/five-hundred-girls-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;126.00</span></a>
                        </div>
                    </div>
                    <!--third row-->
                    <div class="row pt-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-girls-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-4.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/five-hundred-boys-2.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;187.00</span></a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-girls-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-5.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center">
                            <a href="for-each-image.php"><img src="Images/five-hundred-girls-4.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 text-center hide-containt-small-device">
                            <a href="for-each-image.php"><img src="Images/five-hundred-men-6.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
                            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
                        </div>
                    </div>
                </div>
                <!--pagination-->
                <div class="row next-page-header pt-5">
                    <div class="col next-page" style="z-index: 0;">
                        <ul class="pagination" style="display: flex;justify-content: center;">
                            <li class="page-item prev"><a class="page-link" href="#/"  style="color:black">Previous</a></li>
                            <li class="page-item open-content-one-hundred" id="one-hundred"><a class="page-link" href="#/"  style="color:black">1</a></li>
                            <li class="page-item open-content-two-hundred active"><a class="page-link" href="#/"  style="color:black">2</a></li>
                            <li class="page-item open-content-three-hundred"><a class="page-link" href="#/"  style="color:black">3</a></li>
                            <li class="page-item open-content-four-hundred"><a class="page-link" href="#/"  style="color:black">4</a></li>
                            <li class="page-item open-content-five-hundred"><a class="page-link" href="#/"  style="color:black">5</a></li>
                            <li class="page-item next"><a class="page-link" href="#/"  style="color:black">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!--pagination-->
                <!--500-600 page end-->
            </div>
        </div>
        <!--right side col end-->
    </div>
</div>
<!--middle large device end-->
<!--middle part of small device start-->
<!--comment-->
<!--filter-->
<div class="container-fluid hide-me-for-font">
    <div class="row first-next-page pt-4 mt-3">
        <div class="col-12 text-right pr-5 filter-button">
            <div class="dropdown">
                <button class="filter-toggler"><i class="fa fa-filter" aria-hidden="true"></i>filter</button>
                <!-- The Modal -->
                <div class="container mt-1" id="small-left-sider" style="position:absolute;z-index:5;border:0.1px solid;background-color:rgb(255, 255, 255);width:50%;transform: translateX(100%);">
                    <div class="row">
                        <div class="col-12 text-left pt-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">price</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-one-hundred"> &nbsp;&#8377;100-200</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-two-hundred"> &nbsp;&#8377;200-300</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-small-content-three-hundred"> &nbsp;&#8377;300-400</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-small-content-four-hundred"> &nbsp;&#8377;400-500</span><br>
                            <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-small-content-five-hundred"> &nbsp;&#8377;500-600</span><br>
                        </div>
                        <div class="col-12  text-left pt-3 pb-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">colour</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-three-hundred"> &nbsp;blue</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-five-hundred"> &nbsp;green</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-two-hundred"> &nbsp;yellow</span><br>
                            <span class="text-bold"><input type="radio" name="color" class="open-small-content-four-hundred"> &nbsp;black</span><br>
                        </div>
                        <div class="col-12  text-left pb-3">
                            <span style="font-size:18px;text-transform: uppercase;font-weight: 600;" class="pl-4">brand</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-two-hundred"> &nbsp;LOUIS VUITTON</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-three-hundred"> &nbsp;GUCCI</span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-four-hundred">  <span class="ml-1">HERMES</span></span><br>
                            <span  class="text-bold"><input type="radio" name="brand" class="open-small-content-five-hundred"> &nbsp;PRADA</span><br>
                        </div>
                    </div>
                </div>
                <!--The Modal-->
            </div>
        </div>
    </div>
</div>
<!--filter-->
<!--middle part-->
<div class="container mt-5 pt-2 for-small-devices">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="for-each-image.php"><img src="Images/mens-dress.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;150.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="for-each-image.php"><img src="Images/boys-kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;120.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="for-each-image.php"><img src="Images/ladies-dress.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;180.00</span></a>
        </div>
    </div>
    <!--second row-->
    <div class="row pt-5">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="for-each-image.php"><img src="Images/girl.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;100.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="for-each-image.php"><img src="Images/men.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="for-each-image.php"><img src="Images/kids.jpg" class="img-men" data-aos="fade-up" style="border-radius:20px;height:180px"></a>
            <a href="for-each-image.php"><span class="image-lable" data-aos="fade-up">tradesional dress<br>&#8377;120.00</span></a>
        </div>
    </div>
    <!--third row-->
    <div class="row pt-5">
        <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
            <a href="for-each-image.php"><img src="Images/men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
            <a href="for-each-image.php"><img src="Images/men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
            <a href="for-each-image.php"><img src="Images/boys-kids-1.jpg" class="img-men" style="border-radius:20px;height:180px"></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
        </div>
    </div>
</div>
<!--comment-->

<!--100-200 page start-->
<!--header- of all the right side container--->
<div class="hide-me-for-font">
    <!--header- of all the right side container--->
    <div class="container show-two-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/mens-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/ladies-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/kids-dress-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/kids-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/mens-dress-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/ladies-dress-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/ladies-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/mens-dress-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/boys-dress-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
            </div>
        </div>
    </div>

    <!--100-200 page end-->

    <!--200-300 page start-->

    <div class="container show-three-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/two-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/two-hundred.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/two-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/two-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/two-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/two-hundred-girls-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/two-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/two-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
            </div>
        </div>
    </div>

    <!--200-300 page end-->

    <!--300-400 page start-->

    <div class="container show-four-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/three-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/three-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/three-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/three-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/three-hundred-ladies-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/three-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/three-hundred-ladies-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/three-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span</a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/three-hundred-boys-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
            </div>
        </div>
    </div>

    <!--300-400 page end-->

    <!--400-500 page start-->

    <div class="container show-five-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/four-hundred-men.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/four-hundred-boys.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/four-hundred-men-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/four-hundred-boys-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/four-hundred-ladies.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/four-hundred-men-2.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/four-hundred-girls-1.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/four-hundred-men-3.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/four-hundred-men-4.jpeg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
            </div>
        </div>
    </div>

    <!--400-500 page end-->

    <!--500-600 page start-->

    <div class="container show-six-hundred-small-page">
        <!--first row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/five-hundred-men.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;130.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/five-hundred-boys.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;120.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/five-hundred-men-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;.150.00</span></a>
            </div>
        </div>
        <!--second row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/five-hundred-men-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/five-hundred-boys-1.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;100.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/five-hundred-ladies.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;135.00</span></a>
            </div>
        </div>
        <!--third row-->
        <div class="row pt-5">
            <div class="col-md-4 col-sm-6 col-12 text-center pb-5">
                <a href="for-each-image.php"><img src="Images/five-hundred-girls-2.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;155.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center">
                <a href="for-each-image.php"><img src="Images/five-hundred-men-3.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;176.00</span></a>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center hide-content">
                <a href="for-each-image.php"><img src="Images/five-hundred-men-4.jpg" class="img-men" style="border-radius:20px;height:180px"><br></a>
                <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;133.00</span></a>
            </div>
        </div>
    </div>
    <!--pagination-->
    <div class="row next-page-header pt-5">
        <div class="col next-page" style="z-index: 0;">
            <ul class="pagination" style="display: flex;justify-content: center;">
                <li class="page-item prev"><a class="page-link" href="#/"  style="color:black">Previous</a></li>
                <li class="page-item open-small-content-one-hundred "><a class="page-link" href="#/"  style="color:black">1</a></li>
                <li class="page-item open-small-content-five-hundred active "><a class="page-link" href="#/"  style="color:black">2</a></li>
                <li class="page-item open-small-content-three-hundred"><a class="page-link" href="#/"  style="color:black">3</a></li>
                <li class="page-item open-small-content-four-hundred "><a class="page-link" href="#/"  style="color:black">4</a></li>
                <li class="page-item open-small-content-five-hundred "><a class="page-link" href="#/"  style="color:black">5</a></li>
                <li class="page-item next"><a class="page-link" href="#/"  style="color:black">Next</a></li>
            </ul>
        </div>
    </div>
    <!--pagination-->
    <!--header- of all the right side container--->
</div>

<!--500-600 page end-->

<!--small device of middle part end-->
<!--recommend-->
<div class="container" style="height:80vh">
    <div class="row">
        <div class="col-sm-12 text-center pt-5">
            <a href="for-each-image.php"><span style="text-transform: uppercase;font-weight: 700;font-size:30px;">recommend</span></a>
        </div>
    </div>
    <div class="row single-slider pt-5">
        <div class="col text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/boys-dress-1.jpeg" height="250px" style="background-color:black"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col  text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-2.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col  text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-1.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-4.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col  text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-2.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/mens-dress-3.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
        <div class="col  text-center">
            <a href="for-each-image.php"><span style="display:flex;justify-content: center;"><img src="Images/ladies-dress-3.jpg" height="250px"></span></a>
            <a href="for-each-image.php"><span class="image-lable">tradesional dress<br>&#8377;180.00</span></a>
        </div>
    </div>
</div>
<!--recommend end-->
<!--footer-->
<?php require_once('footer.php');?>
<!--footer-->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>