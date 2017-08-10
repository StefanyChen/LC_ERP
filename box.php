
<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>

<div class="fancy">
	<form action="approve.php" method="post">
	<h2>退件原因</h2>
	<table cellspacing="0">
          	<th>申請人</th>
          	<th>公差時間</th>
          	<th>開始時間</th>
          	<th>結束時間</th>
          	<th>請假類別</th>
          	<th>請假時數</th>
		<tr>
          	<td style="width:70px"><?php echo $_GET["name"]; ?></td>
          	<td style="width:215px"><?php echo $_GET["startDate"]; ?>~<?php echo $_GET["endDate"];?></td>
          	<td style="width:70px"><?php echo substr( $_GET["startTime"],0,-3);?></td>
          	<td style="width:70px"><?php echo substr( $_GET["endTime"],0,-3);?></td>
          	<td style="width:70px"><?php echo $_GET["type"]?></td>
          	<td style="width:70px"><?php echo $_GET["hrs"];?></td>
          	<?php var_dump($_GET['hrCheck'];)?>
		</tr>
		</table>
		<textarea name="" id="reason" cols="30" rows="10"></textarea>
		<div class="sub_btn">
			<input type="submit" class="btn btn_ok" value="確定"> 
			<input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()">
		</div>
	</form>
</div>