<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Weeb-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
       
          <link href="css/bootstrap.css" rel="stylesheet">
        
          <link href="./css/style.css" rel="stylesheet">
       
          <script src="js/jquery.js"></script>
       
          <script src="js/bootstrap.min.js"></script>
          <style>
              .bg{
              background-size: 1400px;
                background-position:50% 10%;
           height: 400px;
       padding-top: 2px;
         font-size: 20px;
       font-variant: small-caps;
     font-family: Georgia, 'Times New Roman', Times, serif;
     color:black;
              }
              </style>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div class="bg" style="background-image: url(./img/goku.gif);">
                <div class="container">
                    <center>
                        <div >
                            <h1>Biggest Anime Merchandise Store</h1>
                            <h4><p>Flat &nbsp;&#8377;300&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;variety&nbsp;&nbsp;of&nbsp;&nbsp;products</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#Accessories">
                               <div class="thumbnail">
                                    <img src="./img/deathnote.jpg" alt="ACCESSORIES" >
                                        <div class="caption">
                                            <h3>ACCESSORIES</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#Artifacts">
                               <div class="thumbnail">
                                    <img src="./img/artifacts2.jpg" alt="ARTIFACTS" >
                                        <div class="caption">
                                            <h3>ARTIFACTS</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#Figures">
                               <div class="thumbnail">
                                    <img src="./img/figures1.jpg" alt="FIGURES" >
                                        <div class="caption">
                                            <h3>FIGURES</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#Clothing">
                               <div class="thumbnail">
                                    <img src="./img/hoodies3.jpg" alt="CLOTHING" >
                                        <div class="caption">
                                            <h3>CLOTHING</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
