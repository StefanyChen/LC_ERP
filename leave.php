<!DOCTYPE html>
<html>
<head>
	<title>請假申請</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="travel-style.css">
	<link rel="stylesheet" href="index-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			var dateFormat = "mm/dd/yy",
			from = $( "#from" ).datepicker({
				defaultDate: "+0D",
				changeMonth: true,
				numberOfMonths: 1})
        .on( "change", function() {
			to.datepicker( "option", "minDate", getDate( this ) );}),
			to = $( "#to" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1})
		.on( "change", function() {
			from.datepicker("option", "maxDate", getDate( this ) );});
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>

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
		<h1 class="text">表單申請</h1>
		<a href="travel.php" >
		<p class="pp">出差申請</p>
		</a>
		<p class="pp">請假申請</p>
		<a href="allowance.php" >
		<p class="pp">差旅費申請</p>
		</a>
	</div>
	<div class="right-up">
		<h1 class="text">請假申請<h1>
		<form>
		<p class="p">請假日期/時間：<input class="input_text" type="text" id="from" name="from" size="8"> <input class="input_text" type="time" name="tfrom" size="7"> 至 <input class="input_text" type="text" id="to" name="to" size="8"> <input class="input_text" type="time" name="tto" size="7"></p>
		<p class="p">請假時數：<input class="input_text" type="text" name="" ></p>
		<p class="p">假勤項目：<input type="radio" name="l_type" value="">病假   <input type="radio" name="l_type" value="" >事假   <input type="radio" name="l_type" value="" >喪假   <input type="radio" name="l_type" value="">其他 <input class="input_text" type="text" size="5" name="l_type_other" value=""> </p>
		<p class="p">職務代理人：<input class="input_text" type="text" name="" ></p>
		<p class="p">簽核代理人：<input class="input_text" type="text" name="" ></p>
		<p class="p">說明：<input class="input_text" type="text" name="" placeholder="請輸入詳細說明" size="50"></p>
		</form>
		<button class="btn">送出表單</button>
	</div>
	
	</div>
</body>
</html>