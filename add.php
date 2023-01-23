<!DOCTYPE html>

<html>
    
<document class="a">     


<head>
  
    <title>Course</title>
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
    <h2>Add New Course</h2>
    <form method=post action=process_new_course.php enctype="multipart/form-data">
        Course Code<input type=text name=course_id><br>
        Course Name<input type=text name=name><br>
        Subject<input type=text name=subject><br>
        Instructor<input type=text name=instructor><br>
        Weeks<input type=text name=weeks><br>
        Description<br>
        <textarea rows=10 cols=50 name=description></textarea><br>
		<input type="file" name = "file01" />
        <input type=submit value="Add Course">
    </form>
</body>
  <?php
    include("footer.inc")   
    ?>      
</document>       
</html>