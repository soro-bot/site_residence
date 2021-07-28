<?php
if (isset($_POST['envoyer'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $messages = $_POST['messages'];

  $header = "MIME-Version: 1.0\r\n";
  $header.= 'From:"e-adresse.net"<support@e-adresse.net'."\n";
  $header.= 'Content-Type:text/html; charset="utf-8"'."\n";
  $header.= ' Content-Transfer-Encoding: 8bit';

   $message = '
   <html>
      <body>
        <div align="center">'.
          $messages
          .'
        </div>
      </body>
    </html>
   ';
   mail('gondoitcoder@gmail.com', $option, $message,$header);
   if (mail('gondoitcoder@gmail.com', $option, $message,$header)) {
     $messageOk = 'Votre message a bien été envoyé avec succès';
   }
   else{
    $messageFail = '<font color=red>Erreur! Message  pas envoyé</font>';
   }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>  E-adresse| Nous Contacter</title>
  <link rel="shortcut icon" type="image/png" href="img/logo.jpg">
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



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

   <?php include"menu1.php";?>

    <!-- <div class="hero-slide owl-carousel site-blocks-cover">
        <img src="img/bg-apropos0.gif" style="height: 500px;">
    </div> -->

        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('img/bg-apropos.gif')">
        <div class="container">
          <div class="row align-items-end" style="height: 200px;">

          </div>
        </div>
      </div>



    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php" style="color: black;font-weight: bold;">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current" style="color: orange;font-weight: bold;">Nous Contacter</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
              <form action="" method="post" class="d-flex">
                
                <div class="col-md-6 col-lg-6">
                    <label for="fname">Nom</label>
                    <input type="text" id="fname" name="nom" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Prénom</label>
                    <input type="text" id="lname" name="prenom" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email</label>
                    <input type="text" id="eaddress" name="email" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Téléphone</label>
                    <input type="text" id="tel" name="telephone" class="form-control" required>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="messages" id="message" cols="30" rows="10" class="form-control" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" name="envoyer" value="Nous l'envoyer" class="btn btn-primary btn-lg px-5" style="background:orange">
                </div>
                <div class="col-12">
                  <?= isset($messageOk)? $messageOk : ''; ?>
                  <?= isset($messageFail)? $messageFail : ''; ?>
                </div>
            </div>
          </form>
        </div>
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