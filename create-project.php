<?php
		 $servername = "localhost";
    	 $username = "dev";
         $password = "dev";
         $database = "projectsdb";
         
         $conn = mysqli_connect($servername, $username, $password, $database);
         if(isset($_FILES['file'])){
           $file = $_FILES['file']['name'];
           $target =  __DIR__ . "\projects\\". $file; 
           echo $_FILES['file']['name'];
           echo nl2br("\n");
           if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            echo "Image uploaded successfully";
          }
          else{
            echo "Failed to upload image";
          }
         }        
         
		 $sql="INSERT INTO projects (name, student_name, date, document_name) VALUES('$_POST[name]','$_POST[student_name]', NOW(), '". $file. "')";
         if($conn->query($sql)) {
         
          header("Location: http://localhost/Projects/show-projects.php"); 
            exit();
         }
?>