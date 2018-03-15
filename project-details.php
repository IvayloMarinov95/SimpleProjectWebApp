<!DOCTYPE html>
<html>
    <head>
     <title>Details</title>   
     <meta charset="utf8">
    </head>
<body>
  <?php
         $servername = "localhost";
    	 $username = "dev";
         $password = "dev";
         $database = "projectsdb";
         
         $conn = mysqli_connect($servername, $username, $password, $database);

         $sql = "SELECT * FROM `projects` WHERE id = '$_GET[id]'";
         $query= mysqli_query($conn, $sql);
         $result = mysqli_fetch_assoc($query);
         if(!$result) {
            echo mysqli_error($conn); 
         }
                       
         echo "<div>";
         echo "<h1>" . $result["name"] . "</h1>";
         echo "<h1>" . $result["student_name"] . "</h1>";
         echo "<h1>" . $result["date"] . "</h1>";
         echo "</div>";
         

?>
</body>
</html>