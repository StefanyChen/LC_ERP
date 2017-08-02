<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

$location=$_POST["Location"];
$type=$_POST["Type"];
$status=$_POST["Status"];

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
	if($location==NULL){
		if($type==NULL){
			if($status==NULL){
				$sql = "SELECT * FROM employees";
				$result = mysqli_query($conn,$sql);}
			else{
				$sql = "SELECT * FROM `employees` WHERE e_status='$status'";
				$result = mysqli_query($conn,$sql);}}
		else{
			if($status==NULL){
				$sql = "SELECT * FROM `employees` WHERE e_type='$type'";
				$result = mysqli_query($conn,$sql);}
			else{
				$sql = "SELECT * FROM `employees` WHERE e_status='$status' && e_type='$type'";
				$result = mysqli_query($conn,$sql);}}}
	else{
		if($type==NULL){
			if($status==NULL){
				$sql = "SELECT * FROM `employees` WHERE e_location='$location'";
				$result = mysqli_query($conn,$sql);}
			else{
				$sql = "SELECT * FROM `employees` WHERE e_status='$status' && e_location='$location'";
				$result = mysqli_query($conn,$sql);}}
		else{
			if($status==NULL){
				$sql = "SELECT * FROM `employees` WHERE e_location='$location' && e_type='$type'";
				$result = mysqli_query($conn,$sql);}
			else{
				$sql = "SELECT * FROM `employees` WHERE e_location='$location' && e_type='$type' && e_status='$status'";
				$result = mysqli_query($conn,$sql);}}}
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
<html>
<head>
	<title>員工資料</title>
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
						<p style="margin:auto 30px;color:#666666">員工資料列表</p>
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
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">員工資料列表</p>
			</div>
			<div><!--rightBottom-->
				<div style="width:100%;height:70px;margin:auto;;border-bottom:solid 1px #CCC;">
					<form method="post" action="admin_employee.php" style="float:left;margin:15px"><select name="Location"><option value="" selected>工作地點</option><option value="台北">台北</option><option value="中壢">中壢</option></select>
					<select name="Type"><option value="" selected>員工型態</option><option value="正職">正職</option><option value="工讀">工讀</option></select>
					<select name="Status"><option value="" selected>員工狀態</option><option value="在職中">在職中</option><option value="已離職">已離職</option></select>
					<input class="btn" type="submit" value="Submit" />
					</form>
				</div>
				<div>
					<div>
					<table cellspacing="0">
						<th>編號</th>
						<th>員工型態</th>
						<th>員工狀態</th>
						<th>工作地點</th>
						<th>中文姓名</th>
						<th>英文姓名</th>
						<th>分機號碼</th>
						<th>電話</th>
						<?php
						while($row = mysqli_fetch_array($result)) {
						?>
						<tr>
						<td><?php echo $row["e_sn"]; ?></td>
						<td><?php echo $row["e_type"]; ?></td>
						<td><?php echo $row["e_status"];?></td>
						<td><?php echo $row["e_location"];?></td>
						<td><?php echo $row["e_name_cn"];?></td>
						<td><?php echo $row["e_name_en"];?></td>
						<td><?php echo $row["e_extension"]?></td> 
						<td><?php echo $row["e_mobile"];?></td>
						</tr>
					<?php } ?>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>