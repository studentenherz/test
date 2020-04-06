<?php
  include_once 'includes/dbh.inc.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <title>TEST</title>
    <script data-ad-client="ca-pub-5495614570964064" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>
  <body>
    <div class="header">
        <img src="images/0.png" class="logo">
        <h3>Lorem Ipsum, HTML5 and CSS3</h3>
    </div>

    <div class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>

    <!-- <div id="info">
      <form id="infoForm" class="" action="message.html" method="post" onSubmit="return validateTextbox()">
        <p>
          <div class="row">
            <label for="name">Name: </label>
            <input type="text" id="name" name="" value=""> <br> <br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="" value=""> <br> <br>
          </div>

          <div class="row">
            <label for="phone">Phone: </label>
            <input id="phone" type="tel" name="" value=""> <br> <br>

            <label for="email">Email: </label>
            <input id="email" type="email" name="" value="">
          </div>

          <input type="submit" name="" value="Submit">

        </p>
      </form>

    </div> -->

    <form id="enter_info" action="index.html" method="get" onsubmit="addText()">
      <input type="text" id="entry" name="" value="">
      <input type="submit" name="" value="Send">
    </form>

    <div class="sideright">
      <h2>Some thing</h2>

      <p>Lorem 1</p>
      <p>Lorem 2</p>
      <p>Lorem 3</p>

    </div>

    <div class="sideright">
      <h2>Some thing</h2>

      <p>Lorem 1</p>
      <p>Lorem 2</p>
      <p>Lorem 3</p>

    </div>

    <div class="">
      <img src="images/girl.jpg" class="imagesidebar">
    </div>

    <?php
      /*$sql = "select * from users;";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        while($row = mysqli_fetch_assoc($result)){
          echo $row['user_usermane']."<br>";
        }
      }*/

      echo "hakjhsda dhakljsdlhaksjdh adshklasha sjdha ha"
    ?>

    <div class="main">
      <div id="exp">
      <h1>Qué es el Lorem Ipsum</h1>
      <p>
        Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final.
        Aunque no posee actualmente fuentes para justificar sus hipótesis, el profesor de filología clásica Richard McClintock asegura que su uso se remonta a los impresores de comienzos del siglo XVI.1​ Su uso en algunos editores de texto muy conocidos en la actualidad ha dado al texto lorem ipsum nueva popularidad.

        (de <a href="https://es.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a>)
      </p>
    </div>

      <h1>Lorem Ipsum</h1>
      <p id="place">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <h1>Lorem Ipsum</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>



    <div class="main">
      <h1>Lorem Ipsum</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <h1>Lorem Ipsum</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div class="footer">
      <ul>
        <li><a href="#">About MaxWell</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">Contact Me</a></li>
        <li><a href="#"> I &#10084 Pato </a> </li>
      </ul>

      &copy 2020 MaxWell. All lefts reserved.
    </div>

  <script type="text/javascript" src="js/script.js"></script>
 </body>
</html>
