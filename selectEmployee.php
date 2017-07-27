<!DOCTYPE html>
<html>
<head>
	<title>員工資料</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="index-style.css">
	<link rel="stylesheet" href="travel-style.css">
	<style>
		table, th, td {
		border: 1px solid black;
		padding:5px;
		margin:auto;
		font-family:Microsoft JhengHei;}
	</style>
<script type="text/javascript">
function showStuff(id, btn) {
	if(document.getElementById(id).style.display == 'block')
	{
		document.getElementById(id).style.display = 'none';
		btn.value="新增員工資料";
	}
	else{
		document.getElementById(id).style.display = 'block';
		btn.value="取消";
	}
    
    // hide the lorem ipsum text
}
</script>
</head>
<body>
	<div class="top-black">
		<a href="index.php">
			<img class="leftside" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="80" height="80">
		</a>
		<p class="leftside" style="color:white;font-size:60px;margin-left:80px;font-family:Arial;margin-top:30px;margin-bottom:0px">Lei Chi Technology</p>
		<ul class="drop-down-menu">
			<li><a href="#">線上打卡</a></li>
			<li><a href="#">表單申請</a>
				<ul>
				<li><a href="leave.php">請假申請</a></li>
				<li><a href="travel.php">出差申請</a></li>
				<li><a href="allowance.php">差旅費申請</a></li>
				</ul>
			</li>
			<li><a href="index.php">內部公告</a></li>
			<li><a href="logout.php">sign out</a></li>
		</ul>
	</div>
	<div style="background-color:#CCC;margin: 10px auto;width:100%;height:90%;padding:5px 5px">
	<input class="btn" type="button" name="Submit2" value="新增員工資料" onclick="showStuff('memeber', this)"><br>
	<form id="memeber" method="post" action="insertData.php" style="display:none;font-family:Microsoft JhengHei;font-size:20px;margin-left:10px" >
		姓名<input class="input_text" type="text" name="name" value="" =><br>
		電話<input class="input_text" type="text" name="mobile" value=""><br>
		信箱<input class="input_text" type="text" name="email" value=""><br>
		地址<input class="input_text" type="text" name="address" value=""><br>
		身分證字號<input class="input_text" type="text" name="personID" value=""><br>
		<button class="btn" type="submit">送出表單</button>
	</form>
	</div>
	<div style="background-color:#CCC;margin:auto;width:100%;height:90%">	
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "Chen1010";
	$dbname = "peopleresource";

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_rror);
	}

	$sql = "SELECT name,mobile,email,address,personID FROM employee";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{	// output data of each row
		echo "<table><tr><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th>PersonID</th></tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr><td>"."$row[name]"."</td>
					<td>"."$row[mobile]"."</td>
					<td>"."$row[email]"."</td>
					<td>"."$row[address]"."</td>
					<td>"."$row[personID]"."</td>
					</tr>";
		}
	} 
	else {
		echo "0 results";
	}
	$conn->close();
	?>
</div>
</body>
</html>