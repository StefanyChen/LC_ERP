<!DOCTYPE html>
<html>
<head>
	<title>ERP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="index-style.css">
	<link rel="stylesheet" href="travel-style.css">
</head>
<body>
	<div class="top-black">
		<a href="index.html">
			<img class="leftside" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="80" height="80">
		</a>
		<p class="leftside" style="color:white;font-size:60px;margin-left:80px;font-family:Arial;margin-top:30px;margin-bottom:0px">Lei Chi Technology</p>
		<ul class="drop-down-menu">
			<li><a href="#">線上打卡</a>
			</li>
			<li><a href="#">表單申請</a>
				<ul>
					<li><a href="leave.php">請假申請</a>
					</li>
					<li><a href="travel.php">出差申請</a>
					</li>
					<li><a href="allowance.php">差旅費申請</a>
					</li>
				</ul>
			</li>
			<li><a href="index.php">內部公告</a></li>
			<li><a href="#">sign out</a></li>
		</ul>
	</div>
	<div class="bottom">
	<div class="left">
		<div class="profile">
		<h1>My Profile</h1>
		<p><img src="http://static.commentcamarche.net/www.commentcamarche.net/pictures/nLJSfM5U6lLTQbiUtwXmdiUYajn9aJAyvjxpfXbOkdUUMQWnZ3OdtFhB4zwEAhAW-efa5cf51c0711fafc61e73f90e05bc12-s-.png" width="106" height="106"></p>
		<p><hr></p>
		<p>name</p>
		<p>region</p>
		<p>birth</p>
		</div>
	</div>
	<div class="right-up">
	<h1 style="font-family:Microsoft JhengHei">新增公告</h1>
	<textarea class="input_text" style="width:600px;height:200px" placeholder="請輸入內容..."></textarea>
	<button class="btn" style="margin-top:10px">送出</button>
	</div>

	<div class="right-down">
	<img class="leftside" src="https://teameowdev.files.wordpress.com/2015/06/main.png?w=240" width="70" height="70"/>
	<h1 class="leftside">Stephanie</h1>
	
	<div class="news"><br><br><br><br><?php
	include_once ('selectNews.php');
	?></div>
	</div>
	
</body>
</html>