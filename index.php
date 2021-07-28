<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Rental+| Accueil</title>
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
    .btn-primary{
      background: orange!important;
      border: 2px dashed black;
    }

    #img-service3
    {
      height: 304px;
      width: 100%;
    }
    @media screen and (max-width: 1203px)
    {
      #img-service3
      {
      height: 255px;
      }
    }

    @media screen and (max-width: 992px)
    {
      #img-service3
      {
      height: 185px;
      }
    }

    .img-tourism
    {
      height: 197px;
      width: 100%;
    }
  </style>
  <?php
  include"connexion-db.php";
?>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <?php
      include"menu1.php";
    ?>

        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('img/bg-accueil.gif');height:250px; ">
        <div class="container">
          <div class="row align-items-end">

            <div class="col-lg-4">
              <h2 class="mb-0">Rental+</h2>
              <p>Service de location de residence</p>
            </div>

          </div>
        </div>
      </div> 
    
    <!--<div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('img/bg1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1 style="font-size: 80px;">les meilleurs appartements!</h1>
              <h1 style="font-size: 50px">A moindre coût</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('img/img-tourisme3.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1 style="font-size: 80px;">Des offres touristiques</h1>
              <h1 style="font-size: 50px">à vous couper le souffle</h1>
            </div>
          </div>
        </div>
      </div>
     
      <div class="intro-section" style="background-image: url('img/bg3.jpg'); background-size: cover;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1 style="font-size: 80px;">Des lieux de détentes</h1>
              <h1 style="font-size: 50px;">adapter pour votre bien être</h1>
            </div>
          </div>
        </div>
      </div>

    </div>-->
    

    <div></div>
<!--Debut section ce qu'on fait pour vous ?-->
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span style="border-bottom: 4px solid orange;">CE QU'ON FAIS POUR VOUS?</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary" style="background: orange!important;">
                <span class="icon-search text-black"></span>
              </div>
              <div class="feature-1-content">
                <h2>Rechercher et trouver</h2>
                <p>La résidence meublée disponible dans la zone de votre choix</p>
                <p><a href="service-1.html" class="btn btn-primary px-4 rounded-0">Lire Plus</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary" style="background: orange!important;">
                <span class="icon-eye text-black"></span>
              </div>
              <div class="feature-1-content">
                <h2>Visiter virtuellement</h2>
                <p>la résidence meublée disponible en mode 360°</p>
                <p><a href="service-2.html" class="btn btn-primary px-4 rounded-0">Lire Plus</a></p>
              </div>
            </div> 
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary" style="background: orange!important;">
                <span class="icon-map-marker text-black"></span>
              </div>
              <div class="feature-1-content">
                <h2>Localisation</h2>
                <p>Localiser la résidence meublée de votre choix avec MAP</p>
                <p>
                  <a href="forprogram.html" class="btn btn-primary px-4 rounded-0">Lire Plus
                  </a>
                </p>
              </div>
            </div> 
          </div>

           <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary" style="background: orange!important;">
                <span class="icon-check text-black"></span>
              </div>
              <div class="feature-1-content">
                <h2>Finaliser</h2>
                <p>valider votre reservation / achat en toute sécurité</p>
                <p>
                  <a href="forprogram.html" class="btn btn-primary px-4 rounded-0">Lire Plus
                  </a>
                </p>
              </div>
            </div> 
          </div>

        </div>
      </div>
    </div>
<!--Fin section ce qu'on fait pour vous ?-->

    <div></div>
<!--Debut section Nos services-->
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span style="border-bottom: 4px solid orange;">NOS SERVICES</span>
            </h2>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                        <a href="service-1.html"><img src="img/service1.gif" alt="Image de appartement" class="img-fluid"></a>
                <div class="category" align="center" style="background: #707b74b0;"><h3>Location  de résidences</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                <h2>Offrez vous une residence</h2>
                <p><a href="service-1.html" class="btn btn-primary rounded-0 px-4">Je loue maintenant</a></p>
                </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                        <a href="service-1.html"><img src="img/service3.gif" alt="Image de Tourisme" class="img-fluid" id="img-service3"></a>
                <div class="category" align="center" style="background: #707b74b0;"><h3>Tourisme</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                <h2>Offrez vous une sortie</h2>
                <p><a href="service-1.html" class="btn btn-primary rounded-0 px-4">Je reserve maintenant</a></p>
                </div>
            </div>
          </div>

        </div>
    </div>
<!--Debut section Nos services-->


    <div></div>
<!--Debut section Nos destinations-->
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span style="border-bottom: 4px solid orange;">NOS OFFRES TOURISTIQUES</span>
            </h2>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <a href="service-1.html">
                      <img src="img/img-tourisme1.jpg" alt="Image de appartement" class="img-fluid img-tourism">
                    </a>
                    <div class="category" align="center" style="background: #707b74b0;">
                      <h3>Tourisme de détente</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                <p>
                  <a href="service-1.html" class="btn btn-primary rounded-0 px-4">En savoir plus</a>
                </p>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <a href="service-1.html">
                      <img src="img/img-tourisme2.jpg" alt="Image de appartement" class="img-fluid img-tourism">
                    </a>
                    <div class="category" align="center" style="background: #707b74b0;">
                      <h3>Ecotourisme</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                <p>
                  <a href="service-1.html" class="btn btn-primary rounded-0 px-4">En savoir plus</a>
                </p>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <a href="service-1.html">
                      <img src="img/img-tourisme3.jpg" alt="Image de appartement" class="img-fluid img-tourism">
                    </a>
                    <div class="category" align="center" style="background: #707b74b0;">
                      <h3>Tourisme de divertissement</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                <p>
                  <a href="service-1.html" class="btn btn-primary rounded-0 px-4">En savoir plus</a>
                </p>
                </div>
            </div>
          </div>

        </div>

    </div>
<!--Fin section Nos destinations-->

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

<div></div>
<!--Debut section Nos atouts-->
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span style="border-bottom: 4px solid orange;">POURQUOI CHOISIR<br>Rental+</span>
            </h2>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <div class="category" align="center" style="background: rgb(0 0 0 / 0.9);border-radius: 50px;">
                      <h3>Residences</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                
                  <p style="color: orange;font-weight: bold;">
                    Plus de 300 résidences meublées partout en Cote d'Ivoire
                  </p>
                
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <div class="category" align="center" style="background: rgb(0 0 0 / 0.9);border-radius: 50px;">
                      <h3>Disponibilité</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                
                  <p style="color: orange;font-weight: bold;">
                    Nous sommes disponible 7 Jours /7<br>24H /24
                  </p>
                
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="course-1-item">
                <figure class="thumnail">
                    <div class="category" align="center" style="background: rgb(0 0 0 / 0.9);border-radius: 50px;">
                      <h3>Services en option</h3>
                    </div>  
                </figure>
                <div class="course-1-content pb-4">
                
                  <p style="color: orange;font-weight: bold;">
                    Chauffeur<br>
                    Restauration<br>
                    Décoration
                  </p>
                
                </div>
            </div>
          </div>

        </div>

    </div>
<!--Fin section Nos atouts-->

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