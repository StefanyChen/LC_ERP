<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM `leave` WHERE l_name='".$_SESSION['name']."'";
    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
<html>
<head>
<style>
 table, th, td {
   border: 1px solid black;
}
td{
	padding:5px;
	text-align:center;
}

</style>
</head>
<body>

<table>

	<th>申請人</th>
	<th colspan="3">公差時間</th>
	<th>開始時間</th>
	<th>結束時間</th>
	<th>請假類別</th>
	<th>請假時數</th>
	<th>請假事由</th>
	<th>備註</th>
	<th>人資確認</th>
	<th>老闆確認</th>

<?php
while($row = mysqli_fetch_array($result)) {
?>

<tr>
	<td><?php echo $row["l_name"]; ?></td>
	<td><?php echo $row["l_startDate"]; ?></td>
	<td>~</td>
	<td><?php echo $row["l_endDate"];?></td>
	<td><?php echo $row["l_startTime"];?></td>
	<td><?php echo $row["l_endTime"];?></td>
	<td><?php echo $row["l_type"]?></td>
	<td><?php echo $row["l_hrs"];?></td>
	<td><?php echo $row["l_state"];?></td>
	<td><?php echo $row["l_comment"];?></td>
	<td><?php echo $row["l_hrCheck"]; ?></td>
	<td><?php echo $row["l_bossCheck"]; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>