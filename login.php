<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>LC_ERP會員登入</title>
		<link rel="stylesheet" href="index-style.css">
		<link rel="stylesheet" href="travel-style.css">

	</head>
	<style>
		form {
			border:#aaa solid 1px;
			margin:20px auto;
			padding:30px;
			width:300px;
		}
		.error{
			color:red;
			font-family:Microsoft JhengHei;
			text-align:center;
		}
	</style>
	<body>
		<div class="top-black">
			<a href="index.php">
				<img class="leftside" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="80" height="80">
			</a>
			<p class="leftside" style="color:white;font-size:60px;margin-left:80px;font-family:Arial;margin-top:30px;margin-bottom:0px">Lei Chi Technology</p>
		</div>
		<form method="post" action="checkUser.php">
			<div>
			<p class="p">帳號：<input class="input_text" type="text" name="username"></p>
			</div>
			<div>
			<p class="p">密碼：<input class="input_text" type="password" name="password"></p>
			</div>
			<button class="btn" type="submit">登入</button>
			<?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
		</form>
	</body>
</html>
