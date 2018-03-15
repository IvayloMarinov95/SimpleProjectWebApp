<?php
$servername = "localhost";
$username = "dev";
$password= "dev";
$database = "projectsdb";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "DELETE FROM projects WHERE id ='$_GET[id]'";

if(mysqli_query($conn,$sql))
{
    header("refresh:1; url=show-projects.php");
}
else{
    echo "Not Deleted"; 
}
?>