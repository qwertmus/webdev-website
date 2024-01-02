<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
  <script src="javascript\javascript.js" defer></script>
  <title>Cantor College HomePage</title>
</head>
<body>
  <header>
  <?php
    include("includes/header.php");
    ?>
  </header>

  <main id="bgcChange">
  
  <div class="InfoSectionColumn">
  </div>
  <div class="InfoSectionColumn">
    <div class="InfoSection">
      <img src="images\cantor-gallery.jpg" alt=""><br>
    </div>  
  </div>
  <div class="InfoSectionColumn">
  </div>
    <div class="InfoSection">
      Cantor College was established in 1989 to specialize in Computing and Design.<br>
      At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. <br>
      Cantor College gives you the opportunities that can give you the edge when you enter the world of work, <br>
      through our teaching and our links to some of the world's leading researchers and employers. <br>
      Our students have gone on to successful careers in a wide range of industries across the globe.  <br>
      Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career.<br>
    </div>  



    <div class="InfoSectionColumn">
      <div class="InfoSection">
          <div class="headliner">
            COURSES
          </div>
      </div>
      <div class="InfoSection">
        <img class="zoomIn-img" src="images/IMG_1441.jpeg" alt="" onclick="window.location.href = 'courses.php'">
      </div>
    </div>
    <div class="InfoSectionColumn">
      <div class="InfoSection">
          <div class="headliner">
          FACILITIES
          </div>
      </div>
        <div class="InfoSection">
          <img class="zoomIn-img" src="images\IMG_1005.jpeg" alt ="" onclick="window.location.href = 'facilities.php'">
        </div>
    </div>
    <div class="InfoSectionColumn">
      <div class="InfoSection">
          <div class="headliner">
          LEARNING RESOURCES
          </div>
      </div>
        <div class="InfoSection">
          <img class="zoomIn-img" src="images\DSCF5127.jpg" alt ="" onclick="window.location.href = 'learning_resources.php'">
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