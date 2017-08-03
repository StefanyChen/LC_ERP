<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $sql = "SELECT e_name_cn FROM `employees`";
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
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		th	{
			background-color:#FFBB66;
			}
		td,tr,th	{
			width:15px;
		}
	</style>
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
						<a href="admin_employee.php" style="margin:auto 30px;color:#666666">員工資料列表</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">員工資料修改</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新增員工資料</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<a href="admin_bTrip.php" style="margin:auto 30px;color:#666666">差勤審核</a>
					</div>
					<div class="left-list">
						<p style="margin:auto 30px;color:#666666">差勤明細</p>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">公佈欄</p>
					</div>
					<div class="left-list">
						<a href="admin_addNews.php" style="margin:auto 30px;color:#666666">新增公告</a>
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
						<a href="user_index" style="margin:auto 20px">登出人資管理</a>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">差勤明細列表</p>
			</div>
			<div><!--rightBottom-->
				<div style="width:100%;height:70px;margin:auto;;border-bottom:solid 1px #CCC;">
					
				</div>
				<div>
					<table cellspacing="0">
						<th colspan="2">姓名</th>
						<th>病假</th>
						<th>事假</th>
						<th>婚/產假</th>
						<th>公假</th>
						<th>喪假</th>
						<th>補休</th>
						<th>特休</th>
					<?php
						while($row1 = mysqli_fetch_array($result)) {
							$name=$row1["e_name_cn"];
							$sql = "SELECT SUM(`l_compensatoryLevae`),SUM(`l_annualLeave`),SUM(`l_marriageLeave`),SUM(`l_personalLeave`),SUM(`l_funeralLeave`),SUM(`l_officialLeave`),SUM(`l_sickLeave`) FROM `leave` WHERE l_name='$name'";
							$result1= mysqli_query($conn,$sql);
							$row = mysqli_fetch_array($result1);
					?>
					<tr><tr>
					<td rowspan="2"><?php 	echo $row1["e_name_cn"];?></td>
					<td>月</td>
					<td><?php 	echo $row["SUM(`l_sickLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_personalLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_marriageLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_officialLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_funeralLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_compensatoryLevae`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_annualLeave`)"]; ?></td></tr>
					<td>總</td>
					<td><?php 	echo $row["SUM(`l_sickLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_personalLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_marriageLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_officialLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_funeralLeave`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_compensatoryLevae`)"]; ?></td>
					<td><?php 	echo $row["SUM(`l_annualLeave`)"]; ?></td></tr>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>