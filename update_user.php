<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";

try {

    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    if(count($_POST)>0) {
    $sql = "UPDATE employee SET name='".$_POST['name']."', mobile='".$_POST["mobile"]."', email='".$_POST["email"]."', address='". $_POST["address"]."', personID='".$_POST["personID"]."' WHERE id='".$_POST["id"]."'";

    header("Location:selectEmployee.php");
    mysqli_query($conn,$sql);
    }
    $sql = "SELECT id,name,mobile,email,address,personID FROM employee WHERE name='".$_GET['name']."'";
    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>

<html>

<head>    
</head>

<body>
<form action="" method="post">
<tr>
<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
</tr>
<td>mobile</td>
<td><input type="text" name="mobile" value="<?php echo $row['mobile']?>"></td>
</tr>
<td>email</td>
<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
</tr>
<td>address</td>
<td><input type="text" name="address" value="<?php echo $row['address']?>"></td>
</tr>
<td>personID</td>
<td><input type="text" name="personID" value="<?php echo $row['personID']?>"></td>
<td><input type="submit" name="submit" value="更新" ></td>
</form>    
</body>

</html>