<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    // sql to delete a record
    $sql = "DELETE FROM employee WHERE name='" . $_GET["name"] . "'";

    mysqli_query($conn,$sql);
    header("Location:selectEmployee.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>