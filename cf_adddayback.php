<html>
    <head>
<link rel="stylesheet" type="text/css" href="CSS/jquery.datetimepicker.css"/ >
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
    </head>
        <body>
<?php
	include_once('form/main_form.php');
	
	$row = "<div class='row'>";
	$col = "<div class='col-xs-1'>";
	$col2 = "<div class='col-xs-3'>";
	$end = "</div>";
	$form = new form();
	$story = new textfield('event_story');
	$name = new textfield('event_namers');
	$tel = new textfield('event_tel');
	$lbstory = new label('เรื่อง : ');
	$lbname1 = new label('ชื่อผู้ขอใช้ห้องประชุม : ');
	$lbfay = new label('ฝ่าย : ');
	$lbdate = new label('วัน : ');
	$lboffice = new label('ผู้จอง');
	$lboffice = new label('สังกัด :');
    $lblocation = new label('สถานที่');
    $lbname = new label('ชื่อผู้จอง : ');
    $lbtel = new label('เบอร์โทรศัพท์ : ');
    $datests = new textfield2('event_start','some_class','some_class_1','เริ่ม');
    $dateend = new textfield2('event_end','some_class','some_class_2','เสร็จสิ้น');
    $selectoffice->name = 'office_officeid';
	$selectoffice = new selectFromDB();
	$selectoffice->lists = 'โปรดระบุ'; 
	$button = new buttonok('บันทึก','btn btn-success');
	
	if(!empty($_GET['id'])){
	include_once('database/db_tools.php');
	include_once('connect.php');
	
	$id = $_GET['id'];
	$r = $db->findByPK('brand','idbrand',$id)->executeRow();
	$brand->value = $r['bName'];
	}
	
	echo '<h2>เพิ่มวันที่ต้องการจอง</h2>';
	echo '<hr>';
	echo $form->open('','checkday.php');
	echo $row.$col3.$lbname1.$end.$col.''.$end.$end.'<br />';
	echo $row.$col.$lbstory.$end.$col.$story.$end.$end.'<br />';
	echo $row.$col.$lbdate.$end.$col.$datests.$end.$end.'<br/>';
	echo $row.$col.$lbdate.$end.$col.$dateend.$end.$end.'<br/>';	
    echo $row.$col.$lboffice.$end.$col2.$selectoffice->selectFromTB('office','office_id','office_name',$r['office_officeid']).$end.$end.'<br />';
 	echo $row.$col.$lbname.$end.$col.$name.$end.$end.'<br/>';
 	echo $row.$col.$lbtel.$end.$col.$tel.$end.$end.'<br/>';
	echo $button;
	echo "<input type='hidden' name='id' value='$_GET[id]'/>";
	echo $form->close();
	
	
?>
<script src="datepick/jquery.js"></script>
<script src="datepick/jquery.datetimepicker.js"></script>
<script>
    $('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'th',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d.m.Y',
	defaultDate:'8.12.1986', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
    
</script>

        </body>
</html>


