<?php
		 $servername = "localhost";
    	 $username = "dev";
         $password = "dev";
         $database = "projectsdb";
         
         $conn = mysqli_connect($servername, $username, $password, $database);
         
		 $sql="INSERT INTO projects (name, student_name, date) VALUES('$_POST[name]','$_POST[student_name]', NOW())";
         if($conn->query($sql)) {
         echo "added";
          header("Location: http://localhost/Projects/show-projects.php"); 
            exit();
         }
?>