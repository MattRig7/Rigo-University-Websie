<!DOCTYPE html>

<html>
    
<document class="a">     


<head>
  
    <title>Subjects</title>
   <link rel="stylesheet" type="text/css" href="course.css">
    <meta charset=utf-8>
       <?php
    include("header.inc")     
 ?>
    
    
     <nav class="a">
        <?php
    include("nav.inc")
    
    ?>
    </nav>
        
</head>
    
        
    <body>  
 
       
               
         <table>
        <tr>
            <th>Subjects</th>
        </tr>
             
  <?php
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from courses";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<tr>\n";
                print "<td><a href='subject.php?id={$row['course_id']}'>{$row['subject']}</a></td>\n";
                print "</tr>\n";
            }
        ?>

        </table>
</body>   
   <?php
    include("footer.inc")   
    ?>    
</document>  
    
</html>