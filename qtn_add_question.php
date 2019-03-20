<?php
    $id = $_GET['id'];
    $form = new form();
    $lbname = new label('ชื่อแบบสอบถาม ');
    $lbdatestart = new label('วันที่เริ่มประกาศแบบสอบถาม');
    $lbdateend = new label('วันที่แบบสอบถามสิ้นสุด');
    $lblink = new label('แนบลิ้งที่ต้องการ');
    $lbcolor = new label('สีป้ายประกาศ');
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
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","qtn_insert_question.php","");
?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"  style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มแบบสอบถาม</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<?php echo $lbname; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $txtname; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-right:0px;padding-top:5px;">
						<?php echo $lbdatestart; ?>
					</div>
					<div class='date-form dayinbox col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 form-horizontal control-group controls input-group'>
						<div class='input-group date' id ="datetimepicker1">
							<?php echo $txtdatestart; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-right:0px;padding-top:5px;">
						<?php echo $lbdateend; ?>
					</div>
					<div class='date-form dayinbox col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 form-horizontal control-group controls input-group'>
						<div class='input-group date' id ="datetimepicker1">
							<?php echo $txtdateend; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="float:left;padding-top:5px;">
						<?php echo $lbcolor; ?>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="float:left;">
						<input class="col-6" type="color" id="qtn_color" name="qtn_color" value="#ff0000" style="height:38px;float:left;border-radius:0.25rem;">
						<input class="col-6" type="text" id="color_rgb" name="qtn_color" style="height:38px;float:left;border-radius:0.25rem;">
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<?php echo $lblink; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $txtlink;?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<?php echo $lbtqtnenable; ?>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						<?php echo $radioqtnenable;?>
					</div>
				</div>
			</div>
			<input type='hidden' name='user_user_id' value='<?php echo $_SESSION['user_id']?>'/>
			<input type='hidden' name='qtn_datereg' value='<?php echo $datetime; ?>'/>
			<input type='hidden' name='qtn_id' value='<?php echo $id; ?>'/>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1" style="padding-bottom:16px;">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<?php echo $button; ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php
    echo $form->close();
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
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("dp.hide");
                    $(this).find(".form-control").blur();
                }
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("dp.hide");
                    $(this).find(".form-control").blur();
                }
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
