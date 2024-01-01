<!DOCTYPE html>
<html>
<head>
  <title>Mobile First Layout</title>
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
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
            <img src="images\main_2529_image4.png" alt="Building side in the sun" width=100% height=100%>
            <img src="images\IMG_1099.jpeg" alt="Building side in the sun" width=100% height=100%>
            </div> 
        </div>  
    
        <div class="InfoSectionColumn">
            <div class="InfoSection">
            <h1 class="headliner">Academic Information</h1><br>
            •	Faculties - Links to all the Faculty and Departmental Offices with information on staff, courses and events.<br>
            •	A to Z List of Departments - Departmental Homepages.<br>
            •	Library and Learning Resource Services - Information on LLRS services, access to the on-line catalogue, links to external academic resources and guides to using IT to support your studies.<br>
            •	Our Academic Partners - Information on College links.<br>
            •	Research - links to the Research Centres, guide to research opportunities and help on finding research funding.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Administrative Support</h1><br>          
            •	Academic Registry - Information provided by the Academic Registry, including Academic Calendars, Academic Regulations, Module Catalogue, information on award ceremonies and tuition fees.<br>
            •	Student Guide to Regulations - General and Academic Regulations, World Wide Web Code of Practice, Rules Governing the Use of LLRS facilities.<br>
            </div>

            <div class="InfoSection">
            <h1 class="headliner">Student Services</h1><br>       
            •	Advisory and Counselling Centre - academic advice, help for international students, careers guidance, personal counselling, 
            student loans and access funds and support for students with disabilities/learning difficulties.<br>  
            •	Health Centre - guide to the services provided by the University Health Centre.<br>  
            •	Multi-Faith Centre - information regarding the work of the Multi-Faith Centre.<br>  
            •	Pre-School Centre - contact information regarding the University's child care facilities.<br>  
            •	Sports Centre - booking arrangements and facilities.<br>  
            </div>

            <div class="InfoSection">
            <h1 class="headliner">University Services</h1><br>          
            •	Catering Services - guide to the catering facilities on campus.<br>  
            •	Printing Services - information regarding services provided for students.<br>  
            •	Student Accommodation Services - guide to University Accommodation and help on finding accommodation in the private sector.<br>  
            </div>
        </div>
    
    <div class="InfoSectionColumn">
        <div class="InfoSection">
        <img src="images\Cantor4.jpg" alt="cantor outside" width=100% height=100%>
        <div class="InfoSection">
            <h1 class="headliner">Life at the University</h1><br>            
            •	Arts Centre - what's on at the University's arts venues.<br>   
            •	Students' Union - events and services provided by the Students' Union.<br>   
            •	University Guide - a full guide to life at the University.<br>   
            •	Campus Navigator - help with finding your way around campus.<br>   

            </div>

            <div class="InfoSection">
            <h1 class="headliner">Communications</h1><br>
            •	Noticeboards - General, Classified, Events and Alumni noticeboards.<br>
            •	Student Email Search - database of student email addresses.<br>
            •	Staff Search - database of staff email addresses.<br>
            •	A to Z List of Services - full A to Z list of University Services.<br>
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