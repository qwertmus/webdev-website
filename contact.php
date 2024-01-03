<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
  <script src="javascript\javascript.js" defer></script>
  <title>Contact Us</title>
</head>
<body>
  <header>
  <?php
    include("includes/header.php");
    ?>
  </header>

  <main>
  <div class="InfoSectionColumn">
            <div class="InfoSection">
              <h1 class="title">Adress:</h1>
              Cantor College<br>
              Main Street<br>
              Sheffield<br>
              SC4 2BB<br>
              Tel:(01321) 2340 235<br>
              Fax: (01321) 2340 236<br>
              Email: info@cantorcollege.ac.uk<br>
            </div>
            <div class="InfoSection">
            <form id="message-form" action="#" method="post">
            <label for="username">Name:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br>
            <label for="message">Message:</label><br>
            <textarea type="text" id="message" name="message" rows="4" required></textarea><br>
            <input type="submit" value="Post Message">
            </div>
        </form>
  </div>
  <div class="InfoSectionColumn">
    <img id="zoomIntoImg" src="images\872SHUSpaceCitymap.jpg" alt="" width=100% onclick="toggleZoom()">
    <div class="InfoSection">
      Press to zoom in and out
    </div>
  </div>

  </main>

  <footer>
  <?php
    include("includes/footer.php");
    ?>
  </footer>
</body>
</html>