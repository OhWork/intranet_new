<?php
    $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อแบบสอบถาม : ');
    $lbdatestart = new label('วันเริ่ม : ');
    $lbdateend = new label('วันสิ้นสุด : ');
    $lblink = new label('ลิ้ง : ');
    $lbcolor = new label('สี : ');
    $lbtqtnenable = new label("สถานะการใช้งาน :");
    $txtname = new textfield('qtn_name','','form-control','','');
    $txtlink = new textfield('qtn_link','','form-control','','');
    $txtdatestart = new textfieldcalendarreadonly('qtn_datestart','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('qtn_dateend','datetimepicker2','','form-control','input-group-addon btn calen','datetimepicker2');
    $datetime = date("Y-m-d H:i");
    $radioqtnenable = new radioGroup();
    $radioqtnenable->name = 'qtn_enable';
      if(empty($id)){
        	$radioqtnenable->add('ใช้งานได้',1,'');
        	$radioqtnenable->add('ไม่สามารถใช้งานได้',0,'checked');
        	}
    $button = new buttonok("ส่งแบบสอบถาม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");

    if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $r = $db->findByPK('qtn','qtn_id',$id)->executeRow();
     $txtname->value = $r['qtn_name'];
     $txtlink->value = $r['qtn_link'];
     $txtdatestart->value = $r['qtn_datestart'];
     $txtdateend->value = $r['qtn_dateend'];
//     $txttime->value = $r['news_date'];
//     $user_id = $r['user_user_id'];
//     $r2 = $db->findByPK('user','user_id',$user_id)->executeRow();
//     $txtname= $r2['user_name'];
// 	$txtlast= $r2['user_last'];
	if($r["qtn_enable"] == 1){
    	$radioqtnenable->add('ใช้งานได้',1,'checked');
    	$radioqtnenable->add('ไม่สามารถใช้งานได้',0,'');
    	}else if($r['qtn_enable'] == 0){
        $radioqtnenable->add('ใช้งานได้',1,'');
        $radioqtnenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
    }
	echo '<div class="newaddbox">';
    echo $form->open("form_reg","form","","qtn_insert_question.php","");
    echo $lbname.$txtname;
	echo $lbdatestart.$txtdatestart;
	?>
<!--
	<div class='date-form dayinbox col-md-12 form-horizontal control-group controls input-group'>
									<div class='input-group date' id ="datetimepicker1">
										<input type='text' class="form-control datetimepicker " name="qtn_datestart" id='date1' readonly/>
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
									</div>
								</div>
-->
    <?php
	echo $lbdateend.$txtdateend;
	?>
<!--
	<div class='date-form dayinbox col-md-12 form-horizontal control-group controls input-group'>
									<div class='input-group date' id ="datetimepicker2">
										<input type='text' class="form-control datetimepicker" name="qtn_dateend" id='date2' readonly/>
											<span class="input-group-addon datetimepicker-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
									</div>
								</div>
-->
	<?php
	echo $lbcolor;?>
	<input  type="color" id="qtn_color" name="qtn_color" value="#ff0000">
	<input  type="text" id="color_rgb" name="qtn_color">
	<?php
	echo $lblink.$txtlink;
    echo $lbtqtnenable.$radioqtnenable;
    ?>

        <input type='hidden' name='user_user_id' value='<?php echo $_SESSION['user_id']?>'/>
        <input type='hidden' name='qtn_datereg' value='<?php echo $datetime; ?>'/>
        <input type='hidden' name='qtn_id' value='<?php echo $id; ?>'/>

    <?php
    echo "<div class='newaddok'>".$button."</div>";
    echo $form->close();
	echo '</div>';
?>
<script>
	 $(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
            useCurrent: false,
            ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
            locale:moment.locale('th'),
            stepping: 30
        });
        $("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        });
    });
	 $("#color_rgb").val($("#qtn_color").val());
	 $('#qtn_color').on("change",function(){
    	$("#color_rgb").val($("#qtn_color").val());
	 });
	 $('#color_rgb').on("keyup",function(){
    	$("#qtn_color").val($("#color_rgb").val());
	 });
</script>
