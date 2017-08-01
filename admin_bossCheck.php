<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    // sql to delete a record
    $sql = "UPDATE `leave` SET l_bossCheck='Apply' WHERE id={$_GET['id']}";

    mysqli_query($conn,$sql);
    header("Location:admin_leave.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>