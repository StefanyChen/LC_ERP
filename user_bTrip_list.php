<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM business WHERE b_name='".$_SESSION['name']."'";
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
	<th>時數</th>
	<th>公差地點</th>
	<th>公差事由</th>
	<th>備註</th>
	<th>人資確認</th>
	<th>老闆確認</th>

<?php
while($row = mysqli_fetch_array($result)) {
?>

<tr>
	

	<td><?php echo $row["b_name"]; ?></td>
	<td><?php echo $row["b_startDate"]; ?></td>
	<td>~</td>
	<td><?php echo $row["b_endDate"];?></td>
	<td><?php echo $row["b_startTime"];?></td>
	<td><?php echo $row["b_endTime"];?></td>
	<td><?php echo $row["b_totalTime"]?></td>
	<td><?php echo $row["b_location"];?></td>
	<td><?php echo $row["b_state"];?></td>
	<td><?php echo $row["b_comment"];?></td>
	<td><?php echo $row["b_hrCheck"]; ?></td>
	<td><?php echo $row["b_bossCheck"]; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>