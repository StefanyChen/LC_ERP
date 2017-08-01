<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
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
	<title>差勤審核-加班</title>
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
	</div>
	<div class="down">
		<div class="left">
			<div class="left-top">
				<a href="#" style="line-height:50px;font-family:Microsoft JhengHei;font-size:150%;margin:auto 15px">人資管理</a>
			</div>
			<div style="border-right:solid 1px #CCC"><!--leftBottom-->
				<p style="line-height:20px;border-right:solid 1px #CCC"></p>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list">
						<a href="admin_employee.php" style="margin:auto 30px;color:#666666">員工資料</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<p style="margin:auto 30px;color:#666666">差勤審核</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">差勤明細</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">公佈欄</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新增公告</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新增日程</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="user_index.php" style="margin:auto 20px">登出人資管理</a>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">加班審核</p>
			</div>
			<div><!--rightBottom-->
				<div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
					<a href="admin_bTrip.php" class="right-title">出差審核</a>
					<a href="admin_leave.php" class="right-title">請假審核</a>
					<a href="admin_overtime.php" class="right-title">加班審核</a>
				</div>
				<div>
					<table cellspacing="0">
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
						<td><a href="admin_delete_bTrip.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px' hspace='10' /></a></td>
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
						<td><a href="admin_bTrip_hrCheck.php?id=<?php echo $row["id"]; ?>" class="link">
						<i class="material-icons" style="font-size:15px">check</i></a></td>  
						<td><?php echo $row["o_bossCheck"]; ?></td>
						<td><a href="admin_bTrip_bossCheck.php?id=<?php echo $row["id"]; ?>" class="link">
						<i class="material-icons" style="font-size:15px">check</i></a></td>  
						</tr>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>