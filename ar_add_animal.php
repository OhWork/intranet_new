<?php if (!empty($_SESSION['user_name'])):
    include_once 'form/change2thaidate.php';
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $rs_zoo = $db->findbyPK('zoo','zoo_id',$user_zoo)->execute();
    @$zoo = mysqli_fetch_assoc($rs_zoo,MYSQLI_ASSOC);
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbmainadult = new label('ผู้ใหญ่');
    $lbcharge = new label('ปกติ(เสียค่าบัตร)');
    $lbadultchargenf = new label('ผู้ใหญ่ ปกติ(เสียค่าบัตร)');
    $lbchildchargenf = new label('เด็ก ปกติ(เสียค่าบัตร)');
    $lbpromotion = new label('บัตรส่วนลดโปรโมชั่น');
    $lbfree = new label('ยกเว้น / หมู่คณะ ไม่เสียค่าบัตร');
    $lbproject = new label('ในโครงการไม่เสียค่าบัตร');
    $lbtour = new label('โครงการทัวร์สวนสัตว์');
    $lbjoinproject = new label('เข้าร่วมโครงการทัวร์');
    $lbadultcharge = new label('ผู้ใหญ่(เสียค่าบัตร)');
    $lbchildcharge = new label('เด็ก(เสียค่าบัตร)');
    $lbmainchild = new label('เด็ก/นักเรียน');
    $lbmainspecial = new label('นักศึกษา/ครู/ทหาร/ตำรวจ');
    $lbmainforeigner = new label('นักท่องเที่ยวต่างขาติ');
    $lbforeignercharge = new label('เสียค่าบัตร');
    $lbforeignerpromotion = new label('บัตรส่วนลด');
    $lbforeignerfree = new label('ไม่เสียค่าบัตร');
    $lbmainnsf = new label('ไนท์ซาฟารี');
    $lbmainvehicle = new label('ยานพาหนะ');
    $lbspecialpj = new label('โครงการทัวร์สวนสัตว์');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $lbbus = new label('รถบัส');
    $lbcar = new label('รถยนต์');
    $lbmtc = new label('จักรยานยนต์');
    //$txtday = new textfieldcalendarreadonly('touristreport_date','datepicker','','date-picker form-control','input-group-addon','datepicker');
    $txtday = new datetimepicker('touristreport_date','datepicker','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','','#datepicker','','');

    $year = date("Y");
    $md = date("m-d");
     $txtday->value = date("Y-m-d");

    $txtadult1 = new textfield('touristreport_adult_ch','','form-control css-require','','');
    $txtadult1->value = 0;
    $txtadult1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtadult0 = new textfield('touristreport_adult_free','','form-control css-require','','');
    $txtadult0->value = 0;
    $txtadult0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtadult2 = new textfield('touristreport_adult_pm','','form-control css-require','','');
    $txtadult2->value = 0;
    $txtadult2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtchild1 = new textfield('touristreport_child_ch','','form-control css-require','','');
    $txtchild1->value = 0;
    $txtchild1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtchild0 = new textfield('touristreport_child_free','','form-control css-require','','');
    $txtchild0->value = 0;
    $txtchild0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtchild2 = new textfield('touristreport_child_pj','','form-control css-require','','');
    $txtchild2->value = 0;
    $txtchild2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtchild3 = new textfield('touristreport_child_pm','','form-control css-require','','');
    $txtchild3->value = 0;
    $txtchild3->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtspecial1 = new textfield('touristreport_special_ch','','form-control css-require','','');
    $txtspecial1->value = 0;
    $txtspecial1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtspecial0 = new textfield('touristreport_special_free','','form-control css-require','','');
    $txtspecial0->value = 0;
    $txtspecial0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeigneradult1 = new textfield('touristreport_foreigner_adult_ch','','form-control css-require','','');
    $txtforeigneradult1->value = 0;
    $txtforeigneradult1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeigneradult0 = new textfield('touristreport_foreigner_adult_free','','form-control css-require','','');
    $txtforeigneradult0->value = 0;
    $txtforeigneradult0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeigneradult2 = new textfield('touristreport_foreigner_adult_pm','','form-control css-require','','');
    $txtforeigneradult2->value = 0;
    $txtforeigneradult2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeignerchild1 = new textfield('touristreport_foreigner_child_ch','','form-control css-require','','');
    $txtforeignerchild1->value = 0;
    $txtforeignerchild1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeignerchild0 = new textfield('touristreport_foreigner_child_free','','form-control css-require','','');
    $txtforeignerchild0->value = 0;
    $txtforeignerchild0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtforeignerchild2 = new textfield('touristreport_foreigner_child_pm','','form-control css-require','','');
    $txtforeignerchild2->value = 0;
    $txtforeignerchild2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtchargeproject = new textfield('touristreport_project_ch','','form-control css-require','','');
    $txtchargeproject->value = 0;
    $txtchargeproject->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtsafariadult1 = new textfield('touristreport_safari_adult_ch','','form-control css-require','','');
    $txtsafariadult1->value = 0;
    $txtsafariadult1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtsafarichild1 = new textfield('touristreport_safari_child_ch','','form-control css-require','','');
    $txtsafarichild1->value = 0;
    $txtsafarichild1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtbus = new textfield('touristreport_vehicle_bus','','form-control css-require','','');
    $txtbus->value = 0;
    $txtbus->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtcar = new textfield('touristreport_vehicle_car','','form-control css-require','','');
    $txtcar->value = 0;
    $txtcar->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtmtc = new textfield('touristreport_vehicle_mtc','','form-control css-require','','');
    $txtmtc->value = 0;
    $txtmtc->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $button = new buttonok("ส่งข้อมูลผู้เข้าชมของสวนสัตว์","btnSubmit","btn btn-success btn-lg btn-block","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('touristreport','touristreport_id',$id)->executeRow();
	$txtday->value = $r['touristreport_date'];
	$txtadult1->value = $r['touristreport_adult_ch'];
	$txtadult0->value = $r['touristreport_adult_free'];
	$txtadult2->value = $r['touristreport_adult_pm'];
	$txtchild1->value = $r['touristreport_child_ch'];
	$txtchild0->value = $r['touristreport_child_free'];
	$txtchild2->value = $r['touristreport_child_pj'];
	$txtchild3->value = $r['touristreport_child_pm'];
	$txtspecial1->value = $r['touristreport_special_ch'];
	$txtspecial0->value = $r['touristreport_special_free'];
	$txtforeigneradult1->value = $r['touristreport_foreigner_adult_ch'];
	$txtforeigneradult0->value = $r['touristreport_foreigner_adult_free'];
	$txtforeigneradult2->value = $r['touristreport_foreigner_adult_pm'];
	$txtforeignerchild1->value = $r['touristreport_foreigner_child_ch'];
	$txtforeignerchild0->value = $r['touristreport_foreigner_child_free'];
	$txtforeignerchild2->value = $r['touristreport_foreigner_child_pm'];
	$txtchargeproject->value = $r['touristreport_project_ch'];
	$txtsafariadult1->value = $r['touristreport_safari_adult_ch'];
	$txtsafarichild1->value = $r['touristreport_safari_child_ch'];
	$txtbus->value = $r['touristreport_vehicle_bus'];
	$txtcar->value = $r['touristreport_vehicle_car'];
	$txtmtc->value = $r['touristreport_vehicle_mtc'];
	}
	?>
	<div class='row' id="maincontent">
        <div class='col-md-12' style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-2" style="float:left;"></div>
                <div class="col-md-8" style="float:left;">
                    <div class="col-md-12" style="padding-top: 15px;">
                        <h3>เพิ่มข้อมูลผู้เข้าชม<?php $zoo['zoo_name']; ?></h3>
                    </div>
            <hr>
    <?php
    if(empty($_GET['id'])){
    echo $form->open("form_reg","frmMain","","trs_insert_touristreport.php","");
    }else{
       echo $form->open("","frmMain","","trs_insert_touristreport.php","");
    } ?>
                    <div class='col-md-12'>
					<div class='row'>
                        <div class='col-md-3' style="float:left;text-align:center;padding-top:8px;"><?php echo $lbtime ?>
                        </div>
                        <div class='col-md-9 trsinputday' style="float:left;">
                            <div class='date-form dayinbox'>
                                <div class='form-horizontal'>
                                    <div class='control-group'>
                                        <div class='controls'>
                                            <div class='input-group'>
                                                <?php
                                                    echo $txtday;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
			<div id="msg" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div>
            <div class="col-md-12">
                <fieldset class='fieldset1 col-md-12' style="margin-top: 16px;"><legend><?php echo $lbmainadult; ?> </legend>
                    <div class='col-md-3'  style="float:left;"><?php echo $lbcharge; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtadult1; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbpromotion; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtadult2; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbfree; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtadult0; ?></div>
                </fieldset>
                <fieldset class='fieldset2 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbmainchild; ?> </legend>
                    <div class='col-md-3'  style="float:left;"><?php echo $lbcharge; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtchild1; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbpromotion; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtchild3; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbfree; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtchild0; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbproject; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtchild2; ?></div>
                </fieldset>
                <fieldset class='fieldset3 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbtour; ?> </legend>
                    <div class='col-md-3' style="float:left;"><?php echo $lbjoinproject; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtchargeproject; ?></div>
                </fieldset>
                <fieldset class='fieldset3 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbmainspecial; ?> </legend>
                    <div class='col-md-3' style="float:left;"><?php echo $lbcharge; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtspecial1; ?></div>
                    <div class='col-md-3' style="float:left;"><?php echo $lbfree; ?></div>
                    <div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtspecial0; ?></div>
                </fieldset>
                <fieldset class='fieldset4 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbmainforeigner; ?></legend>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-2'>
								<b>ผู้ใหญ่</b>
							</div>
							<div class='col-md-10'>
							</div>
						</div>
					</div>
					<hr>
					<div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignercharge; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeigneradult1; ?></div>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignerpromotion; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeigneradult2; ?></div>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignerfree; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeigneradult0; ?></div>
						</div>
                    </div>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-2'>
								<b>เด็ก</b>
							</div>
							<div class='col-md-10'>
							</div>
						</div>
					</div>
					<hr>
					<div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignercharge; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeignerchild1; ?></div>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignerpromotion?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeignerchild2; ?></div>
							<div class='col-md-3' style="float:left;"><?php echo $lbforeignerfree; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtforeignerchild0; ?></div>
						</div>
                    </div>
                </fieldset>
                <fieldset class='fieldset6 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbmainnsf; ?></legend>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3' style="float:left;"><?php echo $lbadultchargenf; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtsafariadult1; ?></div>
						</div>
                    </div>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3'style="float:left;"><?php echo $lbchildchargenf; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtsafarichild1; ?></div>
						</div>
                    </div>
                </fieldset>
                 <fieldset class='fieldset6 col-md-12' style="margin-top: 10px;"><legend><?php echo $lbmainvehicle; ?></legend>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3' style="float:left;"><?php echo $lbbus; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtbus; ?></div>
						</div>
                    </div>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3'style="float:left;"><?php echo $lbcar; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtcar; ?></div>
						</div>
                    </div>
                    <div class='col-md-12'>
						<div class='row'>
							<div class='col-md-3'style="float:left;"><?php echo $lbmtc; ?></div>
							<div class='col-md-9 form-group has-feedback' style="float:left;"><?php echo $txtmtc; ?></div>
						</div>
                    </div>
                </fieldset>
        <input type='hidden' id='zoo_id'name='touristreport_zoo_zoo_id' value="<?php echo $user_zoo; ?>">
        <input type='hidden' name='log_user' value='<?php echo $log_user;?>'/>
        <input type='hidden' id='trs_date' value="<?php echo $r['touristreport_date']; ?>"/>
        <input type='hidden' name='touristreport_id' value="<?php echo $_GET['id']; ?>"/>
        <div class='col-md-12' style="margin-top: 10px;">
			<div class='row'>
				<div class='col-md-4'></div>
				<div class='col-md-4'><?php echo $button; ?></div>
				<div class='col-md-4'></div>
            </div>
        </div>
    </div>
</div>
        <div class="col-md-2" style="float:left;"></div>
<script >
   $(function () {
        $('#datepicker').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        });
    //ตรวจค่าตัวเลข
    function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
	$(document).ready(function() {
    var datefix = $('#datepicker').val();
    if(datefix){

    }else{
        $("#msg").html();
    $("#btnSubmit").attr("disabled", true);
    }
    console.log($('#datepicker').val());
	$(".date").on("change.datetimepicker",function(e) {
    var datepick = $(this).val();
        $("#msg").html("checking...");
        $.ajax({
            url: "trs_checkday.php",
            data: {datepicker : $('#datepicker').val(), zoo : $('#zoo_id').val()},
            type: "POST",
            success: function(data) {
                if(data > '0') {
                    $("#msg").html('<span class="text-danger">วันที่นี้ถูกบันทึกแล้ว</span>');
                    $("#btnSubmit").attr("disabled", true);
//                     console.log("ครั้งที่มีวันอยู่");
//                     console.log(datepick);
                } else {
                    $("#msg").html('<span class="text-success">วันที่นี้สามารถใข้งานได้</span>');
                    $("#btnSubmit").attr("disabled", false);
//                     console.log("ครั้งที่ไม่มีวัน");
//                     console.log(datepick);
                }
            }
        });
    });
    $("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
	});
});


</script>
	<?php
    echo $form->close(); ?>
            </div>
        </div>
	</div>
	<?php endif;
	?>
