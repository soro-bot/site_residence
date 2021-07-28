<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Rental+| Residence</title>
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

  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
    h4{color: white;}

    .btn-primary{
      background: orange!important;
      border: 2px dashed black;
    }

    .course-1-item .category{
      background-color: orange;
    }
  </style>

</head>

<?php
  include"connexion-db.php";
?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <?php
      include"menu1.php";
    ?>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('img/bg-residene.gif')">
        <div class="container">
          <div class="row align-items-end">

            <div class="col-lg-4">
              <h2 class="mb-0">Residences meublées</h2>
              <p>Trouver mieux en cherchant moins !</p>
            </div>

            <div class="col-lg-8">

              <form method="post">
                <h2 class="text-center">Retrouver vite ici !</h2>

                <div class="row">

                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4 class="text-center">Recherche</h4>
                      </div>
                      <div class="col-lg-12">
                        <input type="text" name="mot_rechercher" class="form-control" placeholder="Taper votre recherche..." style="background: rgb(8 8 8 / 45%);color: white;">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4 class="text-center">Commune</h4>
                      </div>
                      <div class="col-lg-12">
                        <select class="form-control" name="commune" style="background: rgb(8 8 8 / 45%);color: white;">
                          <option value=""></option>
                          <option value="Toutes">Toutes</option>
                          <option value="Yopougon">Yopougon</option>
                          <option value="Abobo">Abobo</option>
                          <option value="Cocody">Cocody</option>
                          <option value="Anyama">Anyama</option>
                          <option value="Treichville">Treichville</option>
                          <option value="Marcory">Marcory</option>
                          <option value="Koumassi">Koumassi</option>
                          <option value="Plateaux">Plateaux</option>
                          <option value="Bingerville">Bingerville</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4 class="text-center">Type</h4>
                      </div>
                      <div class="col-lg-12">
                        <select class="form-control" name="type" style="background: rgb(8 8 8 / 45%);color: white;">
                          <option value=""></option>
                          <option value="Tout">Tout</option>
                          <option value="Studio">Studio</option>
                          <option value="Duplex">Duplex</option>
                          <option value="Villa">Villa</option>
                          <option value="2pièces">2pièces</option>
                          <option value="3pièces">3pièces</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>

                <br>
                <div class="col-lg-10">
                    <button type="submit" name="btn_recherche" class="btn btn-primary btn-block" style="background: orange;border:2px dashed black;">Rechercher</button>
                </div>

            </form>
              
            </div>

          </div>
        </div>
      </div> 
    
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php" style="color: black;font-weight: bold;">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current" style="color: orange;font-weight: bold;">Residence</span>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">

        <?php

          try
          {
             function msg($req)
            {
              if ($req->fetch(PDO::FETCH_OBJ)==false)
              {
                echo "<div class='col-lg-12 col-md-12 mb-4 text-center' style='color:orange'><h2>??? Aucune résidence trouvé ???</h2></div>";
              }
            }
            
            if (isset($_POST['btn_recherche']))
            {
              $mc=$_POST['mot_rechercher'];
              $commune=$_POST["commune"];
              $type=$_POST["type"];
              if ($mc=="" && $commune=="" && $type=="")
              {
                $req_affiche=$connect->query("SELECT * FROM residence WHERE id=0");

                if ($req_affiche->fetch(PDO::FETCH_OBJ)==false)
                {
                  echo "<div class='col-lg-12 col-md-12 mb-4 text-center' style='color:red'><h2>??? Veuillez entrer une recherche ???</h2></div>";
                }


              }

              elseif ($mc!="" && $commune=="" && $type=="")
              {
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$mc%' ORDER BY rand()");
                msg($req_affiche);
              }

              elseif ($mc=="" && $commune!="" && $type=="")
              {
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$commune%' ORDER BY rand()");
                msg($req_affiche);
              }

              elseif ($mc=="" && $commune=="" && $type!="")
              {
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$type%' ORDER BY rand()");
                msg($req_affiche);
              }

              elseif ($mc!="" && $commune!="" && $type=="")
              {
                $concat=$mc." ".$commune;
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$concat%' ORDER BY rand()");
              }

              elseif ($mc!="" && $commune=="" && $type!="")
              {
                $concat=$mc." ".$type;
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$concat%' ORDER BY rand()");
              }

              elseif ($mc=="" && $commune!="" && $type!="")
              {
                $concat=$commune.$type;
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$concat%' ORDER BY rand() LIMIT 12");
              }

              else
              {
                $concat=$mc." ".$commune." ".$type;
                $req_affiche=$connect->query("SELECT * FROM residence WHERE details like '%$concat%' ORDER BY rand() LIMIT 12");
              }

            }

            else
            {
              $req_affiche=$connect->query("SELECT * FROM residence ORDER BY rand() LIMIT 12");
            }

            //if ($req_affiche->fetch(PDO::FETCH_OBJ)==false)
            //{
              //echo "<div class='col-lg-12 col-md-12 mb-4 text-center' style='color:red'><h2>??? Aucune résidence trouvé ???</h2></div>";
            //}
          
            while ($reponse=$req_affiche->fetch(PDO::FETCH_OBJ))
            {
              echo"

                <div class='col-lg-4 col-md-6 mb-4'>
                  <div class='course-1-item'>
                      <figure class='thumnail'>

                        <a href='detail.php?detail=$reponse->code'>
                        <img src='img-residence/$reponse->code/1.jpg' alt='Residence Rental+' class='img-fluid'>
                        </a>
                        <div class='category' align='center'><h3>$reponse->prix FCFA</h3></div>  
                      </figure>
                      <div class='course-1-content pb-4'>
                      <h2>$reponse->type ($reponse->code)</h2>
                      <p><a href='detail.php?detail=$reponse->code' class='btn btn-primary rounded-0 px-4'>En savoir plus</a></p>
                      </div>
                        
                  </div>
                </div>
            ";
            }

            //if ($req_affiche->fetch(PDO::FETCH_OBJ)==false)
            //{
              //echo "<div class='mb-4 text-center' style='color:red'><h2>??? Aucune résidence trouvé ???</h2></div>";
            //}

          }
          catch(Exception $e)
          {
            die("ERREUR ??? : ".$e->getMessage());
          }
          ?>

        </div>
      </div>

  <!--Debut section Nos offres de desnières minutes-->
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5" style="color: blue">
              <span style="border-bottom: 4px solid orange;"><marquee>OFFRES DE DERNIERES MINUTES</marquee></span>
            </h2>
          </div>
        </div>

        <div class="row">
           <?php
          try
          {
          
            $req_affiche=$connect->query("SELECT * FROM residence ORDER BY rand() LIMIT 3");
            while ($reponse=$req_affiche->fetch(PDO::FETCH_OBJ))
            {?>

          <?php echo"<a href=detail.php?detail=$reponse->code>";?>
          <div class="col-lg-4 col-md-6 mb-4">
            
            <div class="course-1-item" <?php echo"style='background: url(img-residence/$reponse->code/1.jpg);background-size: cover;height: 250px;border-radius: 30px;'"?>>
                <figure class="thumnail">
                   
                    <div class="category" align="center" style="background: #ffa500ba!important;width: 60%;border-radius: 60px;">
                      <h3><?=$reponse->prix?> FCFA/Nuits</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                <p style="margin-bottom: 0;margin-top: 30%;">
                  <?php echo"<a href=detail.php?detail=$reponse->code class='btn btn-primary rounded-0 px-4'>";?>En avant<?php echo"</a>"?>
                </p>
                </div>
            </div>
          </div>
          <?php echo"</a>"?>
          <?php
        }
        }

        catch(Exception $e)
          {
            die("ERREUR ??? : ".$e->getMessage());
          }
          ?>

        </div>

    </div>
  <!--Fin section Nos offres de desnières minutes-->


    </div>
      


  <?php include"footer.php";?>
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