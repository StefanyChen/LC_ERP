<?php session_start();
  if ($_SESSION['id']== NULL )
  {
    header('Location:log_login.php');
  }
	elseif ($_SESSION['id']!= NULL && $_SESSION['root']!='admin')
	{
		header('Location: ../user-Model/user_index.php');
	} ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM `leave`";
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
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
</head>
<body>
  <div class="top">
			<img class="titleImg" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50">
		<a href="../user-Model/user_index.php">
			<i id="topIcon" class="material-icons" >exit_to_app</i>
		</a>
		<a href="#">
			<i id="topIcon" class="material-icons">notifications</i>
		</a>
	</div>
<!--    上欄 TOP 結束        -->
	<div class="down">
<!--     左欄 LEFT 開始     -->
		<div class="left">
			<div class="left-top">
				<p class="left-top-title">人資管理</p>
			</div>
<!--    左上欄 LEFT-TOP 結束    -->
			<div class="left-bottom">
<!-- 第一組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list" >
						<a href="admin_employee.php" style="margin:auto 35px">員工資料列表</a>
					</div>
						<div class="left-list">
							<a href="admin_editEmployee.php" style="margin:auto 35px">編輯員工資料</a>
						</div>
						<div class="left-list">
							<a href="admin_addEmployee.php" style="margin:auto 35px">新增員工資料</a>
						</div>
				</div>
<!-- 第一組選單結束  -->
<!-- 第二組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title"  style="background-color:#FFDDAA">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<p style="margin:auto 35px;color:#FFAA33;font-weight:500">差勤審核</p>
					</div>
					<div class="left-list">
						<a href="admin_mission.php" style="margin:auto 35px">差勤明細</a>
					</div>
				</div>
<!-- 第二組選單結束  -->
<!-- 第三組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">公告欄</p>
					</div>
					<div class="left-list">
						<a href="admin_addNews.php" style="margin:auto 35px">新增公告</a>
					</div>
					<div class="left-list">
						<a href="admin_editNews.php" style="margin:auto 35px">編輯公告</a>
					</div>
				</div>
<!-- 第三組選單結束  -->
<!-- 第四組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 35px">新增日程</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 35px">修改日程</a>
					</div>
				</div>
<!-- 第四組選單結束  -->
			</div><!-- 左下欄 LEFT-BOTTOM 結束   -->
		</div><!--左 LEFT 結束 -->
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">差勤審核</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
        <div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
          <div style="float:left">
  					<a href="admin_bTrip.php" class="right-title">出差審核</a>
          </div>
          <div style="float:left;background-color:#FFDDAA">
  					<p class="right-title">請假審核</p>
          </div>
          <div style="float:left">
  					<a href="admin_overtime.php" class="right-title">加班審核</a>
          </div>
  			</div>
<!--  右下欄上方選擇列 結束   -->
<!--  未簽核名單    -->
        <div style="margin-left:10px">
         <p style="font-size:18px;font-family:Microsoft JhengHei">未簽核名單</p>
          <table cellspacing="0">
          	<th>申請人</th>
          	<th>公差時間</th>
          	<th>開始時間</th>
          	<th>結束時間</th>
          	<th>請假類別</th>
          	<th>請假時數</th>
          	<th>請假事由</th>
          	<th>備註</th>
          	<th colspan="2">人資確認</th>
          	<th colspan="2">老闆確認</th>
          <?php
          while($row = mysqli_fetch_array($result)) {
          if(($row["l_hrCheck"]=='簽核中' AND $row["l_bossCheck"]=='簽核中') OR ($row["l_hrCheck"]=='通過'AND $row["l_bossCheck"]=='簽核中')){?>
          <tr>
          	<td style="width:70px"><?php echo $row["l_name"]; ?></td>
          	<td style="width:215px"><?php echo $row["l_startDate"]; ?>~<?php echo $row["l_endDate"];?></td>
          	<td style="width:70px"><?php echo substr( $row["l_startTime"],0,-3);?></td>
          	<td style="width:70px"><?php echo substr( $row["l_endTime"],0,-3);?></td>
          	<td style="width:70px"><?php echo $row["l_type"]?></td>
          	<td style="width:70px"><?php echo $row["l_hrs"];?></td>
          	<td style="width:200px"><?php echo $row["l_state"];?></td>
          	<td style="width:200px"><?php echo $row["l_comment"];?></td>
            <?php if($row["l_hrCheck"]=='簽核中') {?>
            <td style="width:35px">
              <a href="../Controller/approve.php?a=yes&b=leave&c=hr&id=<?php echo $row["id"];?>">
              <i class="material-icons" style="font-size:15px">check</i></a></td>
            <td style="width:35px">
              <a href="../Controller/approve.php?a=no&b=leave&c=hr&id=<?php echo $row["id"];?>">
              <i class="material-icons" style="font-size:15px">clear</i></a></td>
            <?php }
            else{?>
              <td colspan="2"><?php echo $row["l_hrCheck"]?> </td> <?php  } ?>
            <?php if($row["l_hrCheck"]=='簽核中') {?>
              <td colspan="2"></td> <?php  }
            else{?>
              <td style="width:35px"><a href="../Controller/approve.php?a=yes&b=leave&c=boss&id=<?php echo $row["id"];?>">
              <i class="material-icons" style="font-size:15px">check</i></a></td>
              <td style="width:35px"><a href="../Controller/approve.php?a=no&b=leave&c=boss&id=<?php echo $row["id"];?>">
              <i class="material-icons" style="font-size:15px">clear</i></a></td> <?php }?>
          </tr>
          <?php }} ?>
          </table>
        </div>
<!--  已簽核名單    -->
        <div style="margin-left:10px">
          <p style="font-size:18px;font-family:Microsoft JhengHei">簽核完成名單</p>
        	<table cellspacing="0">
            <th>申請人</th>
            <th>公差時間</th>
            <th>開始時間</th>
            <th>結束時間</th>
            <th>請假類別</th>
            <th>請假時數</th>
            <th>請假事由</th>
            <th>備註</th>
            <th>人資確認</th>
            <th>老闆確認</th>
          <?php
            $sql = "SELECT * FROM `leave`";
            $result = mysqli_query($conn,$sql);
  					while($row2 = mysqli_fetch_array($result)) {
            if((($row2["l_hrCheck"]=='不通過') AND ( $row2["l_bossCheck"]=='簽核中'))
            || (($row2["l_hrCheck"]!='簽核中') AND ( $row2["l_bossCheck"]!='簽核中'))  ){
          ?>
          <tr>
            <td style="width:70px"><?php echo $row2["l_name"]; ?></td>
            <td style="width:215px"><?php echo $row2["l_startDate"]; ?>~<?php echo $row2["l_endDate"];?></td>
            <td style="width:70px"><?php echo substr( $row2["l_startTime"],0,-3);?></td>
            <td style="width:70px"><?php echo substr($row2["l_endTime"],0,-3);?></td>
            <td style="width:70px"><?php echo $row2["l_type"]?></td>
            <td style="width:70px"><?php echo $row2["l_hrs"];?></td>
            <td style="width:200px"><?php echo $row2["l_state"];?></td>
            <td style="width:200px"><?php echo $row2["l_comment"];?></td>
            <td style="width:50px"><?php echo $row2["l_hrCheck"]; ?></td>
            <td style="width:50px"><?php echo $row2["l_bossCheck"]; ?></td>
          </tr>
          <?php }} ?>
          </table>
        </div><!-- 表格結束  -->
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->

</body>
</html>
