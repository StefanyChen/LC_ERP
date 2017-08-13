<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$name=$_POST['name'];
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
    // sql to delete a record
    $sql = "SELECT * FROM `message`";
    $result=mysqli_query($conn,$sql);
   


    while($row=mysqli_fetch_array($result)){
    	if($row['name']==$name){
    	echo $row['contain'];
    }
	}
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>