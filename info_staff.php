<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
  <script src="javascript\javascript.js" defer></script>
  <title>Staff information</title>
</head>
<body>
  <header>
  <?php
    include("includes/header.php");
    ?>
  </header>

  <main>
  <div class="container_staff">
        <div class="InfoSectionColumn">
            <div class="InfoSection">
            <img src="images/IMG_1808.jpeg" alt="Building side in the sun" width=100% height=100%>
            <img src="images\20230829_111351.jpg" alt="Building side in the sun" width=100% height=100%>
            </div> 
        </div>  
    
        <div class="InfoSectionColumn">
            <div class="InfoSection">
            <h1 class="headliner">News</h1><br>
            Cantor College recently hosted the Software Engineering student of the year awards. Shortlisted candidates from around the country attended the one day event.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Academic Registry</h1><br>
            For academic regulations, assessment, awards, student records and course validation.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Catering Services</h1><br>
            Contact the Catering Services regarding on and off-site catering.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Financial Services</h1><br>
            The financial team based on the 2nd Floor are responsible for all areas of student finance as 
            well as College budgeting.<br>
            </div>

            <div class="InfoSection"> 
            <h1 class="headliner">Information Systems Services</h1><br>
            The ISS team delivers the College’s computing facilities including all hardware and software. 
            They also run the staff helpdesk.<br>
            </div>


        </div>
    
    <div class="InfoSectionColumn">
        <div class="InfoSection">
        <img src="images\cantor-gallery.jpg" alt="cantor outside" width=100% height=100%>
        <div class="InfoSection">
            <h1 class="headliner">Marketing Services</h1><br>
            The Marketing Team will help promote events and new courses. They will help with press 
            release preparation.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Personnel Services</h1><br>
            All staff pay and conditions enquiries should be directed to the Personnel Services team on 
            the 3rd floor.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Facilities</h1><br>
            The facilities are responsible for the general care and maintenance of the College. All 
            enquiries via the main helpdesk.<br>
            </div>
        </div>
        
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