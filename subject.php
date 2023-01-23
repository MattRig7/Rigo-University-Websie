<!DOCTYPE html>

<html>
    <document class="a">    
<head>
    <title>Subject</title>
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
            
                print "<h2>Subject:{$row['subject']}</h2>";
                print "<p>Taught by: {$row['instructor']}</p>";
                print "<p>Class associated with Subject: {$row['name']}</p>";
                print "<p>Duration of class(Weeks): {$row['weeks']}</p>";
                print "<p>Description of class: {$row['description']}</p>";
    
            }
        ?>
    

</body>  
   <?php
    include("footer.inc")   
    ?>  
    </document>        
  </html>    
