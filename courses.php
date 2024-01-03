<?php 
require_once('includes/config.php');
$queryCoursesComputing = "SELECT * FROM courses WHERE NoLongerRecruiting = 0 ORDER BY CourseID ASC LIMIT 0,17";
$resultsCoursesComputing = $mysqli->query($queryCoursesComputing);
$queryCoursesDesign = "SELECT * FROM courses ORDER BY CourseID ASC LIMIT 18,24";
$resultsCoursesDesign = $mysqli->query($queryCoursesDesign);
$queryCoursesUnavailable = "SELECT * FROM courses WHERE NoLongerRecruiting = 1 ORDER BY CourseID ";
$resultsCoursesUnavailable = $mysqli->query($queryCoursesUnavailable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
  <script src="javascript\javascript.js" defer></script>
  <title>Courses at Cantor College</title>
</head>
<body>
  <header>
  <?php
    include("includes/header.php");
    ?>
  </header>

  <main>
     <div class="InfoSectionColumn">
     
        <h1 class="Topic">Computing Courses</h1>
            <table>
            <tr>
            <td class="tablelisting">Courses</td>
            <td class="tablelisting">Course Type</td>
            <td class="tablelisting">Course Award</td>
            
            </tr>
            <?php
                while ($obj = $resultsCoursesComputing->fetch_object()){
                  echo "<tr>";
                  echo "<td class='tableCourseListing'><a href=\"course_details.php?CourseID={$obj->CourseID}\">{$obj->CourseTitle}</a></td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseType}</td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseAwardName}</td>";
                  
                  echo "</tr>";
                }
            ?>

            </table>
         
     </div>
     <div class="InfoSectionColumn">
     <div>           
        <h1 class="Topic">Art and Design Courses</h1>
            <table>
            <tr>
            <td class="tablelisting">Courses</td>
            <td class="tablelisting">Course Type</td>
            <td class="tablelisting">Course Award</td>
       
            </tr>
            <?php
                while ($obj = $resultsCoursesDesign->fetch_object()){
                  echo "<tr>";
                  echo "<td class='tableCourseListing'><a href=\"course_details.php?CourseID={$obj->CourseID}\">{$obj->CourseTitle}</a></td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseType}</td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseAwardName}</td>";
                  
                  echo "</tr>";
                }
            ?>

            </table>
        </div>      
        <h1 class="Topic">Unavailable Courses</h1>
            <table>
            <tr>
            <td class="tablelisting">Courses</td>
            <td class="tablelisting">Course Type</td>
            <td class="tablelisting">Course Award</td>
           
            </tr>
            <?php
                while ($obj = $resultsCoursesUnavailable->fetch_object()){
                  echo "<tr>";
                  echo "<td class='tableCourseListing'><a href=\"course_details.php?CourseID={$obj->CourseID}\">{$obj->CourseTitle}</a></td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseType}</td>";
                  echo "<td class='tableCourseListing'>{$obj->CourseAwardName}</td>";
                  
                  echo "</tr>";
                }
            ?>

            </table>
           
     </div>
  </main>

  <footer>
  <?php
    include("includes/footer.php");
    ?>
  </footer>
</body>
</html>