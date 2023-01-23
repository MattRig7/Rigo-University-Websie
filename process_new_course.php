<?php
    $course_id = $_POST['course_id'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $instructor = $_POST['instructor'];
    $weeks = $_POST['weeks'];
    $description = $_POST['description'];
	$tmp = $_FILES['file01']['tmp_name'];
    $dest = "Rigo/{$_FILES['file01']['name']}"; // Rigo is the folder name created in htdocs
    move_uploaded_file($tmp, $dest);
    
    //connect
    $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
    
    //the query
    $q = "insert into courses values(null, '$course_id', '$name', '$subject', '$instructor', '$weeks', '$description')";
    
    //execute the query
    mysqli_query($db, $q) or die(mysqli_error($db));
    
    //back to home
    header("Location:index.php");
    exit(0);
?>