<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "erp";
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM overtime_apply";
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
	<th></th>
	<th>申請人</th>
	<th>加班日期</th>
	<th>開始時間</th>
	<th>結束時間</th>
	<th>申請加班時數</th>
	<th>申請補修時數</th>
	<th>加班事由</th>
	<th>備註</th>
	<th>加班時數</th>
	<th>補修總計時數</th>
	<th>人資確認</th>
	<th></th>
	<th>老闆確認</th>
	<th></th>
<?php
while($row = mysqli_fetch_array($result)) {
?>

<tr>
	
	<td>
		<a href="delete_bTripData.php?id=<?php echo $row["id"]; ?>"  class="link">
		<img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px' hspace='10' />
		</a>
	</td>
	<td><?php echo $row["o_name"]; ?></td>
	<td><?php echo $row["o_date"]; ?></td>
	<td><?php echo $row["o_start"]; ?></td>
	<td><?php echo $row["o_end"];?></td>
	<td><?php echo $row["o_hrs"];?></td>
	<td><?php echo $row["o_phrs"];?></td>
	<td><?php echo $row["o_state"]?></td>
	<td><?php echo $row["o_comment"];?></td>
	<td><?php echo $row["o_total"];?></td>
	<td><?php echo $row["o_ptotal"];?></td>
	<td><?php echo $row["o_hrCheck"];?></td>
	<td>
		<a href="update_hrCheck.php?id=<?php echo $row["id"]; ?>" class="link">
		<img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' />
		</a>
	</td>  
	<td><?php echo $row["o_bossCheck"]; ?></td>
	<td>
		<a href="update_bossCheck.php?id=<?php echo $row["id"]; ?>" class="link">
		<img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' />
		</a>
	</td>  
</tr>
<?php
}
?>
</table>

</body>
</html>