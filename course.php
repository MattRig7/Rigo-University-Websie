<!DOCTYPE html>

<html>
    <document class="a">    
<head>
    <title>Course</title>
    <link rel="stylesheet" type="text/css" href="course.css">
    <meta charset=utf-8>
    </head>
    <body> 
       <?php
    include("header.inc")     
 ?>

     <nav class="a">
        <?php
    include("nav.inc")
    
    ?>
    </nav>
        
      
                    
          <?php
            $id = $_GET['id']; 
            
            
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from courses where course_id = $id";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
            
                print "<h2>Course Code:{$row['course_code']}</h2>";
                print "<h2>Course Name: {$row['name']}</h2>";
                print "<h3>Subject: {$row['subject']}</h3>";
                print "<h4>Instructor: {$row['instructor']} </h4>";
                print "<h5>Duration(Weeks): {$row['weeks']} </h5>";
                print "<p>{$row['description']}</p>";
    
            }
        ?>
    

</body>  
   <?php
    include("footer.inc")   
    ?>  
    </document>        
  </html>    
