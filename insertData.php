<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$personID=$_POST['personID'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `employee` ( `name`, `mobile`, `email`, `address`, `personID`) VALUES ('$name', '$mobile', '$email', '$address', '$personID');";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location:index.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>