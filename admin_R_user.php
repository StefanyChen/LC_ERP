<!DOCTYPE html>

<html>
<head>
<style>
  
</style>
</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";


try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT name,mobile,email,address,personID FROM employee";
    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>

<form>
<table>
<tr>
<td>Name</td>
<td>Mobile</td>
<td>Email</td>
<td>Address</td>
<td>PersonID</td>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["personID"]; ?></td>
<td>
<a href="update_user.php?name=<?php echo $row["name"]; ?>" class="link">
<img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  
<a href="delete_user.php?name=<?php echo $row["name"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td></tr>
<?php
}
?>
</table>
</form>


</body>
</html>