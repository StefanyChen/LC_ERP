<?php session_start();
if ($_SESSION['id']== NULL)
{
  header('Location:log_login.php');
}   ?>
<!DOCTYPE html>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "peopleresource";
  try {
      $conn = mysqli_connect($servername,$username ,$password,$dbname);
      $sql = "SELECT * FROM `employees` WHERE e_name_cn = '".$_SESSION['name']."'";
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
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
 		table{
   		/*border: 1px solid black;*/
   		width:90% ;
   		margin:auto;
   		margin-top:30px;
		}
		th{
		padding:0;
		margin:0;
		background-color:#F4A460;
		text-align:center;
		font-size:20px;
		line-height:40px ;
		}
		td{
		text-align: left;
		}
		tr{
			height:38px;
		}
  </style>
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
        <div class="left-title"  style="background-color:#FFDDAA">
          <p style="margin:auto 20px">個人資料</p>
        </div>
        <div class="left-title" >
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
        <div class="left-title">
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
            <a href="user_bTrip_list.php" style="margin:auto 35px">差勤明細</a>
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
				<p class="right-top-title">個人資料</p>
			</div>
			<div class="right-down">
				<table>
					<?php
						while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<th colspan="6">員工基本資料</th>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>人員編號：<?php echo $row["e_sn"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>到職日期：<?php echo $row["e_date"];?></td>
	<!-- 人員大頭貼  --><td colspan="2" rowspan="4"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>中文姓名：<?php echo $row["e_name_cn"];?></td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>性別：<?php echo $row["e_sex"];?></td>
						<td ><i class="fa fa-star" style="font-size:17px;color:red"></i>生日：<?php echo $row["e_birth"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>英文姓名：<?php echo $row["e_name_en"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>ID：<?php echo $row["e_personalID"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>婚姻：<?php echo $row["e_marriage"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>血型：<?php echo $row["e_blood"];?></td>
					</tr>
					<tr>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>通訊地址：<?php echo $row["e_address"];?></td>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>郵件信箱：<?php echo $row["e_email"];?></td>
					</tr>
					<tr>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人：<?php echo $row["e_emergency"];?></td>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人手機：<?php echo $row["e_em_mobile"];?></td>
					</tr>
					<tr>
						<th colspan="6" style=" ;"><i class="fa fa-star" style="font-size:17px;color:red"></i>學歷</th>
					</tr>
						<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">最高學歷</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">學校</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">科系</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">畢/肄/在學</th>
					</tr>
<!-- 學歷表格  -->	<tr>
						<td ><?php echo $row["e_edu"];?></td>
						<td ><?php echo $row["e_edu_high"];?></td>
						<td ><?php echo $row["e_edu_dep"];?></td>
						<td ><?php echo $row["e_edu_start"]?></td >
						<td ><?php echo $row["e_edu_end"]?></td >
						<td ><?php echo $row["e_edu_gra"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>經歷</th>
					</tr>
					<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">公司名稱</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">職稱</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">離職原因</th>
					</tr>
<!-- 經歷表格1  -->	<tr>

						<td ><?php echo $row["e_exp_com1"];?></td>
						<td ><?php echo $row["e_exp_posi1"];?></td>
						<td ><?php echo $row["e_exp_start1"];?></td>
						<td ><?php echo $row["e_exp_end1"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason1"];?></td>
					</tr>
					<tr>
<!-- 經歷表格2  -->						<td ><?php echo $row["e_exp_com2"];?></td>
						<td ><?php echo $row["e_exp_posi2"];?></td>
						<td ><?php echo $row["e_exp_start2"];?></td>
						<td ><?php echo $row["e_exp_end2"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason2"];?></td>
					</tr>
					<tr>
<!-- 經歷表格3  -->		<td ><?php echo $row["e_exp_com3"];?></td>
						<td ><?php echo $row["e_exp_posi3"];?></td>
						<td ><?php echo $row["e_exp_start3"];?></td>
						<td ><?php echo $row["e_exp_end3"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason3"];?></td>
					</tr>
					<tr>
<!-- 經歷表格4  -->		<td ><?php echo $row["e_exp_com4"];?></td>
						<td ><?php echo $row["e_exp_posi4"];?></td>
						<td ><?php echo $row["e_exp_start4"];?></td>
						<td ><?php echo $row["e_exp_end4"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason4"];?></td>
					</tr>
					<tr>
<!-- 經歷表格5  -->		<td ><?php echo $row["e_exp_com5"];?></td>
						<td ><?php echo $row["e_exp_posi5"];?></td>
						<td ><?php echo $row["e_exp_start5"];?></td>
						<td ><?php echo $row["e_exp_end5"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason5"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>技能專長</th>
					</tr>
					<tr>
						<td colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>認證資格:<?php echo $row["e_license"];?></td>
					</tr>
					<?php } ?>
				</table>
			</div>

		</div>
	</div>
</body>
</html>
