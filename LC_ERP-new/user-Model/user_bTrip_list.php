<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
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
  th{
    background-color:#FFDEAD;
  }
  td,tr,th{
    border-left: solid 1px white;
    border-right: solid 1px white;
  }
  tr:hover{
  	background-color:#FFEFD5;
  }
</style>
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="top">
			<img class="titleImg" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50">
		<a href="../Controller/log_logout.php">
			<i id="topIcon" class="material-icons" >exit_to_app</i>
		</a>
		<a href="#">
			<i id="topIcon" class="material-icons">notifications</i>
		</a>
    <?php if ($_SESSION['root'] == 'admin'){?>
		    <a href="../admin-Model/admin_index.php">
			    <i id="topIcon" class="material-icons">https</i>
		    </a><?php }
    ?>
	</div>
<!--    上欄 TOP 結束        -->
	<div class="down">
		<!--     左欄 LEFT 開始     -->
		<div class="left">
			<div class="left-top">
				<p class="left-top-title">一般員工</p>
			</div>
		<!--    左上欄 LEFT-TOP 結束    -->
			<div class="left-bottom">
				<div class="left-title" >
					<a href="user_profile.php" style="margin:auto 20px">個人資料</a>
				</div>
				<div class="left-title">
					<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
				</div>
				<div class="left-title">
					<a href="user_index.php"style="margin:auto 20px">行事曆</a>
				</div>
				<div class="left-title">
					<a href="user_news.php" style="margin:auto 20px">公佈欄</a>
				</div>
				<div class="left-title">
					<a href="#" style="margin:auto 20px">打卡資訊</a>
				</div>
				<div class="left-title" style="background-color:#FFDDAA">
					<p style="margin:auto 20px">表單申請</p>
				</div>
					<div  class="left-list">
						<a href="user_leave.php" style="margin:auto 35px">請假申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip.php" style="margin:auto 35px">出差申請</a>
					</div>
					<div class="left-list">
						<a href="user_overtime.php" style="margin:auto 35px">加班申請</a>
					</div>
					<div class="left-list">
						<p style="margin:auto 35px;color:#FFAA33;font-weight:500">差勤明細</p>
					</div>
				<div class="left-title">
					<a href="#" style="margin:auto 20px">員工訓練</a>
				</div>
        <div class="left-title">
          <a href="#" style="margin:auto 20px">更改密碼</a>
        </div>
			</div><!--左下 LEFT-BOTTOM 結束 -->
		</div><!--左 LEFT 結束 -->
<!--    右欄 RIGHT 開始     -->
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">差勤明細</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
      <div class="right-bottom">
  			<div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
          <div style="float:left;background-color:#FFDDAA">
  					<p class="right-title">出差明細</p>
          </div>
          <div style="float:left">
  					<a href="user_leave_list.php" class="right-title">請假明細</a>
          </div>
          <div style="float:left">
  					<a href="user_overtime_list.php" class="right-title">加班明細</a>
          </div>
  			</div>
<!--  右下欄上方選擇列 結束   -->
  			<div>
    			<table cellspacing="0">
    				<th>申請人</th>
    				<th>公差時間</th>
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
      				<td style="width:70px"><?php echo $row["b_name"]; ?></td>
      				<td style="width:215px"><?php echo $row["b_startDate"]?>~<?php echo $row["b_endDate"];?></td>
      				<td style="width:70px"><?php echo $row["b_startTime"];?></td>
      				<td style="width:70px"><?php echo $row["b_endTime"];?></td>
      				<td style="width:45px"><?php echo $row["b_totalTime"]?></td>
      				<td style="width:70px"><?php echo $row["b_location"];?></td>
      				<td style="width:200px"><?php echo $row["b_state"];?></td>
      				<td style="width:200px"><?php echo $row["b_comment"];?></td>
      				<td style="width:70px"><?php echo $row["b_hrCheck"]; ?></td>
      				<td style="width:70px"><?php echo $row["b_bossCheck"]; ?></td>
      			</tr>
    			  <?php } ?>
    			</table>
  		  </div><!-- 表格 結束  -->
  	  </div><!--  右下欄 RIGHT-BOTTOM 結束    -->
    </div><!--   右欄 RIGHT 結束    -->
  </div><!--    下欄 DOWN 結束    -->

</body>
</html>