<?php 
  $i = $_GET['id'];
    switch($i){
    case 1 : $confer = "ห้องประชุมองค์การสวนสัตว์(ห้องใหญ่)";
    break;
    case 2 : $confer = "ห้องประชุมองค์การสวนสัตว์(ห้องเล็ก)";
    break;
    case 3 : $confer = "ห้องประชุมเก้งเผือก";
    break;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $zoo;?></title>
<meta charset='utf-8' />
<link rel="stylesheet" href="CSS/bootstrap.css"/>
<link rel="stylesheet" href="CSS/bootstrap-theme.css"/>
<link rel="stylesheet" href="CSS/fullcalendar.css"/>
<link rel="stylesheet" href="CSS/fullcalendar.print.css" media="print">
<link rel="stylesheet" href="CSS/jquery.datetimepicker.css"/ >
<link rel="stylesheet" href="CSS/main.css"/>
<?php include('inc_js.php'); ?>
<?php include('cf_switchzoo.php'); ?>
</head>
<body>
<div class="wrapper">
    <div class='row'>
        <div class="col-md-9">
			<h2><?php echo $confer;?></h2>
        </div>
	</div>
        
	<div id='calendar'>
	</div>
	<div class='footer'>
			<div class='fcolor'>
			</div>
			<div class='fmenu'>
				<p>สถานะอนุมัติแล้ว</p>
			</div>
			<div class='fcolor2'>
			</div>
			<div class='fmenu2'>
				<p>สถานะยังไม่อนุมัติ</p>
			</div>
        <div class='bk'>
		<a href="index.php"><button type="button"class="btn btn-primary btn-sm">Back
		</button></a>
		</div>	
		<div class='pim'>
			<input onclick="javascript:window.print()" class="btn btn-primary btn-sm" type="button" value="พิมพ์" name="print2">
		</div>
	</div>
</div>

</body>

</html>
