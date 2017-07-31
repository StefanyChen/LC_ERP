<?php session_start(); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$p="index";
if(isset($_GET['p'])){
	$p=$_GET['p'];}
	
switch($p){
	case 'index':
		$site_title="LC ERP calender";
		break;
	case 'leave':
		$site_title="LC ERP 請假申請";
		break;
	case 'overtime':
		$site_title="LC ERP 加班申請";
		break;
	case 'travel':
		$site_title="LC ERP 出差申請";
		break;
	case 'allowance':
		$site_title="LC ERP 差旅費申請";
		break;
	case 'announcement':
		$site_title="LC ERP 公告欄";
		break;
	default:
		$site_title="ERROR";
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_title?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="index-style.css">
	<link rel="stylesheet" href="travel-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			var dateFormat = "yy/mm/dd",
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
		<a href="index.php">
			<img class="leftside" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="80" height="80">
		</a>
		<p class="leftside" style="color:white;font-size:50px;margin-left:20px;font-family:Arial;margin-top:30px;margin-bottom:0px">Lei Chi Technology</p>
		<ul class="drop-down-menu">
			<li><a href='?p=index'>行事曆</a></li>
			<li><a href="#">線上打卡</a></li>
			<li><a href="#">表單申請</a>
				<ul>
				<li><a href='?p=leave'>請假申請</a></li>
				<li><a href='?p=travel'>出差申請</a></li>
				<li><a href='?p=overtime'>加班申請</a></li>
				<li><a href='?p=allowance'>差旅費申請</a></li>
				</ul>
			</li>
			<li><a href='?p=announcement'>內部公告</a></li>
			<li><a href="logout.php">登出</a></li>
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
	<div>
	<?php if($p==="index"): ?>
		<div style="margin:20px 10px 20px 10px;width:800px;height:700px;background-color:white;padding:10px;border:1px solid #003377;float:right">
		<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vhjf6uu7e02u6o37t3egm1tn80%40group.calendar.google.com&amp;color=%23f6d2b6&amp;ctz=Asia%2FTaipei" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	<?php elseif($p==="leave"): ?>
		<div class="right-up">
		<h1 class="text">請假申請<h1>
		<form>
		<p class="p">申請人：</p>
		<p class="p">請假日期/時間：<input class="input_text" type="text" id="from" name="from" size="8"> <input class="input_text" type="time" name="tfrom" size="7"> 至 <input class="input_text" type="text" id="to" name="to" size="8"> <input class="input_text" type="time" name="tto" size="7"></p>
		<p class="p">請假時數：<input class="input_text" type="text" name="" size="5"></p>
		<p class="p">請假類別：	<input type="radio" name="l_type" value="">病假   
								<input type="radio" name="l_type" value="">事假   
								<input type="radio" name="l_type" value="">喪假   
								<input type="radio" name="l_type" value="">補休
								<input type="radio" name="l_type" value="">婚產假
								<input type="radio" name="l_type" value="">公假
								<input type="radio" name="l_type" value="">其他 <input class="input_text" type="text" size="5" name="l_type_other" value=""> </p>
		<p class="p">請假事由：<input class="input_text" type="text" name="" placeholder=" 請輸入詳細說明" size="50"></p>
		<p class="p">備註：<input class="input_text" type="text" name="" size="50"></p>
		<input type="summit" name="" class="btn" value="送出表單" size="6.5">
		</form>
		</div>
	<?php elseif($p==="overtime"): ?>
		<div class="right-up">
		<h1 class="text">加班申請<h1>
		<form>
		<p class="p">申請人：</p>
		<p class="p">加班日期：<input class="input_text" type="date" name="o_date" size="8"></p>
		<p class="p">加班時間：<input class="input_text" type="time" name="o_tfrom" size="7"> 至 <input class="input_text" type="time" name="o_tto" size="7"></p>
		<p class="p">申請加班時數：<input class="input_text" type="text" name="" size="5"></p>
		<p class="p">申請補休時數：<input class="input_text" type="text" name="" size="5"></p>
		<p class="p">加班事由：<input class="input_text" type="text" name="" placeholder=" 請輸入詳細說明" size="50"></p>
		<p class="p">備註：<input class="input_text" type="text" name="" size="50"></p>
		<input type="summit" name="" class="btn" value="送出表單" size="6.5">
		</form>
		</div>
	<?php elseif($p==="travel"): ?>
	<div class="right-up">
		<h1 class="text">出差申請<h1>
		<form method="post" action="insertTripData.php">
		<p class="p">申請人：<?php echo $_SESSION['name']?></p>
		<p class="p">預計出發日期/時間：<input class="input_text" type="date" name="b_startDate" size="8"> / <input class="input_text" type="time" name="b_startTime" size="7"></p>
		<p class="p">預計結束日期/時間：<input class="input_text" type="date" name="b_endDate" size="8"> / <input class="input_text" type="time" name="b_endTime" size="7"></p>
		<p class="p">出差時數：<input class="input_text" type="text" name="b_totalTime" size="5"></p>
		<p class="p">出差地點：<input class="input_text" type="text" name="b_location" size="15" placeholder=" ex:台北市"></p>
		<p class="p">出差事由：<input class="input_text" type="text" name="b_state" size="50" placeholder=" 請輸入詳細說明"></p>
		<p class="p">備註：<input class="input_text" type="text" name="b_comment" size="50"></p>
		<input type="submit" name="" class="btn" value="送出表單" size="6.5">
		</form>
	</div>
	<?php elseif($p==="allowance"): ?>
		<div class="right-up">
		<h1 class="text">差旅費申請<h1>
		<form>
		<p class="p">申請人：</p>
		<p class="p">預計出發日期/時間：<input class="input_text" type="text" id="from" name="from" size="8"> / <input class="input_text" type="time" name="tfrom" size="7"></p>
		<p class="p">預計結束日期/時間：<input class="input_text" type="text" id="to" name="to" size="8"> / <input class="input_text" type="time" name="tto" size="7"></p>
		<p class="p">出差時數：<input class="input_text" type="text" name="" size="5"></p>
		<p class="p">出差地點：<input class="input_text" type="text" name="" size="15" placeholder=" ex:台北市"></p>
		<p class="p">出差事由：<input class="input_text" type="text" name="" size="50" placeholder=" 請輸入詳細說明"></p>
		<p class="p">備註：<input class="input_text" type="text" name="" size="50"></p>
		
		<p class="p">交通費：火車: <input class="input_text" type="text" name="Transport" value=""> 飛機: <input class="input_text" type="text" name="Transport" value=""><br>
		　　　　高鐵: <input class="input_text" type="text" name="Transport" value=""> 其他: <input class="input_text" type="text" name="Transport" value="">  
		</p>
		<input type="summit" name="" class="btn" value="送出表單" size="6.5">
		</form>
		</div>
	<?php elseif($p==="announcement"): ?>
		<div class="right-up">
		<h1 style="font-family:Microsoft JhengHei">新增公告</h1>
		<input type="text" name="title" class="input_text" style="width:600px;margin-bottom:5px" placeholder="請輸入標題..." >
		<textarea class="input_text" name="new_ann" style="width:600px;height:200px" placeholder="請輸入內容..."></textarea>
		<button class="btn" style="margin-top:10px">送出</button>
		</div>

		<div class="right-down">
		<img class="leftside" src="https://teameowdev.files.wordpress.com/2015/06/main.png?w=240" width="70" height="70"/>
		<h1 class="leftside">Stephanie</h1>
		
		<div class="news"><br><br><br><br><?php
		include_once ('selectNews.php');
		?></div>
		</div>
	<?php else:?>
	<div class="right-up">
		<h1 class="text">您查詢的網頁不存在!<h1>
	</div>
	<?php endif ?>
	</div>
	
	</div>
	
</body>
</html>