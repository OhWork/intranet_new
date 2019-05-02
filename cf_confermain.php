<?php
    ob_start();
	session_start();
	include_once 'clearsestion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8' />
		<link rel="stylesheet" href="CSS/bootstrap.css"/>
		<link rel="stylesheet" href="CSS/bootstrap-theme.css"/>
		<link rel="stylesheet" href="CSS/fonts/glyphicons-halflings-regular.eot"/>
		<link rel="stylesheet" href="CSS/fonts/glyphicons-halflings-regular.svg"/>
		<link rel="stylesheet" href="CSS/fonts/glyphicons-halflings-regular.ttf"/>
		<link rel="stylesheet" href="CSS/fonts/glyphicons-halflings-regular.woff"/>
		<link rel="stylesheet" href="CSS/fullcalendar.css"/>
		<link rel="stylesheet" href="CSS/jquery.datetimepicker.css"/ >
		<link rel="stylesheet" href="CSS/main.css"/>
<?php include'inc_js.php';
      include 'script_checkday.php';
	  $columns = array('conferroom_name','event_story','event_start','event_end','event_namers','event_tel');
?>
    </head>
<body>

		<?php
            $page = (int) (!isset($_GET["subpage"]) ? 0 : $_GET["subpage"]);
			$limit = 8; //จำนวนแสดงต่อหน้า
			$startpoint = ($page * $limit) - $limit;
        ?>
<div class='wrapper'>
<div class='box1'>

		<div class='cfm'>
		<?php echo 'ยินดีต้อนรับ คุณ'.$_SESSION['admin_name'];
		$id = $_SESSION['zoo_zoo_id'];
		?>

		<a href="logout.php"><button type="button"class="btn btn-primary btn-xs">
		<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
		</button></a>
		</div>
</div>
		<div class='cfmj'>
				<?php include_once 'addday.php';?>
		</div>
</div>
<!-- end wrapper-->
<div class='box2'>
		<?php
			$rs2 = "user,zoo,confer,event_confer  where admin.zoo_zoo_id = zoo.zoo_id && zoo.zoo_id = confer.zoo_zoo_id && confer.conferroom_id = event_confer.confer_conferroom_id && admin.zoo_zoo_id = $id";
			$rs = $db->findByPK4DESC('user','zoo','confer','event_confer','admin.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','confer.zoo_zoo_id','confer.conferroom_id','event_confer.confer_conferroom_id','admin.zoo_zoo_id',$id,$page,$limit)->execute();


			$grid = new gridView();
			$grid->pr = 'event_id';
			$grid->sts = 'event_status';
			$grid->header = array('<b>สถานที่</b>','<b>เรื่อง</b>','<b>วันและเวลา<br>เริ่มประชุม</b>','<b>วันและเวลา<br>ปิดประชุม</b>','<b>ผู้จอง</b>','<b>เบอร์โทรศัพท์</b>');
			$grid->width = array('250px','100px','230px','230px','100px','150px');
			$grid->delete = 'cf_delete_confer.php';
			$grid->edit = 'cf_change_status.php';
			$grid->view = 'cf_show_admin.php';
			$grid->renderFromDB($columns,$rs);
			echo pagination($rs2,$limit,$page,$url='cf_confermain.php?');

		?>

<script>
    jQuery(function(){
 jQuery('#date_timepicker_start').datetimepicker({
  format:'Y-m-d H:i',
  lang:'th',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():true
   })
  },
  timepicker:true
 });
 jQuery('#date_timepicker_end').datetimepicker({
  format:'Y-m-d H:i',
  lang:'th',
   onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():true
   })
  },
  timepicker:true
 });
});
</script>

<script language="JavaScript">
function chkdel(){if(confirm('ยืนยันการลบข้อมูล')){
return true;
}else{
return false;
}
}
</script>

		<div class='cfmr'>
				<a href="report.php"><button type="button"class="btn btn-primary btn-lg">รายงานแบบรายปี และ เดือน
				<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
				</button>
		</div>
</div><!--end box2-->
</body>
</html>
