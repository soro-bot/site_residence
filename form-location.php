<!doctype html>
<html lang="en">
  <head>
    <title>E-Adresse| Formulaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

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


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      #logo-eadresse{
        border:5px solid orange;
        border-radius:80px;
        height:150px;
        width:150px;
        background-size: cover;
        margin: auto;

        margin-bottom: 30px;
      }

      
    </style>
  </head>

<?php
  include"connexion-db.php";
?>
  <body>

    <section class="site-section" style="background: gray;">
      <div class="container" style="background: white;">
        <div class="row" style="margin-left:11%; margin-right:11%;">
          <div class="col-md-12">
            <h1 class="mb-5" style="text-align: center;">Formulaire de location</h1>
            <?php
          try

          {

            $code=$_GET['detail'];  

            $req_affiche=$connect->query("SELECT * FROM residence WHERE code='$code'");

            while ($reponse=$req_affiche->fetch(PDO::FETCH_OBJ))

            {
              echo "
              <div class='row'>
              <div id='logo-eadresse' style='background-image: url(img-residence/$reponse->code/1.jpg);' class='col-md-2'></div>
              <div id='logo-eadresse' style='background-image: url(img-residence/$reponse->code/2.jpg); class='col-md-2'></div>
              </div>
              ";

           ?>
            
          <form action="envoi.php" method="post" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label for="nom">Nom <b style="color: red;">*</b></label>
                      <input type="text" name="nom" class="form-control" placeholder="Votre nom..." required="">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="name">Prénom <b style="color: red;">*</b></label>
                      <input type="text" name="prenom" class="form-control" placeholder="Votre prénom..." required="">
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label for="phone">Téléphone <b style="color: red;">*</b></label>
                      <input type="text" name="phone" class="form-control" placeholder="Votre numéro..." required="">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="email">Email <b style="color: red;">*</b></label>
                      <input type="email" name="email" class="form-control" placeholder="Votre email..." required="">
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-12 form-group">
                      <label for="code-location">Code de location <b style="color: red;">*</b></label>
                      <input type="text" name="code-location" class="form-control" placeholder="Le Code de la location..." <?php echo"value='$reponse->code'"?>required="">
                    </div>

                  </div>
                  <?php
                  }
                }
                  catch(Exception $e)
                  {
                    die("ERREUR ??? : ".$e->getMessage());
                  }
                  ?>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="date-debut">Date debut de Location <b style="color: red;">*</b></label>
                      <input type="date" name="date-debut" class="form-control" required="">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="date-fin">Date fin de location <b style="color: red;">*</b></label>
                      <input type="date" name="date-fin" class="form-control" required="">
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label for="sejour">Type de Sejour <b style="color: red;">*</b></label>
                      <select name="type-sejour" class="form-control">
                        <option value="">Choisir...</option>
                        <option value="solo">Solo</option>
                        <option value="couple">Couple</option>
                        <option value="famille">Famille</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="origine">Origine</label><br>
                      <input type="radio" name="origine" value="Côte d'ivoire"> CÔTE D'IVOIRE &nbsp; 
                      <input type="radio" name="origine" value="ETRANGER"> ETRANGER
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label for="photo">Photo CNI/PASSPORT <b style="color: red;">*</b></label>
                      <input type="file" name="mon_fichier" required="">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="service-plus">Service en plus</label><br>
                      <input type="checkbox" name="service-plus[]" value="Escorte"> Escorte &nbsp; 
                      <input type="checkbox" name="service-plus[]" value="Décoration"> Décoration &nbsp;
                      <input type="checkbox" name="service-plus[]" value="Boissons"> Boissons &nbsp; 
                      <input type="checkbox" name="service-plus[]" value="Restauration"> Restauration
                    </div>

                  </div>



                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Message</label>
                      <textarea name="message" class="form-control " cols="20" rows="8" placeholder="Votre message..."></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="ENVOYER" class="btn" style="background: orange;" name="envoi">
                    </div>
                  </div>

                </form>
              </div>
              
        </div>
      </div>
    </section>
    <!-- END section -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>