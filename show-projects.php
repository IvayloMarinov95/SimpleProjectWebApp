<!DOCKTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>HomePage</title>
    <style>
    table, th, tr, td{
        border:1px solid black;
    }
    
    </style>
    </head>    
    <body>
        <div class="button">
            <a href="add-project.php">Add</a>
        </div>
        <div class="tbl">
            <table border="1">
                <tr>
                    <td>Project name</td>
                    <td>Student name</td>
                    <td>Date</td>
                    <td><a href="viewProject.php">View</a></td>
                    <td><a href="editProject.php">Edit</a></td>
                    <td><a href="deleteProject.php">Delete</a></td>
                </tr>
                <?php
                    $servername = "localhost";
                    $username = "dev";
                    $password = "dev";
                    $database = "projectsdb";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    $sql = "SELECT * FROM `projects`" ;
                    $result= $conn->query($sql);
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>".$row["name"]."</td><td>".$row["student_name"]."</td><td>".$row["date"]."</td></tr>";
                        }
                    }
              ?>      
           </table>
        </div>  
    </body>
</html>
