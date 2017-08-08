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
<html>
<head>
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
 		table{
   		/*border: 1px solid black;*/
   		width:95% ;
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
		width:15%;

		}
		td{
			text-align: left;
			padding:0;
			width:15%;
		}
		tr{
			height:38px;

		}
		input{
			background-color:transparent;
			font-family:Microsoft JhengHei;
			font-size:18px;
			margin-right:0px;
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
					<div class="left-title" style="background-color:#FFDDAA">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list" >
						<a href="admin_employee.php" style="margin:auto 35px">員工資料列表</a>
					</div>
						<div class="left-list">
							<a href="admin_editEmployee.php" style="margin:auto 35px">編輯員工資料</a>
						</div>
						<div class="left-list">
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">新增員工資料</p>
						</div>
				</div>
<!-- 第一組選單結束  -->
<!-- 第二組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<a href="admin_bTrip.php" style="margin:auto 35px">差勤審核</a>
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
						<a href="admin_editNews.php" style="margin:auto 35px">新增公告</a>
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
				<p class="right-top-title">新增員工資料</p>
			</div>
			<div class="right-down">
			<form method="post" action="insert_user.php">
				<table>
					<tr>
						<th colspan="6">員工基本資料</th>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>員工編號：<input type="text" name="e_sn" size="4"></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>到職日期：<input type="date" name="e_date" size="1"></td>
	<!-- 人員大頭貼  --><td colspan="2" rowspan="4"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>中文姓名：<input type="text" name="e_name_cn" size="12"></td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>性別：<input type="radio" name="e_sex" value="男">男  <input type="radio" name="e_sex" value="女">女</td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>手機：<input type="text" name="e_mobile" size="10"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>英文姓名：<input type="text" name="e_name_en" size="12"></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>ID：<input type="text" name="e_personalID" size="12"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>婚姻：<input type="radio" name="e_marriage" value="已婚">已婚  <input type="radio" name="e_marriage" value="未婚">未婚</td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>血型：<input type="radio" name="e_blood" value="A">A  <input type="radio" name="e_blood" value="B">B  <input type="radio" name="e_blood" value="O">O  <input type="radio" name="e_blood" value="AB">AB</td>
					</tr>
					<tr>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>通訊地址：<input type="text" name="e_address" size="35"></td>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>郵件信箱：<input type="email" name="e_email" size="35"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>生日：<input type="date" name="e_birth" size="1"></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人：<input type="text" name="e_emergency" size="12"></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人手機：<input type="text" name="e_em_mobile" size="16"></td>
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
						<td >
						<select name="e_edu">
							<option value="" selected></option>
							<option value="高中職">高中職</option>
							<option value="大專">大專</option>
							<option value="大學">大學</option>
							<option value="碩士">碩士</option>
							<option value="博士">博士</option>
						</select>
						</td>
						<td ><input type="text" name="e_edu_high" size="15"></td>
						<td ><input type="text" name="e_edu_dep" size="15"></td>
						<td ><input type="date" name="e_edu_start"></td >
						<td ><input type="date" name="e_edu_end"></td >
						<td ><input type="radio" name="e_edu_gra" value="畢業">畢業  <input type="radio" name="e_edu_gra" value="肄業">肄業  <input type="radio" name="e_edu_gra" value="就學">就學</td>
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

						<td ><input type="text" name="e_exp_com1" size="15"></td>
						<td ><input type="text" name="e_exp_posi1" size="15"></td>
						<td ><input type="date" name="e_exp_start1"></td>
						<td ><input type="date" name="e_exp_end1"></td>
						<td colspan="2"><input type="text" name="e_exp_reason1" size="25"></td>
					</tr>
					<tr>
<!-- 經歷表格2  -->		<td ><input type="text" name="e_exp_com2" size="15"></td>
						<td ><input type="text" name="e_exp_posi2" size="15"></td>
						<td ><input type="date" name="e_exp_start2"></td>
						<td ><input type="date" name="e_exp_end2"></td>
						<td colspan="2"><input type="text" name="e_exp_reason2" size="25"></td>
					</tr>
					<tr>
<!-- 經歷表格3  -->		<td ><input type="text" name="e_exp_com3" size="15"></td>
						<td ><input type="text" name="e_exp_posi3" size="15"></td>
						<td ><input type="date" name="e_exp_start3"></td>
						<td ><input type="date" name="e_exp_end3"></td>
						<td colspan="2"><input type="text" name="e_exp_reason3" size="25"></td>
					</tr>
					<tr>
<!-- 經歷表格4  -->		<td ><input type="text" name="e_exp_com4" size="15"></td>
						<td ><input type="text" name="e_exp_posi4" size="15"></td>
						<td ><input type="date" name="e_exp_start4"></td>
						<td ><input type="date" name="e_exp_end4"></td>
						<td colspan="2"><input type="text" name="e_exp_reason4" size="25"></td>
					</tr>
					<tr>
<!-- 經歷表格5  -->		<td ><input type="text" name="e_exp_com5" size="15"></td>
						<td ><input type="text" name="e_exp_posi5" size="15"></td>
						<td ><input type="date" name="e_exp_start5"></td>
						<td ><input type="date" name="e_exp_end5"></td>
						<td colspan="2"><input type="text" name="e_exp_reason5" size="25"></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>技能專長</th>
					</tr>
					<tr>
						<td colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>認證資格:<input type="text" name="e_license" size="50"></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>在職資料</th>
					</tr>
					<tr>
						<th colspan="2">員工狀態</th>
						<th>員工型態</th>
						<th>工作地點</th>
						<th colspan="2">分機號碼</th>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i><input type="radio" name="e_status" value="已離職">已離職  <input type="radio" name="e_status" value="在職中">在職中</td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i><input type="radio" name="e_type" value="正職">正職<input type="radio" name="e_type" value="工讀">工讀</td>
						<td ><i class="fa fa-star" style="font-size:17px;color:red"></i><input type="radio" name="e_location" value="台北">台北  <input type="radio" name="e_location" value="中壢">中壢</td>
						<td colspan="2"><input type="text" name="e_extension"size="20"></td>
					</tr>
				</table>
				<input type="submit" class="btn" style="margin:5px 25px;">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
