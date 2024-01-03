<?php
require_once("includes/config.php");
// query to get course by CourseID
$getCourseID = $_GET["CourseID"];
$stmt = $mysqli->prepare( "SELECT * FROM courses WHERE CourseID = ?" );
$stmt->bind_param( 'i', $getCourseID );
$stmt->execute();
$result = $stmt->get_result();
$obj = $result->fetch_object();
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
    <div class="InfoSection">
    <?php                 
        if ($obj->CourseSubject == 'Computing') {
            echo "<img src='images\\ACES-032-Computing-Playstation-Lab.jpg' alt=''>";
        } else {
            echo "<img src='images\IMG_1318.jpeg' alt=''>";
        }
    ?>           
    </div>
  </div>
  <div class="InfoSectionColumn">

    <div class="InfoSection"> 
    <h1 class="Topic">
        <?php
        echo "{$obj->CourseTitle}";
        ?>
    </h1>
                <?php     
                    echo "<div class='InfoSection'>";    
                    echo "<div class='listing'>";    
                    echo "<td class='tableCourseListing'>{$obj->CourseSummary}</td>";
                    echo "</div>";
                    echo "</div>";
                ?>
    
                



                <table>
                <tr>
                <td class="tablelisting">Course Award</td>
                <td class="tablelisting">UCAS Code</td>
                <td class="tablelisting">UCAS points</td>
                
                </tr>
                <?php   
        
                    echo "<td class='tableCourseListing'>{$obj->CourseAwardName}</td>";        
                    echo "<td class='tableCourseListing'>{$obj->UcasCode}</td>";                       
                    echo "<td class='tableCourseListing'>{$obj->UcasPoints}</td>";     
                        
                    echo "</tr>";
                ?>
                </table>
                <table>
                <tr>     
                <td class="tablelisting">Year of entry</td> 
                <td class="tablelisting">Attendance mode</td>
                <td class="tablelisting">Study Length</td>

                </tr>
                <?php    
                    echo "<td class='tableCourseListing'>{$obj->YearOfEntry}</td>";                
                    echo "<td class='tableCourseListing'>{$obj->ModeOfAttendance}</td>";     
                    echo "<td class='tableCourseListing'>{$obj->StudyLength}</td>";     
    
                    echo "</tr>";
                ?>
                </table>
                <table>
                <tr>      

                <td class="tablelisting">Foundation Year</td>
                <td class="tablelisting">Course Subject</td>
                <td class="tablelisting">Recruiting</td>
                </tr>
                <?php                 
    
                    echo "<td class='tableCourseListing'>";

                        if ($obj->HasFoundationYear == 1) {
                            echo "Appicable";     // changes the 1 into saying that there is an foundationyear
                        } else {
                            echo "Not applicable"; 
                        }

                    echo "</td>";
                    echo "<td class='tableCourseListing'>{$obj->CourseSubject}</td>"; 
                    echo "<td class='tableCourseListing'>";

                        if ($obj->NoLongerRecruiting == 1) {
                            echo "Not recruiting";     // changes the 1 into text, using an if else statement with php(same for foundation year)
                        } else {                        // 1 = no spots left on course
                            echo "Still recruiting"; 
                        }

                    echo "</td>";
    
                    echo "</tr>";
                ?>
                </table>
    </div>   
  </div>
  <div class="InfoSectionColumn">
    <div class="InfoSection">
    <?php                 
        if ($obj->CourseSubject == 'Computing') {
            echo "<img src='images\\ACES-032-Computing-Playstation-Lab.jpg' alt=''>";
        } else {
            echo "<img src='images\IMG_1318.jpeg' alt=''>";
        }
    ?>       
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