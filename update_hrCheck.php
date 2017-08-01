<?php
$servername = "localhost";
$username = "root";
$password = "Chen1010";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    // sql to delete a record
    $sql = "UPDATE business SET b_hrCheck='Apply' WHERE id={$_GET['id']}";

    mysqli_query($conn,$sql);
    header("Location:admin_bTrip.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>