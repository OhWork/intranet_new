<?php
    if (!empty($_SESSION['user_name'])):
//     $id = $_GET['id'];
    $form = new form();
    $lbnameth = new label('ชื่อ - นามสกุล (ไทย)');
    $lbnameen = new label('ชื่อ - นามสกุล (อังกฤษ)');
    $lbcode = new label('เลขที่สมาชิก');
    $lbaddress = new label('ที่อยู่');
    $lbdatereg = new label('วันที่สมัคร');
    $lbdateend  = new label('วันที่หมดอายุ');
    $lbdatestart = new label('ตั้งแต่วันที่');
    $lbemail = new label('อีเมล');
    $txtname = new textfield('hrctf_name','problem_work','form-control','','');
   
    $txtposition = new textfield('hrctf_position','problem_position','form-control','','');
    $txthospital = new textfield('hrctf_hosname','','form-control','','');
    $txtprovince = new textfield('hrctf_hosprovince','','form-control','','');
    $txtwhoname = new textfield('hrctf_whoname','hrctf_ctfname_id','form-control','','');
    $txtwhofu = new textfield('hrctf_whofu','hrctf_ctfname_id','form-control','','');
    $txteducation = new textfield('hrctf_educationname','hrctf_ctfname_id','form-control','','');
    $txtfamilyname = new textfield('hrctf_familyname','hrctf_familyname_id','form-control','','');

    $button = new buttonok("ส่งแบบขอหนังสือรับรอง","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","hrs_insert_certificate.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;" id="maincontent">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
					<h4>สมัครสมาชิกสโมสรผู้รักสวนสัตว์</h4>
				</div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbcode; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbnameth; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtname; ?>
				</div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbnameen; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtname; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbaddress; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtposition; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbdevision; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $selectdevision->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_per_hrs','1',''); ?>
				</div>
				
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
    						<input type='hidden' name='hrctf_datereg' value='<?php echo date("Y-m-d");?>'/>
    						<input type='hidden' name='hrctf_dateupdate' value='-'/>
    						<input type='hidden' name='hrctf_status' value='S'/>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
</div>
<?php echo $form->close();
              endif;
              ?>
<script>
 
		$('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
   $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
         $("#datetimepicker1").on("change.datetimepicker", function (e) {
            $('#datetimepicker2').datetimepicker('minDate', e.date);
             var widget = $(this).find(".bootstrap-datetimepicker-widget");
        });
        $("#datetimepicker2").on("change.datetimepicker", function (e) {
            $('#datetimepicker1').datetimepicker('maxDate', e.date);
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
        });
		$("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
		});

   });
</script>
