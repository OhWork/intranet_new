<?php
    if (!empty($_SESSION['user_name'])):
        $zoo = $_SESSION['subzoo_zoo_zoo_id'];
      $id = $_GET['id'];
   $form = new form();
  $lbevent = new label("ชื่องานกิจกรรม");
   $lbplace = new label("สถานที่จัดงานกิจกรรม");
    $lbdate = new label("วันที่จัดงานกิจกรรม");
  $lbeventno = new label("เพิ่มลำดับ");
  $lbeventenable = new label("สถานะการใช้งาน :");
  $txtevent = new textfield('eventzlfot_name','','col-12 form-control','');
  $txteventno = new textfield('eventzlfot_no','','col-12 form-control','');
  $txtplace = new textfield('eventzlfot_place','','col-12 form-control','');
  $txtdate = new datetimepicker('eventzlfot_date','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','','');
  $radioeventenable = new radioGroup();
  $radioeventenable->name = 'eventzlfot_enable';
  if(empty($id)){
    	$radioeventenable->add('ใช้งานได้',1,'','');
    	$radioeventenable->add('ไม่สามารถใช้งานได้',0,'checked','');
    	}
        
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","zlfot_insert_event.php","");
?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มงานกิจกรรม</h4>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbevent; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtevent; ?>
			</div>
                        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php echo $lbplace; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtplace; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                                <?php echo $lbdate; ?>
                        </div>
                        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                            <div class="row">
                                <?php echo $txtdate; ?>
                            </div>
                        </div>
                        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                            <div class="row">
                                <?php  if(!empty($_GET['id'])){ ?>
                                <div class='col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3'>
                                    <?php echo $lbeventno; ?>
                                </div>
                                <div class='col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3 form-group has-feedback'>
                                    <?php echo $txteventno; ?>
                                </div>
                                <div class='col-xl-8 col-lg-8 col-md-7 col-sm-6 col-6'></div>
                            </div>
                                <?php } ?>
                        </div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top: 14px;"><?php echo $lbeventenable; ?></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-top: 14px;"><?php echo $radioeventenable; ?></div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5"></div>
				</div>
                        </div>
                    <input type='hidden' name='zoo_zoo_id' value='<?php echo $zoo;?>'/>
			<input type='hidden' name='eventzlfot_id' value='<?php echo $_GET['id'];?>'/>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="margin-bottom: 16px;">
				<div class='row'>
					<div class='col-xl-8 col-lg-8 col-md-6'></div>
                                        <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12'>
                                            <div class='row'>
                                                <div class='col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-0'><?php echo $submit ?></div>
                                                <div class="col-xl-6 col-lg-3 col-md-6 col-sm-12 col-12 pr-0">
                                                    <a class="btn btn-danger col-12" href="admin_index.php?url=zlfot_add_member.php">ย้อนกลับ</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php echo $form->close();
              endif;
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
       $("#datetimepicker1").on("change.datetimepicker", function (e) {
            $('#datetimepicker2').datetimepicker('minDate', e.date);
             var widget = $(this).find(".bootstrap-datetimepicker-widget");
        });
	$("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
		});
    });
    </script>