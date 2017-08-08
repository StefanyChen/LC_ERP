<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>登入</title>
		<link rel="stylesheet" href="../view/indexStyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<style>
		fieldset{
			font-family:Microsoft JhengHei;
			width:20%;
			margin:auto;
			padding:20px;
		}

		.error{
			color:red;
		}
	</style>
	<body>
		<div class="top">
		<a href="user_index.php">
			<img  class="titleImg" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50">
		</a>
	</div>
	<div >
		<form method="post" action="../Controller/log_checkUser.php">
			<?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
			<fieldset>
			<legend>員工登入</legend>
			<div>
			編號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button class="btn" type="submit" >登入</button>
			</fieldset>
		</form>
	</div>
	</body>
</html>
