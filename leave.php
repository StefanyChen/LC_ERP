
<!DOCTYPE html>
<html>
<head>
	<title>一般員工-請假申請</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="top">
		<a href="index.php">
			<img src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50" style="float:left;margin-left:15px">
		</a>
		<a href="profile.php">
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
						<a href="introduction.php" style="margin:auto 20px">歡迎使用</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="index.php" style="margin:auto 20px">行事曆</a>
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
						<p style="margin:auto 30px;color:#666666">請假申請</p>
					</div>
					<div class="left-list">
						<a href="bTrip.php" style="margin:auto 30px;color:#666666">出差申請</a>
					</div>
					<div class="left-list">
						<a href="overtime.php" style="margin:auto 30px;color:#666666">加班申請</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">差勤明細</a>
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
						<a href="#" style="margin:auto 20px">登出</a>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">請假申請</p>
			</div>
			<div class="right-down">
				<form style="margin-left:15px;font-family:Microsoft JhengHei;font-size:18px" action="insert_bTrip.php">
					<p>申請人：</p>
					<p>請假日期/時間：<input type="date" name="from" size="8"> <input type="time" name="tfrom" size="7"> 至 <input type="date" name="to" size="8"> <input type="time" name="tto" size="7"></p>
					<p class="p">請假時數：<input type="text" name="" size="5"></p>
					<p class="p">請假類別：	<input type="radio" name="l_type" value="">病假   
								<input type="radio" name="l_type" value="">事假   
								<input type="radio" name="l_type" value="">喪假   
								<input type="radio" name="l_type" value="">補休
								<input type="radio" name="l_type" value="">婚產假
								<input type="radio" name="l_type" value="">公假
								<input type="radio" name="l_type" value="">其他 <input class="input_text" type="text" size="5" name="l_type_other" value=""></p>
					<p>請假事由：<input type="text" name="" placeholder=" 請輸入詳細說明" size="50"></p>
					<p>備註：<input type="text" name="" size="50"></p>
					<input type="summit" name="" class="btn" value="送出表單" size="6.5">
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>