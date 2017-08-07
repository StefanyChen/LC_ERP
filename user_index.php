
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="indexStyle.css">
<link rel="stylesheet" type="text/css" href="fullcalendar_drag/css/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="fullcalendar_drag/css/fancybox.css">
<link rel="stylesheet" type="text/css" href="fullcalendar_drag/css/jquery-ui.css">
<style type="text/css">
#calendar{width:80%; margin:50px auto 10px auto}
.fancy{width:450px; height:auto}
.fancy h3{height:30px; line-height:30px; border-bottom:1px solid #d3d3d3; font-size:14px}
.fancy form{padding:10px}
.fancy p{height:28px; line-height:28px; padding:4px; color:#999}
.input{height:20px; line-height:20px; padding:2px; border:1px solid #d3d3d3; width:100px}
.btn{-webkit-border-radius: 3px;-moz-border-radius:3px;padding:5px 12px; cursor:pointer}
.btn_ok{background: rgb(54, 135, 255);border: 1px solid #390;color:#fff}
.btn_cancel{background:#f0f0f0;border: 1px solid #d3d3d3; color:#666 }
.btn_del{background:#f90;border: 1px solid #f80; color:#fff }
.sub_btn{height:32px; line-height:32px; padding-top:6px; border-top:1px solid #f0f0f0; text-align:right; position:relative}
.sub_btn .del{position:absolute; left:2px}

td:hover{
	background-color:#fa3;
}


</style>
<script src='http://code.jquery.com/jquery-1.9.1.js'></script>
<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
<script src='fullcalendar_drag/js/fullcalendar.min.js'></script>
<script src='fullcalendar_drag/js/jquery.fancybox-1.3.1.pack.js'></script>
<script src='fullcalendar_drag/js/jquery.form.min.js'></script>
<script type="text/javascript">
$(function() {
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		dragOpacity: {
			agenda: .5,
			'':.6
		},
		eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
			$.post("fullcalendar_drag/do.php?action=drag",{id:event.id,daydiff:dayDelta,minudiff:minuteDelta,allday:allDay},function(msg){
				if(msg!=1){
					alert(msg);
					revertFunc();
				}
			});
    	},
		
		 eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
			$.post("fullcalendar_drag/do.php?action=resize",{id:event.id,daydiff:dayDelta,minudiff:minuteDelta},function(msg){
				if(msg!=1){
					alert(msg);
					revertFunc();
				}
			});
    	},
		
		
		selectable: true,
		select: function( startDate, endDate, allDay, jsEvent, view ){
			var start =$.fullCalendar.formatDate(startDate,'yyyy-MM-dd');
			var end =$.fullCalendar.formatDate(endDate,'yyyy-MM-dd');
			$.fancybox({
				'type':'ajax',
				'href':'fullcalendar_drag/event.php?action=add&date='+start+'&end='+end
			});
		},
		
		
		
		
		events: 'fullcalendar_drag/json.php',
		dayClick: function(date, allDay, jsEvent, view) {
			var selDate =$.fullCalendar.formatDate(date,'yyyy-MM-dd');
			$.fancybox({
				'type':'ajax',
				'href':'fullcalendar_drag/event.php?action=add&date='+selDate
			});
    	},
		eventClick: function(calEvent, jsEvent, view) {
			$.fancybox({
				'type':'ajax',
				'href':'fullcalendar_drag/event.php?action=edit&id='+calEvent.id
			});
		}
	});
	
});
</script>
</head>
<body>
	<div class="top">
		<a href="user_index.php">
			<img src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50" style="float:left;margin-left:15px">
		</a>
		<a href="user_profile.php">
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
						<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="user_news.php" style="margin:auto 20px">公佈欄</a>
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
						<a href="user_leave.php" style="margin:auto 30px;color:#666666">請假申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip.php" style="margin:auto 30px;color:#666666">出差申請</a>
					</div>
					<div class="left-list">
						<a href="user_overtime.php" style="margin:auto 30px;color:#666666">加班申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip_list.php" style="margin:auto 30px;color:#666666">差勤明細</a>
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
						<a href="log_logout.php" style="margin:auto 20px">登出</a>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">行事曆</p>
			</div>

		<div class="right-dowm" id="main">		
			<div id="calendar" >

				
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>