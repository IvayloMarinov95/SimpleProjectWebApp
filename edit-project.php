<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit</title>
    
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

    echo "<form action= 'update-projects.php?id=" . $_GET['id'] . "'" . "method = post>";
    echo "<input type='text' name='name' value='" . $result['name']."'>";
    echo "<input type='text' name='student_name' value='" . $result['student_name']."'>";
    echo "<input type='submit' value='Edit'>";
    echo "</form>";
    


?>    
</body>
</html>

