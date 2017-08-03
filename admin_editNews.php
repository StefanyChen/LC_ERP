<html>
<head>
	<title>公告管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		.clearfix{
			content: "";
    		clear: both;
    		display: table;
    		width: 90%;
    		border-bottom: solid 1px #CCC;
    		margin: auto;
		}
		.col{
			float:left;
			
		}
		#title:hover{
			background-color:#FFDDAA; 
			font-weight:bolder;
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
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">公告管理</p>
			</div>
			

			<div style="margin-top: 15px"><!--right down-->

			<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "peopleresource";
				try {
				    $conn = mysqli_connect($servername,$username ,$password,$dbname);

				    $sql = "SELECT * FROM `news` ORDER BY id DESC";

				    // use exec() because no results are returned
				    $result = mysqli_query($conn,$sql);
				    }
				catch(PDOException $e)
				    {
				    echo $sql . "<br>" . $e->getMessage();
				    }
				?>
				
				<?php
				while($row=mysqli_fetch_array($result)){
				?>

				
				<div id="title" class="clearfix">
					<a href="admin_delete_news.php?id=<?php echo $row["id"]; ?>"  class="link" style="float: left;margin-top:20px">
					<img  title='Delete' src='images/delete.png' width='30px' height='30px'/>
					</a>
					<a href="admin_update_news.php?id=<?php echo $row['id']?>">
						<div class="col" style="margin-left:10px;font-family:Microsoft JhengHei">
						<p style="font-size: 20px">
							<?php echo $row['title'];?>
						</p>
						</div>
						<div style="float:right; margin-right:15px"><p><?php echo $row['release'];?>
						</p>
						</div>
					</a>
				</div>	
				<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>