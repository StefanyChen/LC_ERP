<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
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
<title>差勤明細</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="top">
		<a href="user_index.php">
			<img src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50" style="float:left;margin-left:15px">
		</a>
		<a href="user_profile.php">
			<i class="material-icons" style="margin-top:15px;margin-right:15px;margin-left:5px;float:right;font-size:30px;color:#CCC">person</i>
		</a>
		<a href="#">
			<i class="material-icons" style="margin-top:15px;margin-left:5px;margin-right:5px;float:right;font-size:30px;color:#CCC">notifications</i>
		</a>
		<a href="admin_index.php">
			<i class="material-icons" style="margin-top:15px;margin-right:5px;float:right;font-size:30px;color:#CCC">https</i>
		</a>
	</div>
	<div class="down">
		<div class="left">
			<div class="left-top">
				<a href="#" style="line-height:50px;font-family:Microsoft JhengHei;font-size:150%;margin:auto 15px">一般員工</a>
			</div>
			<div style="border-right:solid 1px #CCC"><!--leftBottom-->
				<p style="line-height:20px;border-right:solid 1px #CCC"></p>
				<div>
					<div class="left-title" >
						<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="#" style="margin:auto 20px">公佈欄</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="#" style="margin:auto 20px">打卡資訊</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">表單申請</p>
					</div>
					<div  class="left-list">
						<a href="user_leave.php" style="margin:auto 30px;color:#666666">請假申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip.php" style="margin:auto 30px;color:#666666">出差申請</a>
					</div>
					<div class="left-list">
						<a href="user_overtime.php" style="margin:auto 30px;color:#666666">加班申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip_list.php" style="margin:auto 30px;color:#666666">差勤明細</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">員工訓練</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新進員工教育訓練</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新進培訓生教育訓練</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="log_logout.php" style="margin:auto 20px">登出</a>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">差勤明細</p>
			</div>
			<div>
			<div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
					<a href="user_bTrip_list.php" class="right-title">出差明細</a>
					<a href="user_leave_list.php" class="right-title">請假明細</a>
					<a href="user_overtime_list.php" class="right-title">加班明細</a>
			</div>
			<div>
		<table>

			<th>申請人</th>
			<th colspan="2">公差時間</th>
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

		<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "peopleresource";
		try {
		    $conn = mysqli_connect($servername,$username ,$password,$dbname);

		    $sql = "SELECT SUM(`l_compensatoryLevae`),SUM(`l_annualLeave`),SUM(`l_marriageLeave`),SUM(`l_personalLeave`),SUM(`l_funeralLeave`),SUM(`l_officialLeave`),SUM(`l_sickLeave`) FROM `leave` WHERE l_name='".$_SESSION['name']."'";
		    // use exec() because no results are returned
		    $result = mysqli_query($conn,$sql);
		    }
		catch(PDOException $e)
		    {
		    echo $sql . "<br>" . $e->getMessage();
		    }
		?>
		<table>
			<tr>
			
		<?php
		 $row = mysqli_fetch_array($result);
		 ?>
		<th rowspan="7" style="width:30%">總請假時數:<?php echo $row["SUM(`l_compensatoryLevae`)"]+$row["SUM(`l_annualLeave`)"]+$row["SUM(`l_marriageLeave`)"]+$row["SUM(`l_personalLeave`)"]+$row["SUM(`l_funeralLeave`)"]+$row["SUM(`l_officialLeave`)"]+$row["SUM(`l_sickLeave`)"];?>  hrs</th>
		<td>補休:<?php echo $row["SUM(`l_compensatoryLevae`)"]; ?>  hrs</td></tr>
		<tr><td>特休:<?php echo $row["SUM(`l_annualLeave`)"];?>  hrs</td></tr>
		<tr><td>婚/產假:<?php echo $row["SUM(`l_marriageLeave`)"];?>  hrs</td></tr>		
		<tr><td>事假:<?php echo $row["SUM(`l_personalLeave`)"];?>  hrs</td></tr>		
		<tr><td>喪假:<?php echo $row["SUM(`l_funeralLeave`)"];?>  hrs</td></tr>		
		<tr><td>公假:<?php echo $row["SUM(`l_officialLeave`)"];?>  hrs</td></tr>
		<tr><td>病假:<?php echo $row["SUM(`l_sickLeave`)"];?>  hrs</td></tr>
		
		</table>

	</body>
</html>