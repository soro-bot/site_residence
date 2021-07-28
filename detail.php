<!DOCTYPE html>

<html lang="en">



<head>

  <title>Rental+| Details</title>

  <link rel="shortcut icon" type="image/png" href="img/logo_noir.jpg">

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/jquery-ui.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/jquery.fancybox.min.css">



  <link rel="stylesheet" href="css/bootstrap-datepicker.css">



  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="menu1-css-js/menu1-jquery.js"></script>



  <link rel="stylesheet" href="css/style.css">



  <style type="text/css">

    .section-title-underline span{

      border-bottom: 4px solid orange;

    }



    .btn-primary{

      background: orange!important;

      border: 2px dashed black;

    }



	.imgBox{

		border:3px solid rgba(0,0,0,.2);

		overflow: hidden;

	}



	.imgBox img{

		width: 100%;

		height: 100%;

	}



	.thumb{

		margin-top: 10px;

	}



	@media screen and (max-width:576px) {

		div.thumb div{

			width: 138px;

		}

	}



	@media screen and (max-width:552px) {

		div.thumb div{

			width: 120px;

		}

	}



	@media screen and (max-width:480px) {

		div.thumb div{

			width: 110px;

		}

	}



	@media screen and (max-width:440px) {

		div.thumb div{

			width: 100px;

		}

	}



  </style>



  	<script type="text/javascript">

		$(document).ready(function(){

			$('.thumb img').mouseover(function(e){

				e.preventDefault();

				$('.imgBox img').attr("src", $(this).attr("src"));

			})

		})

	</script>





</head>

<?php
  include"connexion-db.php";
?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap">



    <?php include"menu1.php";?>



        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('img/bg-residene.gif')">

        <div class="container">

          <div class="row align-items-end" style="height: 200px;">

          </div>

        </div>

      </div>

    <div class="custom-breadcrumns border-bottom">

      <div class="container">

        <a href="index.php" style="color: black;font-weight: bold;">Accueil</a>

        <span class="mx-3 icon-keyboard_arrow_right"></span>

        <span class="current" style="color: orange;font-weight: bold;">Residences</span>

        <span class="mx-3 icon-keyboard_arrow_right"></span>

        <span class="current" style="color: orange;font-weight: bold;">Details</span>

      </div>

    </div> 



    <div class="site-section">

        <div class="container">

            <div class="row">

        <?php
          try

          {

          	$code=$_GET['detail'];  

            $req_affiche=$connect->query("SELECT * FROM residence WHERE code='$code'");

            while ($reponse=$req_affiche->fetch(PDO::FETCH_OBJ))

            {

           ?>

              

              

                <div class="col-lg-6 col-md-6">



                	<div class="imgBox">

						<?php echo"<img src='img-residence/$reponse->code/1.jpg'>"?>

					</div>



						<div class="thumb row">

							<div class="col-md-3 col-sm-3 col-xs-3">

								<?php echo"<img src='img-residence/$reponse->code/2.jpg' height='100px' width='100px'>"?>

							</div>



							<div class="col-md-3 col-sm-3 col-xs-3">

								<?php echo"<img src='img-residence/$reponse->code/3.jpg' height='100px' width='100px'>"?>

							</div>



							<div class="col-md-3 col-sm-3 col-xs-3">

								<?php echo"<img src='img-residence/$reponse->code/4.jpg' height='100px' width='100px'>"?>

							</div>



							<div class="col-md-3 col-sm-3 col-xs-3">

								<?php echo"<img src='img-residence/$reponse->code/1.jpg' height='100px' width='100px'>"?>

							</div>

						</div>

                    

                </div>



                <div class="col-lg-6 col-md-6 ml-auto align-self-center">

                        <h2 class="section-title-underline">

                            <span>Détails</span>

                        </h2>

                       

                        <p style="font-size: 16px;">
                          <b style="color: orange!important; font-weight: bold;">TYPE:</b> <?=$reponse->type?><br>
                          <b style="color: orange!important; font-weight: bold;">COMMODITES:</b> <?=$reponse->commodite?><br>
                          <b style="color: orange!important; font-weight: bold;">LOCALISATION:</b> <?=$reponse->localisation?><br>
                          <b style="color: orange!important; font-weight: bold;">PRIX:</b> <?=$reponse->prix?><br>
                        	<b style="color: orange!important; font-weight: bold;">REGLEMENT INTERIEUR:</b> <?=$reponse->reglement?><br>
                          <b style="color: orange!important; font-weight: bold;">CONDITION D'ANNULATION:</b> <a href="cgu.php" style="color: blue">voir nos conditions générales d'utilisations </a><br>
                        	<br>

                        </p>

                        <p>
                          <?php 
                          echo"
                          <a href='form-location.php?detail=$reponse->code' class='btn btn-primary rounded-0 btn-lg px-5'>Je loue !</a>";
                          ?>
                        </p>

               </div>

               <?php



                }

          }



          catch(Exception $e)

          {

            die("ERREUR ??? : ".$e->getMessage());

          }?>



            </div>

        </div>

    </div>



    <?php include"footer.php";?>

  </div>

  <!-- .site-wrap -->



  <!-- loader -->

  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>



  <script src="js/jquery-3.3.1.min.js"></script>

  <script src="js/jquery-migrate-3.0.1.min.js"></script>

  <script src="js/jquery-ui.js"></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/owl.carousel.min.js"></script>

  <script src="js/jquery.stellar.min.js"></script>

  <script src="js/jquery.countdown.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>

  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/jquery.sticky.js"></script>

  <script src="js/jquery.mb.YTPlayer.min.js"></script>



  <script src="js/main.js"></script>



</body>



</html>