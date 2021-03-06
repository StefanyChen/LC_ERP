<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script>
  $(function(){
    var today = new Date();
    var tomorrow = new Date(today.getTime() + 24 * 60 * 60 * 1000);
    $('#end').datepicker();
    $('#start').datepicker({
      onSelect: function (dat, inst) {
        $('#end').datepicker('option', 'minDate', dat);
      }
    });
  });
  $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
  </script>
  <style>
    input,textarea{
       font-size:18px;
       font-family:Microsoft JhengHei;
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
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">加班申請</p>
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
				<p class="right-top-title">加班申請</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
				<form style="margin-left:30px" method="post" action="../Controller/insert_overtime.php">
					<p>申請人：<?php echo $_SESSION['name']; ?></p>
					<p>加班日期：<input type="text" id="start" name="o_date" size="10"></p>
					<p>時間：<input  type="time" name="o_start" size="7"> to <input  type="time" name="o_end" size="7"></p>
					<p>申請加班費時數：<input type="text" name="o_hrs" size="5"></p>
					<p>申請補修時數：<input type="text" name="o_phrs" size="5"></p>
					<p>加班事由：<br><textarea name="o_state" cols="75" rows="2"  placeholder="請輸入詳細說明"></textarea></p>
					<p>備註：<br><textarea type="text" cols="75" rows="5" name="o_comment" size="50"></textarea></p>
					<input type="submit" name="" value="送出表單" size="6.5" class="btn">
				</form>
			</div>

		</div>
	</div>
</body>
</html>
