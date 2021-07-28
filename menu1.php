<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="menu1-css-js/menu1.css">
    <script src="menu1-css-js/menu1-jquery.js"></script>
    <script src="menu1-css-js/menu1-fontawesome.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<body>
    <nav>
      <div class="logo" style="padding-left: 40px;">
        <img src="img/logo_noir.jpg" style="height: 90px;width: 90px;border-radius: 50px;">
      </div>

      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>

      <input type="checkbox" id="btn">

      <ul style="margin-right:290px;">

        <li>
          <a href="index.php">Accueil</a>
        </li>

        <li>
          <a href="residence.php">Residences</a>
        </li>

        <li>
          <a href="a-propos.php">A propos</a>
        </li>

        <li>
          <a href="contact.php">Contact</a>
        </li>

        <li>
          <a href="https://forms.gle/fAsQSJXhPU7eVpuD6" style="color:white;border-radius: 5px;box-shadow: 0 0 5px black,0 0 10px black;background: orange;">Hôte</a>
        </li>
      </ul>
    </nav>

    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

</body>
</html>